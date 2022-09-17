import { Component, OnInit, ViewChild } from '@angular/core';
import { Settings, AppSettings } from '../../app.settings';
import { AppService } from '../../app.service';
import { Property, Pagination } from '../../app.models';

import { Subscription } from 'rxjs';
import { MediaChange, MediaObserver } from '@angular/flex-layout'; 
import { debounceTime, distinctUntilChanged } from 'rxjs/operators';
import { MapInfoWindow, MapMarker, GoogleMap } from '@angular/google-maps'

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.scss']
})
export class HomeComponent implements OnInit {

  @ViewChild(GoogleMap, { static: false }) map: GoogleMap
  @ViewChild(MapInfoWindow, { static: false }) info: MapInfoWindow
  watcher: Subscription;
  activeMediaQuery = ''; 

  public slides = [];
  public properties: Property[];
  public markers: Array<any> = [];
  public viewType: string = 'grid';
  public viewCol: number = 25;
  public count: number = 8;
  public sort: string;
  public searchFields: any;
  public removedSearchField: string;
  public pagination:Pagination = new Pagination(1, 8, null, 2, 0, 0); 
  public message:string;
  public featuredProperties: Property[];

  public zoom = 10;
  public center: google.maps.LatLng;
  public options: google.maps.MapOptions = {
    // mapTypeId: google.maps.MapTypeId.HYBRID,
    // zoomControl: false,
    // scrollwheel: false,
    // disableDoubleClickZoom: true,
    center: this.center,
    zoom: this.zoom,
    maxZoom: 15,
    minZoom: 8,
  };
  public infoContent: any;

  public settings: Settings;
  constructor(public appSettings:AppSettings, public appService:AppService, public mediaObserver: MediaObserver) {
    this.settings = this.appSettings.settings;

    this.watcher = mediaObserver.media$.subscribe((change: MediaChange) => {
      // console.log(change)
      if(change.mqAlias == 'xs') {
        this.viewCol = 100;
      }
      else if(change.mqAlias == 'sm'){
        this.viewCol = 50;
      }
      else if(change.mqAlias == 'md'){
        this.viewCol = 33.3;
      }
      else{
        this.viewCol = 25;
      }
    });

  }

  ngOnInit() {  
    this.getSlides();
    this.getProperties(); 
    // if (this.mediaObserver.isActive('xs')) {
    //    console.log('mobile version -XS')
    // }
    this.getFeaturedProperties();
  }

  ngDoCheck(){
    if(this.settings.loadMore.load){     
      this.settings.loadMore.load = false;     
      this.getProperties();  
    }
  }

  ngOnDestroy(){
    this.resetLoadMore();
    this.watcher.unsubscribe();
  }

  public getSlides(){
    this.appService.getHomeCarouselSlides().subscribe(res=>{
      this.slides = res;
    })
  }

  public getProperties(){  
    //console.log('get properties by : ', this.searchFields);  
    this.appService.getProperties().subscribe(data => {      
      if(this.properties && this.properties.length > 0){  
        this.settings.loadMore.page++;
        this.pagination.page = this.settings.loadMore.page; 
      }
      let result = this.filterData(data); 
      if(result.data.length == 0){
        this.properties.length = 0;
        this.pagination = new Pagination(1, this.count, null, 2, 0, 0);  
        this.message = 'No Results Found';
        return false;
      } 
      if(this.properties && this.properties.length > 0){  
        this.properties = this.properties.concat(result.data);          
      }
      else{
        this.properties = result.data;  
      }
      this.pagination = result.pagination;
      this.message = null;

      if(this.properties.length == this.pagination.total){
        this.settings.loadMore.complete = true;
        this.settings.loadMore.result = this.properties.length;
      }
      else{
        this.settings.loadMore.complete = false;
      }
      this.markers = [];
      this.properties.forEach((property) => {
        this.markers.push({
          id: property.id,
          position: new google.maps.LatLng(property.location.lat, property.location.lng),
          label: {
            color: 'black',
            text: property.title
          },
          info: property,
          options: {
            icon: {
              url: '/assets/images/markers/red.png',
              labelOrigin: new google.maps.Point(0, 24)
            }
          }
        });
        this.center = new google.maps.LatLng(property.location.lat, property.location.lng);
      });
    })
  }

  public openInfo(marker: MapMarker, content) {
    this.infoContent = content;
    this.info.open(marker);
  }

  public resetLoadMore(){
    this.settings.loadMore.complete = false;
    this.settings.loadMore.start = false;
    this.settings.loadMore.page = 1;
    this.pagination = new Pagination(1, this.count, null, null, this.pagination.total, this.pagination.totalPages);
  }

  public filterData(data){
    return this.appService.filterData(data, this.searchFields, this.sort, this.pagination.page, this.pagination.perPage);
  }

  public searchClicked(){ 
    this.properties.length = 0;
    this.getProperties(); 
  }
  public searchChanged(event){    
    event.valueChanges.subscribe(() => {
      this.resetLoadMore();
      this.searchFields = event.value;
      setTimeout(() => {      
        this.removedSearchField = null;
      });
      if(!this.settings.searchOnBtnClick){     
        this.properties.length = 0;  
      }            
    }); 
    event.valueChanges.pipe(debounceTime(500), distinctUntilChanged()).subscribe(() => { 
      if(!this.settings.searchOnBtnClick){     
        this.getProperties(); 
      }
    });       
  } 
  public removeSearchField(field){ 
    this.message = null;   
    this.removedSearchField = field; 
  } 
 


  public changeCount(count){
    this.count = count;
    this.resetLoadMore();   
    this.properties.length = 0;
    this.getProperties();

  }
  public changeSorting(sort){    
    this.sort = sort;
    this.resetLoadMore(); 
    this.properties.length = 0;
    this.getProperties();
  }
  public changeViewType(obj){ 
    this.viewType = obj.viewType;
    this.viewCol = obj.viewCol; 
  }


  public getFeaturedProperties(){
    this.appService.getFeaturedProperties().subscribe(properties=>{
      this.featuredProperties = properties;
    })
  } 

}

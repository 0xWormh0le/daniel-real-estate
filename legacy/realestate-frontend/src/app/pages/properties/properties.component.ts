import { Component, OnInit, ViewChild } from '@angular/core';
import { MatPaginator } from '@angular/material';
import { MediaChange, MediaObserver } from '@angular/flex-layout';
import { PerfectScrollbarConfigInterface } from 'ngx-perfect-scrollbar';
import { Subscription } from 'rxjs'; 
import { debounceTime, distinctUntilChanged } from 'rxjs/operators'; 
import { Settings, AppSettings } from '../../app.settings';
import { AppService } from '../../app.service';
import { Property, Pagination } from '../../app.models'; 
import { MapInfoWindow, MapMarker, GoogleMap } from '@angular/google-maps'


@Component({
  selector: 'app-properties',
  templateUrl: './properties.component.html',
  styleUrls: ['./properties.component.scss']
})
export class PropertiesComponent implements OnInit {
  @ViewChild('sidenav', { static: true }) sidenav: any;
  public sidenavOpen:boolean = true;
  @ViewChild(MatPaginator, { static: true }) paginator: MatPaginator;

  @ViewChild(GoogleMap, { static: false }) map: GoogleMap
  @ViewChild(MapInfoWindow, { static: false }) info: MapInfoWindow

  public psConfig: PerfectScrollbarConfigInterface = {
    wheelPropagation:true
  };
  public properties: Property[];
  public viewType: string = 'grid';
  public viewCol: number = 33.3;
  public count: number = 12;
  public sort: string;
  public searchFields: any;
  public removedSearchField: string;
  public pagination:Pagination = new Pagination(1, this.count, null, 2, 0, 0); 
  public message:string;
  public watcher: Subscription;

  public markers: Array<any> = [];

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


  public settings: Settings
  constructor(public appSettings:AppSettings, public appService:AppService, public mediaObserver: MediaObserver) {
    this.settings = this.appSettings.settings;    
    this.watcher = mediaObserver.media$.subscribe((change: MediaChange) => { 
      if (change.mqAlias == 'xs') {
        this.sidenavOpen = false;
        this.viewCol = 100;
      }
      else if(change.mqAlias == 'sm'){
        this.sidenavOpen = false;
        this.viewCol = 50;
      }
      else if(change.mqAlias == 'md'){
        this.viewCol = 50;
        this.sidenavOpen = true;
      }
      else{
        this.viewCol = 33.3;
        this.sidenavOpen = true;
      }
    });

  }

  ngOnInit() {
    this.getProperties();
  }

  ngOnDestroy(){ 
    this.watcher.unsubscribe();
  }

  public getProperties(){   
    this.appService.getProperties().subscribe(data => { 
      let result = this.filterData(data); 
      if(result.data.length == 0){
        this.properties.length = 0;
        this.pagination = new Pagination(1, this.count, null, 2, 0, 0);  
        this.message = 'No Results Found';
        return false;
      } 
      this.properties = result.data; 
      this.pagination = result.pagination;
      this.message = null;

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


  public resetPagination(){ 
    if(this.paginator){
      this.paginator.pageIndex = 0;
    }
    this.pagination = new Pagination(1, this.count, null, null, this.pagination.total, this.pagination.totalPages);
  }

  public filterData(data){
    return this.appService.filterData(data, this.searchFields, this.sort, this.pagination.page, this.pagination.perPage);
  }

  public searchClicked(){ 
    this.properties.length = 0;
    this.getProperties(); 
    window.scrollTo(0,0);  
  }
  public searchChanged(event){
    event.valueChanges.subscribe(() => {   
      this.resetPagination(); 
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
    this.properties.length = 0;
    this.resetPagination();
    this.getProperties();
  }
  public changeSorting(sort){    
    this.sort = sort; 
    this.properties.length = 0;
    this.getProperties();
  }
  public changeViewType(obj){ 
    this.viewType = obj.viewType;
    this.viewCol = obj.viewCol; 
  } 


  public onPageChange(e){ 
    this.pagination.page = e.pageIndex + 1;
    this.getProperties();
    window.scrollTo(0,0);  
  }

}
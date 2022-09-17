@extends('layouts.admin') @section('template_linked_css') @endsection @section('content')
<div class="main-panel">
    <div class="container">
        <div class="panel-header bg-dark-gradient">
            <div class="page-inner py-5">
                <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                    <div>
                        <h2 class="text-white pb-2 fw-bold">User Dashboard</h2>
                        <h5 class="text-white op-7 mb-2">welcome to visit our site</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-inner mt--5">
            <div class="row mt--2">
                <div class="col-md-6">
                    <div class="card full-height">
                        <div class="card-body">
                            <div class="card-title">Overall statistics</div>
                            <div class="d-flex flex-wrap justify-content-around pb-2 pt-4">
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">

                    <div class="row">
                        <div class="col-md-12">
                        <div class="card">
								<div class="card-header">
									<div class="card-title">Line Chart</div>
								</div>
								<div class="card-body">
									<div class="chart-container"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
										<canvas id="lineChart" width="388" height="300" class="chartjs-render-monitor" style="display: block; width: 388px; height: 300px;"></canvas>
									</div>
								</div>
							</div>
                        </div>
                        
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
@stop @section('footer_scripts')
<!--   Core JS Files   -->
<script src="/assets/js/core/popper.min.js"></script>
<script src="/assets/js/core/bootstrap.min.js"></script>

<!-- jQuery UI -->
<script src="/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

<!-- jQuery Scrollbar -->
<script src="/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

<!-- Moment JS -->
<script src="/assets/js/plugin/moment/moment.min.js"></script>

<!-- Chart JS -->
<script src="/assets/js/plugin/chart.js/chart.min.js"></script>

<!-- jQuery Sparkline -->
<script src="/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

<!-- Chart Circle -->
<script src="/assets/js/plugin/chart-circle/circles.min.js"></script>

<!-- Datatables -->
<script src="/assets/js/plugin/datatables/datatables.min.js"></script>

<!-- Bootstrap Notify -->
<script src="/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

<!-- Bootstrap Toggle -->
<script src="/assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>

<!-- jQuery Vector Maps -->
<script src="/assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
<script src="/assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

<!-- Google Maps Plugin -->
<script src="/assets/js/plugin/gmaps/gmaps.js"></script>

<!-- Dropzone -->
<script src="/assets/js/plugin/dropzone/dropzone.min.js"></script>

<!-- Fullcalendar -->
<script src="/assets/js/plugin/fullcalendar/fullcalendar.min.js"></script>

<!-- DateTimePicker -->
<script src="/assets/js/plugin/datepicker/bootstrap-datetimepicker.min.js"></script>

<!-- Bootstrap Tagsinput -->
<script src="/assets/js/plugin/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>

<!-- Bootstrap Wizard -->
<script src="/assets/js/plugin/bootstrap-wizard/bootstrapwizard.js"></script>

<!-- jQuery Validation -->
<script src="/assets/js/plugin/jquery.validate/jquery.validate.min.js"></script>

<!-- Summernote -->
<script src="/assets/js/plugin/summernote/summernote-bs4.min.js"></script>

<!-- Select2 -->
<script src="/assets/js/plugin/select2/select2.full.min.js"></script>

<!-- Sweet Alert -->
<script src="/assets/js/plugin/sweetalert/sweetalert.min.js"></script>

<!-- Owl Carousel -->
<script src="/assets/js/plugin/owl-carousel/owl.carousel.min.js"></script>

<!-- Magnific Popup -->
<script src="/assets/js/plugin/jquery.magnific-popup/jquery.magnific-popup.min.js"></script>

<!-- Atlantis JS -->
<script src="/assets/js/atlantis.min.js"></script>

<!-- Atlantis DEMO methods, don't include it in your project! -->
<script src="/assets/js/setting-demo.js"></script> {{--
<script src="/assets/js/demo.js"></script> --}}

<script>
   




    
</script> @endsection
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>

  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="Sleek Dashboard - Free Bootstrap 4 Admin Dashboard Template and UI Kit. It is very powerful bootstrap admin dashboard, which allows you to build products like admin panels, content management systems and CRMs etc.">


  <title>ADMIN SHOPEI</title>

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet" />
  <link href="https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css" rel="stylesheet" />


  <!-- PLUGINS CSS STYLE -->
  <link href="assets/plugins/nprogress/nprogress.css" rel="stylesheet" />
  
  
  
  <link href="assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />
  
  
  
  <link href="assets/plugins/daterangepicker/daterangepicker.css" rel="stylesheet" />
  
  
  
  <link href="assets/plugins/toastr/toastr.min.css" rel="stylesheet" />
  
  

  <!-- SLEEK CSS -->
  <link id="sleek-css" rel="stylesheet" href="assets/css/sleek.css" />

  <!-- FAVICON -->
  <link href="assets/img/favicon.png" rel="shortcut icon" />

  

  <!--
    HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
  -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script src="assets/plugins/nprogress/nprogress.js"></script>
</head>


@include('admin.section.header')
@include('admin.section.sidebar')

	
						</div>

			

						<div class="row">
							<div class="col-12"> 

                  <!-- Recent Order Table -->
                  
</div>
						</div>

						<div class="row">
							<div class="col-xl-6"> 
                  <!-- To Do list -->
                 
</div>
							<div class="col-xl-6">
                  <!-- area chart -->
                  
</div>
						</div>

						<div class="row">
							<div class="col-xl-5">
                  <!-- New Customers -->
                 
</div>
							<div class="col-xl-7">
                  <!-- Top Products -->
                   @yield('content')

                 
</div>
						</div>
</div>

      

        <div class="right-sidebar-2">
    <div class="right-sidebar-container-2">
      <div class="slim-scroll-right-sidebar-2">
       
      <div class="right-sidebar-2-header">
        <h2>Layout Settings</h2>
        <p>User Interface Settings</p>
        <div class="btn-close-right-sidebar-2">
          <i class="mdi mdi-window-close"></i>
        </div>
      </div>

      <div class="right-sidebar-2-body">
        <span class="right-sidebar-2-subtitle">Header Layout</span>
        <div class="no-col-space">
          <a href="javascript:void(0);" class="btn-right-sidebar-2 header-fixed-to btn-right-sidebar-2-active">Fixed</a>
          <a href="javascript:void(0);" class="btn-right-sidebar-2 header-static-to">Static</a>
        </div>

        <span class="right-sidebar-2-subtitle">Sidebar Layout</span>
        <div class="no-col-space">
          <select class="right-sidebar-2-select" id="sidebar-option-select">
            <option value="sidebar-fixed">Fixed Default</option>
            <option value="sidebar-fixed-minified">Fixed Minified</option>
            <option value="sidebar-fixed-offcanvas">Fixed Offcanvas</option>
            <option value="sidebar-static">Static Default</option>
            <option value="sidebar-static-minified">Static Minified</option>
            <option value="sidebar-static-offcanvas">Static Offcanvas</option>
          </select>
        </div>

        <span class="right-sidebar-2-subtitle">Header Background</span>
        <div class="no-col-space">
          <a href="javascript:void(0);" class="btn-right-sidebar-2 btn-right-sidebar-2-active header-light-to">Light</a>
          <a href="javascript:void(0);" class="btn-right-sidebar-2 header-dark-to">Dark</a>
        </div>

        <span class="right-sidebar-2-subtitle">Navigation Background</span>
        <div class="no-col-space">
          <a href="javascript:void(0);" class="btn-right-sidebar-2 btn-right-sidebar-2-active sidebar-dark-to">Dark</a>
          <a href="javascript:void(0);" class="btn-right-sidebar-2 sidebar-light-to">Light</a>
        </div>

        <span class="right-sidebar-2-subtitle">Direction</span>
        <div class="no-col-space">
          <a href="javascript:void(0);" class="btn-right-sidebar-2 btn-right-sidebar-2-active ltr-to">LTR</a>
          <a href="javascript:void(0);" class="btn-right-sidebar-2 rtl-to">RTL</a>
        </div>

        <div class="d-flex justify-content-center" style="padding-top: 30px">
          <div id="reset-options" style="width: auto; cursor: pointer" class="btn-right-sidebar-2 btn-reset">Reset
            Settings</div>
        </div>

      </div>

    </div>
  </div>

</div>

      </div>
 <footer class="footer mt-auto">
          @include('admin.section.footer')  
            <script>
                var d = new Date();
                var year = d.getFullYear();
                document.getElementById("copy-year").innerHTML = year;
            </script>
          </footer>
               
    </div>
  </div>

  <script src="assets/plugins/jquery/jquery.min.js"></script>
<script src="assets/plugins/slimscrollbar/jquery.slimscroll.min.js"></script>
<script src="assets/plugins/jekyll-search.min.js"></script>



<script src="assets/plugins/charts/Chart.min.js"></script>
  


<script src="assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
<script src="assets/plugins/jvectormap/jquery-jvectormap-world-mill.js"></script>
  


<script src="assets/plugins/daterangepicker/moment.min.js"></script>
<script src="assets/plugins/daterangepicker/daterangepicker.js"></script>
<script>
  jQuery(document).ready(function() {
    jQuery('input[name="dateRange"]').daterangepicker({
    autoUpdateInput: false,
    singleDatePicker: true,
    locale: {
      cancelLabel: 'Clear'
    }
  });
    jQuery('input[name="dateRange"]').on('apply.daterangepicker', function (ev, picker) {
      jQuery(this).val(picker.startDate.format('MM/DD/YYYY'));
    });
    jQuery('input[name="dateRange"]').on('cancel.daterangepicker', function (ev, picker) {
      jQuery(this).val('');
    });
  });
</script>
  

<script src="assets/plugins/toastr/toastr.min.js"></script>



<script src="assets/js/sleek.bundle.js"></script>
</body>

</html>

<!-- jQuery -->
<script type="text/javascript"  src="{{URL::asset('dashboard-assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script type="text/javascript"  src="{{URL::asset('dashboard-assets/pplugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script type="text/javascript"  src="{{URL::asset('dashboard-assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script type="text/javascript"  src="{{URL::asset('dashboard-assets/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script type="text/javascript"  src="{{URL::asset('dashboard-assets/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script type="text/javascript"  src="{{URL::asset('dashboard-assets/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script type="text/javascript"  src="{{URL::asset('dashboard-assets/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script type="text/javascript"  src="{{URL::asset('dashboard-assets/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script type="text/javascript"  src="{{URL::asset('dashboard-assets/plugins/moment/moment.min.js')}}"></script>
<script type="text/javascript"  src="{{URL::asset('dashboard-assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script type="text/javascript"  src="{{URL::asset('dashboard-assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script type="text/javascript"  src="{{URL::asset('dashboard-assets/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script type="text/javascript"  src="{{URL::asset('dashboard-assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script type="text/javascript"  src="{{URL::asset('dashboard-assets/js/adminlte.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script type="text/javascript"  src="{{URL::asset('dashboard-assets/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script type="text/javascript"  src="{{URL::asset('dashboard-assets/js/demo.js')}}"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    setTimeout(function() {
        $('#success-alert').fadeOut('fast');
    }, 3000); // 3000 milliseconds = 3 seconds
</script>

<script>
  document.addEventListener('DOMContentLoaded', function () {
      const readMoreLinks = document.querySelectorAll('.read-more');

      readMoreLinks.forEach(function (link) {
          link.addEventListener('click', function (e) {
              e.preventDefault();

              const descriptionWrapper = this.previousElementSibling;
              const shortDescription = descriptionWrapper.querySelector('.short-description');
              const fullDescription = descriptionWrapper.querySelector('.full-description');

              if (shortDescription.style.display === 'none') {
                  shortDescription.style.display = 'inline';
                  fullDescription.style.display = 'none';
                  this.innerText = 'Read More';
              } else {
                  shortDescription.style.display = 'none';
                  fullDescription.style.display = 'inline';
                  this.innerText = 'Read Less';
              }
          });
      });
  });
</script>
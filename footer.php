<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <script>
                    document.write(new Date().getFullYear())
                </script> © Elevate - Psychiatry.
            </div>
            <div class="col-sm-6">
                <div class="text-sm-end d-none d-sm-block">
                    Design & Develop by <a href="#" class="text-decoration-underline">Jetnetix</a>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
<!-- end main content-->

</div>
<!-- END layout-wrapper -->





<script>
    // Use the plugin once the DOM has been loaded.
    $(document).ready(function() {
        $('#table').excelTableFilter();
    });
    $(document).ready(function() {
        $('#table2').excelTableFilter();
    });

    // Apply the plugin 
</script>

<!-- JAVASCRIPT -->

<script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/libs/metismenu/metisMenu.min.js"></script>
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/libs/node-waves/waves.min.js"></script>
<script src="assets/libs/feather-icons/feather.min.js"></script>
<!-- pace js -->
<script src="assets/libs/pace-js/pace.min.js"></script>




<!-- dashboard init -->
<script src="assets/js/pages/dashboard.init.js"></script>




<script src="assets/js/app.js"></script>

<!-- full calendar script -->
<script src="assets/libs/%40fullcalendar/core/main.min.js"></script>
<script src="assets/libs/%40fullcalendar/bootstrap/main.min.js"></script>
<script src="assets/libs/%40fullcalendar/daygrid/main.min.js"></script>
<script src="assets/libs/%40fullcalendar/timegrid/main.min.js"></script>
<script src="assets/libs/%40fullcalendar/interaction/main.min.js"></script>

<!-- Calendar init -->
<script src="assets/js/pages/calendar.init.js"></script>

<!-- table filter  -->
<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<script src="https://www.jqueryscript.net/demo/Excel-like-Bootstrap-Table-Sorting-Filtering-Plugin/excel-bootstrap-table-filter-bundle.js"></script>
<link rel="stylesheet" href="https://www.jqueryscript.net/demo/Excel-like-Bootstrap-Table-Sorting-Filtering-Plugin/excel-bootstrap-table-filter-style.css" />

<!-- Required datatable js -->
<script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<!-- Datatable init js -->
<script src="assets/js/pages/datatables.init.js"></script>
<!-- apexcharts js -->
<script src="assets/libs/apexcharts/apexcharts.min.js"></script>

<!-- apexcharts init -->
<!-- <script src="assets/js/pages/apexcharts.init.js"></script> -->
<script src="assets/js/pages/line-chart.js"></script>
<script src="assets/js/pages/column-chart.js"></script>

<!-- dropzone js -->
<script src="assets/libs/dropzone/min/dropzone.min.js"></script>

<!-- datepicker js -->
<script src="assets/libs/flatpickr/flatpickr.min.js"></script>
<!-- twitter-bootstrap-wizard js -->
<script src="assets/libs/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
<script src="assets/libs/twitter-bootstrap-wizard/prettify.js"></script>

<!-- form wizard init -->
<script src="assets/js/pages/form-wizard.init.js"></script>
  <!-- ckeditor -->
  <script src="assets/libs/%40ckeditor/ckeditor5-build-classic/build/ckeditor.js"></script>

<!-- init js -->
<script src="assets/js/pages/form-editor.init.js"></script>

<!-- init date range js -->
<script>
    flatpickr("#datepicker-range", {
            mode: "range",
            defaultDate: new Date()
        }),
        flatpickr("#datepicker-timepicker", {
            enableTime: !0,
            noCalendar: !0,
            dateFormat: "H:i",
            defaultDate: new Date(),
        }),
        flatpickr("#datepicker-inline", {
            inline: !0,
            defaultDate: new Date()
        });
</script>

</body>

</html>
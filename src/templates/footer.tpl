<footer class="footer text-right">
{$footNote}
</footer>
</div>
<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->

</div>
<!-- END wrapper -->

<script>
var resizefunc = [];
</script>

<!-- Plugins  -->
<script src="{$js}jquery.min.js"></script>
<script src="{$js}popper.min.js"></script><!-- Popper for Bootstrap -->
<script src="{$js}bootstrap.min.js"></script>
<script src="{$js}detect.js"></script>
<script src="{$js}fastclick.js"></script>
<script src="{$js}jquery.slimscroll.js"></script>
<script src="{$js}jquery.blockUI.js"></script>
<script src="{$js}waves.js"></script>
<script src="{$js}wow.min.js"></script>
<script src="{$js}jquery.nicescroll.js"></script>
<script src="{$js}jquery.scrollTo.min.js"></script>
<script src="{$js}switchery.min.js"></script>

<!-- Counter Up  -->
<script src="{$js}jquery.waypoints.min.js"></script>
<script src="{$js}jquery.counterup.min.js"></script>

<!-- Page js  -->
<script src="{$js}jquery.dashboard.js"></script>

<!-- Required datatable js -->
<script src="{$js}jquery.dataTables.min.js"></script>
<script src="{$js}dataTables.bootstrap4.min.js"></script>
<!-- Buttons examples -->
<script src="{$js}dataTables.buttons.min.js"></script>
<script src="{$js}buttons.bootstrap4.min.js"></script>
<script src="{$js}jszip.min.js"></script>
<script src="{$js}pdfmake.min.js"></script>
<script src="{$js}vfs_fonts.js"></script>
<script src="{$js}buttons.html5.min.js"></script>
<script src="{$js}buttons.print.min.js"></script>
<script src="{$js}buttons.colVis.min.js"></script>
<!-- Responsive examples -->
<script src="{$js}dataTables.responsive.min.js"></script>
<script src="{$js}responsive.bootstrap4.min.js"></script>

<!-- Custom main Js -->
<script src="{$js}jquery.core.js"></script>
<script src="{$js}jquery.app.js"></script>

<!--Form Wizard-->
<script src="{$js}jquery.steps.min.js"></script>
<script src="{$js}jquery.validate.min.js"></script>

<!--wizard initialization-->
<script src="{$js}jquery.wizard-init.js"></script>

<script type="text/javascript">
jQuery(document).ready(function($) {
$('.counter').counterUp({
delay: 100,
time: 1200
});
});
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#notices_datatable').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": "/api/notices.php"
        });
        $('#complaints_datatable').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": "/api/complaints.php"
        });
        $('#timetables_datatable').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": "/api/timetables.php"
        });
        $('#notes_datatable').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": "/api/notes.php"
        });
        $('#courses_datatable').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": "/api/courses.php"
        });
        $('#lecturers_datatable').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": "/api/lecturers.php"
        });
        $('#admins_datatable').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": "/api/admins.php"
        });
        $('#students_datatable').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": "/api/students.php"
        });
    });
</script>
</body>
</html>

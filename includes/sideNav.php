<ul class="nav nav-pills nav-stacked">
    <li <?php classActive($section, 'home'); ?> ><a href="<?php echo baseUrl; ?>/home"><i class="fa fa-home"></i> Home</a></li>
    <li <?php classActive($section, 'timeTables'); ?> ><a href="<?php echo baseUrl; ?>/content/timetables"><i class="fa fa-table"></i> Timetables</a></li>
    <li <?php classActive($section, 'classMates'); ?> ><a href="<?php echo baseUrl; ?>/content/classmates"><i class="fa fa-group"></i> Classmates</a></li>
    <li <?php classActive($section, 'results'); ?> ><a href="<?php echo baseUrl; ?>/content/results"><i class="fa fa-search"></i> Results</a></li>
    <li <?php classActive($section, 'download'); ?> ><a href="<?php echo baseUrl; ?>/content/download"><i class="fa fa-download"></i> Download Notes</a></li>
</ul>

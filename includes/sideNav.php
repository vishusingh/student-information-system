<?php 

	if (isset($page) && $page == 'admin') 
	{

?>

<ul class="nav nav-pills nav-stacked">

    <li <?php classActive($section, 'adminHome'); ?> ><a href="<?php echo $baseUrl; ?>/admin/home/"><i class="fa fa-home"></i> Home</a>
    </li>

    <li <?php classActive($section, 'addstudent'); ?> ><a href="<?php echo $baseUrl; ?>/content/addstudent/"><i class="fa fa-user"></i> Add New Student</a>
    </li>

    <li <?php classActive($section, 'marks'); ?> ><a href="<?php echo $baseUrl; ?>/content/marks/"><i class="fa fa-percent"></i> Add Marks</a>
    </li>

    <li <?php classActive($section, 'students'); ?> ><a href="<?php echo $baseUrl; ?>/content/students/"><i class="fa fa-group"></i> Students</a>
    </li>

    <li <?php classActive($section, 'results'); ?> ><a href="<?php echo $baseUrl; ?>/content/results/"><i class="fa fa-search"></i> Results</a>
    </li>

    <li <?php classActive($section, 'upload'); ?> ><a href="<?php echo $baseUrl; ?>/content/upload/"><i class="fa fa-upload"></i> Upload File</a>
    </li>

    <li <?php classActive($section, 'timeTables'); ?> ><a href="<?php echo $baseUrl; ?>/content/timetables/"><i class="fa fa-table"></i> Timetables</a>
    </li>

    <li <?php classActive($section, 'download'); ?> ><a href="<?php echo $baseUrl; ?>/content/download/"><i class="fa fa-book"></i> Notes</a>
    </li>

</ul>

<?php

	}

	else
	{

?>

<ul class="nav nav-pills nav-stacked">

    <li <?php classActive($section, 'home'); ?> ><a href="<?php echo $baseUrl; ?>/home"><i class="fa fa-home"></i> Home</a>
    </li>

    <li <?php classActive($section, 'classMates'); ?> ><a href="<?php echo $baseUrl; ?>/content/classmates/"><i class="fa fa-group"></i> Classmates</a>
    </li>

    <li <?php classActive($section, 'results'); ?> ><a href="<?php echo $baseUrl; ?>/content/results/"><i class="fa fa-search"></i> Results</a>
    </li>

    <li <?php classActive($section, 'timeTables'); ?> ><a href="<?php echo $baseUrl; ?>/content/timetables/"><i class="fa fa-table"></i> Timetables</a>
    </li>

    <li <?php classActive($section, 'notes'); ?> ><a href="<?php echo $baseUrl; ?>/content/notes/"><i class="fa fa-book"></i> Notes</a>
    </li>
    
</ul>

<?php

	}

?>
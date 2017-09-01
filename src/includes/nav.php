<?php
if (User::isAdmin()) 
{
?>

<a class="navbar-brand" href="<?php echo baseUrl; ?>/home/">Home</a>

<ul class="nav navbar-nav">

	<li><a href="<?php echo baseUrl; ?>/new/"><i class="fa fa-plus"></i> New</a></li>

	<li><a href="<?php echo baseUrl; ?>/students/"><i class="fa fa-group"></i> Students</a></li>

	<li><a href="<?php echo baseUrl; ?>/results/"><i class="fa fa-bar-chart"></i> Results</a></li>

	<li><a href="<?php echo baseUrl; ?>/timetables/"><i class="fa fa-table"></i> Timetables</a></li>

	<li><a href="<?php echo baseUrl; ?>/download/"><i class="fa fa-download"></i> Download</a></li>

	<li><a href="<?php echo baseUrl; ?>/upload/"><i class="fa fa-upload"></i> Upload</a></li>

	<li><a href="<?php echo baseUrl; ?>/notes/"><i class="fa fa-book"></i> Notes</a></li>

	<li><a href="<?php echo baseUrl; ?>/search/"><i class="fa fa-search"></i> Search</a></li>

</ul>

<?php
}
else
{
?>

<a class="navbar-brand" href="<?php echo baseUrl; ?>/home/">Home</a>

<ul class="nav navbar-nav">

	<li><a href="<?php echo baseUrl; ?>/results/"><i class="fa fa-bar-chart"></i> Results</a></li>

	<li><a href="<?php echo baseUrl; ?>/classmates/"><i class="fa fa-group"></i> classmates</a></li>

	<li><a href="<?php echo baseUrl; ?>/timetables/"><i class="fa fa-table"></i> Timetables</a></li>

	<li><a href="<?php echo baseUrl; ?>/notes/"><i class="fa fa-book"></i> Notes</a></li>

	<li><a href="<?php echo baseUrl; ?>/search/"><i class="fa fa-search"></i> Search</a></li>

</ul>

<?php
}
?>
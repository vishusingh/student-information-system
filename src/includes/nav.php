<?php
    if (User::isAdmin()) 
    {
?>
<a class="navbar-brand" href="/dashboard/">Dashboard</a>
<ul class="nav navbar-nav">
    <li><a href="/new/"><i class="fa fa-plus"></i> New</a></li>
    <li><a href="/students/"><i class="fa fa-group"></i> Students</a></li>
    <li><a href="/results/"><i class="fa fa-bar-chart"></i> Results</a></li>
    <li><a href="/timetables/"><i class="fa fa-table"></i> Timetables</a></li>
    <li><a href="/download/"><i class="fa fa-download"></i> Download</a></li>
    <li><a href="/upload/"><i class="fa fa-upload"></i> Upload</a></li>
    <li><a href="/notes/"><i class="fa fa-book"></i> Notes</a></li>
    <li><a href="/search/"><i class="fa fa-search"></i> Search</a></li>
</ul>
<?php
    }
    else
    {
?>
<a class="navbar-brand" href="/home/">Home</a>
<ul class="nav navbar-nav">
    <li><a href="/results/"><i class="fa fa-bar-chart"></i> Results</a></li>
    <li><a href="/classmates/"><i class="fa fa-group"></i> classmates</a></li>
    <li><a href="/timetables/"><i class="fa fa-table"></i> Timetables</a></li>
    <li><a href="/notes/"><i class="fa fa-book"></i> Notes</a></li>
    <li><a href="/search/"><i class="fa fa-search"></i> Search</a></li>
</ul>
<?php
    }
?>
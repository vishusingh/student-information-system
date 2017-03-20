<ul class="nav nav-pills nav-stacked">
	<li <?php if ($section === 'home') { echo "class='active'"; } ?> ><a href="/admin/home"><i class="fa fa-home"></i> Home</a></li>
	<li <?php if ($section === 'addstudent') { echo "class='active'"; } ?> ><a href="/content/addstudent"><i class="fa fa-user"></i> Add New Student</a></li>
	<li <?php if ($section === 'marks') { echo "class='active'"; } ?> ><a href="/content/marks"><i class="fa fa-percent"></i> Feed In Marks</a></li>
	<li <?php if ($section === 'students') { echo "class='active'"; } ?> ><a href="/content/students"><i class="fa fa-group"></i> Students</a></li>
	<li <?php if ($section === 'notes') { echo "class='active'"; } ?> ><a href="/content/notes"><i class="fa fa-book"></i> Notes</a></li>	
    <li <?php if ($section === 'timetables') { echo "class='active'"; } ?> ><a href="/content/timetables"><i class="fa fa-table"></i> Timetables</a></li>
    <li <?php if ($section === 'upload') { echo "class='active'"; } ?> ><a href="/content/upload"><i class="fa fa-upload"></i> Upload</a></li>
</ul>
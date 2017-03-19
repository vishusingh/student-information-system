<ul class="nav nav-pills nav-stacked">
    <li <?php if ($section === 'home') { echo "class='active'"; } ?> ><a href="/home"><i class="fa fa-home"></i> Home</a></li>
    <li <?php if ($section === 'timetables') { echo "class='active'"; } ?> ><a href="/content/timetables"><i class="fa fa-table"></i> Timetables</a></li>
    <li <?php if ($section === 'classmates') { echo "class='active'"; } ?> ><a href="/content/classmates"><i class="fa fa-group"></i> Classmates</a></li>
    <li <?php if ($section === 'results') { echo "class='active'"; } ?> ><a href="/content/results"><i class="fa fa-search"></i> Results</a></li>
    <li <?php if ($section === 'download') { echo "class='active'"; } ?> ><a href="/content/download"><i class="fa fa-download"></i> Download Notes</a></li>
</ul>
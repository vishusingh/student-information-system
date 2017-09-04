<section class="wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa fa-table"></i> Timetables</h3>
            <ol class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="/dashboard/">Home</a></li>
                <li><i class="fa fa-table"></i>Timetables</li>
            </ol>
        </div>
    </div>
    <table class="table table-striped table-advance table-hover">
        <tbody>
            <tr>
                <th><i class="icon_profile"></i> Added by</th>
                <th><i class="icon_pin_alt"></i> Description</th>
                <th><i class="icon_calendar"></i> Date Added</th>
                <th><i class="icon_mail_alt"></i> Category</th>
                <th><i class="icon_cogs"></i> Action</th>
            </tr>
        	<?php
            foreach ($timeTableResults as $timeTableResult) 
            {	                    
            	echo '<tr>';	                    
            	echo '<td>' . $timeTableResult->name . '</td>';                       
            	echo '<td>' . $timeTableResult->description . '</td>';                   
            	echo '<td>' . explode(' ', $timeTableResult->date_added)[0] . '</td>';
            	echo '<td>' . $timeTableResult->category . '</td>';
            	echo '<td><div class="btn-group"><a class="btn btn-primary" href="' . $timeTableResult->rootpath . '"><i class="social_share"></i></a><a class="btn btn-success" href="' . $timeTableResult->rootpath . '"><i class="icon_link_alt"></i></a><a class="btn btn-danger" href="' . $timeTableResult->rootpath . '"><i class="icon_cloud-download"></i></a></div></td>';
            	echo '</tr>';                            
            }                            
            ?>
        </tbody>
    </table>
</section>

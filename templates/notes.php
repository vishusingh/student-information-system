<section class="wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa fa-book"></i> Notes</h3>
            <ol class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="/dashboard/">Home</a></li>
                <li><i class="fa fa-book"></i>Notes</li>
            </ol>
        </div>
    </div>
    <table class="table table-striped table-advance table-hover">
        <tbody>
            <tr>
                <th><i class="icon_profile"></i> Name</th>
                <th><i class="icon_profile"></i> Lecturer</th>
                <th><i class="icon_calendar"></i> Course</th>
                <th><i class="icon_mail_alt"></i> Semester</th>
                <th><i class="icon_calendar"></i> Date Added</th>
                <th><i class="icon_cogs"></i> Action</th>
            </tr>
            <?php
            foreach ($notesResults as $notesResult) 
            {                       
                echo '<tr>';                        
                echo '<td>' . $notesResult->name . '</td>';
                echo '<td>' . $notesResult->lecturer . '</td>';
                echo '<td>' . $notesResult->course . '</td>';
                echo '<td>' . $notesResult->semester . '</td>';
                echo '<td>' . explode(' ', $notesResult->date_added)[0] . '</td>';
                echo '<td><div class="btn-group"><a class="btn btn-primary" href="' . $notesResult->rootpath . '"><i class="social_share"></i></a><a class="btn btn-success" href="' . $notesResult->rootpath . '"><i class="icon_link_alt"></i></a><a class="btn btn-danger" href="' . $notesResult->rootpath . '"><i class="icon_cloud-download"></i></a></div></td>';
                echo '</tr>';                            
            }                          
            ?>
        </tbody>
    </table>
</section>

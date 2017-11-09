<div class="breadcrumb-holder">
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard/">Dashboard</a></li>
            <li class="breadcrumb-item active">Notes</li>
        </ul>
    </div>
</div>
<section class="forms">
    <div class="container-fluid">
        <header>
            <h1 class="h3 display">Notes</h1>
        </header>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h2 class="h5 display">Download notes for your desired course unit</h2>
                </div>
                <div class="card-block">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th><i class="fa fa-user"></i> Name</th>
                                <th><i class="fa fa-user"></i> Lecturer</th>
                                <th><i class="icon_calendar"></i> Course</th>
                                <th><i class="icon_mail_alt"></i> Semester</th>
                                <th><i class="fa fa-calender"></i> Date Added</th>
                                <th><i class="fa fa-cogs"></i> Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($notesResults as $notesResult)
                            {?>
                            <tr>
                                <td><?=$notesResult->name;?></td>
                                <td><?=$notesResult->lecturer;?></td>
                                <td><?=$notesResult->course;?></td>
                                <td><?=$notesResult->semester;?></td>
                                <td><?=explode(' ', $notesResult->date_added)[0];?></td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic example"><a class="btn btn-info" href="<?=$notesResult->rootpath;?>"><i class="fa fa-edit"></i></a><a class="btn btn-danger" href="<?=$notesResult->rootpath;?>"><i class="fa fa-trash"></i></a><a class="btn btn-info" href="<?=$notesResult->rootpath;?>"><i class="fa fa-download"></i></a></div>
                                </td>
                            </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
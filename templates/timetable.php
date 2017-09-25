<div class="breadcrumb-holder">
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard/">Dashboard</a></li>
            <li class="breadcrumb-item active">Timetables</li>
        </ul>
    </div>
</div>
<section class="forms">
    <div class="container-fluid">
        <header>
            <h1 class="h3 display">Timetables</h1>
        </header>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h2 class="h5 display">Download your desired timetable</h2>
                </div>
                <div class="card-block">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th><i class="icon_profile"></i> Added by</th>
                                <th><i class="icon_pin_alt"></i> Description</th>
                                <th><i class="icon_calendar"></i> Date Added</th>
                                <th><i class="icon_mail_alt"></i> Category</th>
                                <th><i class="icon_cogs"></i> Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($timeTableResults as $timeTableResult)
                            {?>
                            <tr>
                                <td><?=$timeTableResult->name;?></td>
                                <td><?=$timeTableResult->description;?></td>
                                <td><?=explode(' ', $timeTableResult->date_added)[0];?></td>
                                <td><?=$timeTableResult->category;?></td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic example"><a class="btn btn-info" href="<?=$timeTableResult->rootpath;?>"><i class="fa fa-edit"></i></a><a class="btn btn-danger" href="<?=$timeTableResult->rootpath;?>"><i class="fa fa-trash"></i></a><a class="btn btn-success" href="<?=$timeTableResult->rootpath;?>"><i class="fa fa-download"></i></a></div>
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

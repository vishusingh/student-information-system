<div class="content">
    <div class="container-fluid">
        <br />
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card-box">
                    <h4 class="header-title m-t-0 text-center">Timetables</h4>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
        <br />

        <div class="row">
            <div class="col-lg-12">
                <div class="card-box">
                    <table class="table">
                        <thead class="thead-default">
                        <tr>
                            <th>Description</th>
                            <th>Author</th>
                            <th>Date Added</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
						<?php
                            foreach ($timeTableResults as $timeTableResult)
                            {
                                ?>
                                <tr>
                                    <th scope="row"><?=$timeTableResult->description;?></th>
                                    <td><?=$timeTableResult->added_by;?></td>
                                    <td><?=explode(' ', $timeTableResult->date_added)[0];?></td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example"><a class="btn btn-danger" href="<?=$timeTableResult->webpath;?>"><i class="fa fa-trash"></i></a><a class="btn btn-success" href="<?=$timeTableResult->webpath;?>"><i class="fa fa-download"></i></a></div>
                                    </td>
                                </tr>
                                <?php
                            }
						?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

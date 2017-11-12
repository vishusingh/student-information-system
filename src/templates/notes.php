<div class="content">
    <div class="container-fluid">
        <br />
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card-box">
                    <h4 class="header-title m-t-0 text-center">Notes</h4>
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
                            <th>Course</th>
                            <th>Semester</th>
                            <th>Date Added</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
						<?php
						foreach ($notesResults as $notesResult)
						{
						    ?>
                            <tr>
                                <th scope="row"><?=$notesResult->description;?></th>
                                <td><?=$notesResult->added_by;?></td>
                                <td><?=$notesResult->course;?></td>
                                <td><?=$notesResult->semester;?></td>
                                <td><?=explode(' ', $notesResult->date_added)[0];?></td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic example"><a class="btn btn-danger" href="<?=$notesResult->webpath;?>"><i class="fa fa-trash"></i></a><a class="btn btn-success" href="<?=$notesResult->webpath;?>"><i class="fa fa-download"></i></a></div>
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

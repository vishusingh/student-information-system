<div class="content">
	<div class="container-fluid">
		<br />
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<div class="card-box">
					<h4 class="header-title m-t-0 text-center">Upload Notes</h4>
				</div>
			</div>
			<div class="col-md-3"></div>
		</div>
		<br />

		<div class="row">
			<div class="col-lg-3"></div>
			<div class="col-lg-6">
				<div class="card-box">
                    <form enctype="multipart/form-data" role="form" method="post" action="/upload/notes/">
						<?php
						if (isset($errorList) && count($errorList))
						{
							foreach ($errorList as $error)
							{
								?>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert"><?=$error;?>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
							    <?php
							}
						}
						if ($success)
                        {
                            ?>
                            <div class="form-group row">
                                <div class="col-12">
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">File successfully uploaded
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
						?>
                        <div class="form-group">
                            <label for="desc">Notes Description</label>
                            <input name="description" type="text" class="form-control" id="desc" placeholder="Enter notes description">
                        </div>
                        <div class="form-group">
                            <label for="courses">Courses</label>
                            <select class="form-control" name="course" id="courses">
                            <?php
                            if (isset($upload) && count($upload->getCourses()))
                            {
                                foreach ($upload->getCourses() as $course)
                                {
                                    echo '<option>' . $course->courseName . '</option>';
                                }
                            }
                            ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="year">Year of study</label>
                            <select class="form-control" id="year" name="year">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="semester">Semester</label>
                            <select class="form-control" id="semester" name="semester">
                                <option>1</option>
                                <option>2</option>
                            </select>
                        </div>
                        <div class="form-group row">
                            <label class="col-2 col-form-label">File input</label>
                            <div class="col-10">
                                <input type="file" class="form-control" name="file">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-info waves-effect waves-light">Upload</button>
                    </form>
				</div>
			</div>
			<div class="col-lg-3"></div>
		</div>
	</div>
</div>

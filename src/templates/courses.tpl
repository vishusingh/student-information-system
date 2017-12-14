{include('header.tpl')}
<div class="content">
    <div class="container-fluid">
        <br />
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card-box">
                    <h4 class="header-title m-t-0 text-center">All courses</h4>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
        <br />

        {if $success}
            <div class="alert alert-success alert-dismissible fade show" role="alert">{$successMessage}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <br />
        {/if}

        <div class="row">
            <div class="col-12">
                <div class="card-box table-responsive">
                    <table id="courses_datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Course Name</th>
                            <th>Department</th>
                            <th>Years of study</th>
                            <th>Date Added</th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
{include('footer.tpl')}

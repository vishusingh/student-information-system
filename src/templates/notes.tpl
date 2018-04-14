{include('header.tpl')}
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

        {if $delete}
            <div class="alert alert-danger alert-dismissible fade show" role="alert">{$deleteMessage}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        {/if}

        <div class="row">
            <div class="col-12">
                <div class="card-box table-responsive">
                    <table id="notes_datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Description</th>
                            <th>Course</th>
                            <th>Year</th>
                            <th>Semester</th>
                            <th>Date Added</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
{include('footer.tpl')}

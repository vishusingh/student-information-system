{include('header.tpl')}
<div class="content">
    <div class="container-fluid">
        <br />
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card-box">
                    <h4 class="header-title m-t-0 text-center">All Admins</h4>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
        <br />

        <div class="row">
            <div class="col-12">
                <div class="card-box table-responsive">
                    <table id="admins_datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Joined</th>
                            <th>Profile</th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
{include('footer.tpl')}

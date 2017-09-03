<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
    <div class="panel panel-info">
        <div class="panel-heading">
            <h3 class="panel-title">Sheena Shrestha</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="http://babyinfoforyou.com/wp-content/uploads/2014/10/avatar-300x300.png" class="img-circle img-responsive"> </div>
                <div class=" col-md-9 col-lg-9 ">
                    <table class="table table-user-information">
                        <tbody>
                            <tr>
                                <td>Username:</td>
                                <td><?=User::data('username');?></td>
                            </tr>
                            <tr>
                                <td>First Name:</td>
                                <td><?=ucfirst(User::data('firstname'));?></td>
                            </tr>
                            <tr>
                                <td>Last Name:</td>
                                <td><?=ucfirst(User::data('lastname'));?></td>
                            </tr>
                            <tr>
                                <td>Date joined</td>
                                <td><?=User::data('date-joined');?></td>
                            </tr>
                            <tr>
                                <td>Date of Birth</td>
                                <td><?=User::data('date-joined');?></td>
                            </tr>
                            <tr>
                            <tr>
                                <td>Gender</td>
                                <td>Female</td>
                            </tr>
                            <tr>
                                <td>Home Address</td>
                                <td>Kathmandu,Nepal</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><a href="mailto:info@support.com">info@support.com</a></td>
                            </tr>
                            <td>Phone Number</td>
                            <td>123-4567-890(Landline)<br><br>555-4567-890(Mobile)
                            </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="panel-footer">
            <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="fa fa-envelope"></i></a>
            <span class="pull-right">
            <a href="edit/" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
            <a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="fa fa-remove"></i></a>
            </span>
        </div>
    </div>
</div>

{include('header.tpl')}
<div class="content">
    <div class="container-fluid">
        <br />
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card-box">
                    <h4 class="header-title m-t-0 text-center">{$name}'s profile</h4>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
        <br />

        <div class="row">
            <div class="col-lg-8">
                <div class="card-box">
                    <form role="form" action="/users/update/" method="POST">
                        {if $updateSuccess}
                            <div class="form-group row">
                                <div class="col-12">
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">{$updateSuccessMessage}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        {/if}
                        {if $updateError}
                            <div class="form-group row">
                                <div class="col-12">
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">{$updateErrorMessage}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        {/if}
                        <div class="form-group row">
                            <label for="username" class="col-4 col-form-label">Username *</label>
                            <div class="col-7">
                                <input type="text" required class="form-control" id="username" placeholder="Username" name="username" value="{$name}"
                                 disabled>
                                <input type="hidden" value="{$tableName}" name="table">
                                <input type="hidden" value="{$name}" name="username">
                                <input type="hidden" value="{$userId}" name="id">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="first_name" class="col-4 col-form-label">First Name</label>
                            <div class="col-7">
                                <input type="text" disabled class="form-control" id="first_name" placeholder="First Name" name="first_name" value="{$fname}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="middle_name" class="col-4 col-form-label">Middle Name or Initials</label>
                            <div class="col-7">
                                <input type="text" disabled class="form-control" id="middle_name" placeholder="Middle Name" name="middle_name" value="{$mname}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="last_name" class="col-4 col-form-label">Last Name</label>
                            <div class="col-7">
                                <input type="text" disabled class="form-control" id="last_name" placeholder="Last Name" name="last_name" value="{$lname}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-4 col-form-label">Email *</label>
                            <div class="col-7">
                                <input type="email" required class="form-control" id="email" placeholder="Email" name="email" value="{$email}"
                                 {if !$admin && $username != $name} disabled {/if}>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="gender" class="col-4 col-form-label">Gender</label>
                            <div class="col-7">
                                <input type="text" disabled class="form-control" id="gender" placeholder="Gender" name="gender" value="{$gender}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="course" class="col-4 col-form-label">Course</label>
                            <div class="col-7">
                                <input type="text" disabled class="form-control" id="course" placeholder="Course" name="course" value="{$course}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nationality" class="col-4 col-form-label">Nationality</label>
                            <div class="col-7">
                                <input type="text" disabled class="form-control" id="nationality" placeholder="Nationality" name="nationality" value="{$nationality}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-8 offset-4">
                                <button type="submit" class="btn btn-primary waves-effect waves-light">
                                    Update
                                </button>
                                <button type="reset"
                                        class="btn btn-secondary waves-effect m-l-5">
                                    Cancel
                                </button>
                            </div>
                        </div>
                    </form>
                    <div class="visible-lg" style="height: 50px;"></div>
                </div>
            </div>
            <div class="col-lg-4">
                {if $username == $name || $admin}
                <div class="card-box">
                    <h2 class="m-t-0 m-b-30 header-title">Update Password</h2>

                    <form class="form-horizontal" role="form" action="/users/password/" method="post">
                        {if $passError}
                            <div class="form-group row">
                                <div class="col-12">
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">{$passErrorMessage}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        {/if}
                        {if $passwordSuccess}
                            <div class="form-group row">
                                <div class="col-12">
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">{$passwordSuccessMessage}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        {/if}
                        {if $student}
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-3 col-form-label">Old Password</label>
                            <div class="col-9">
                                <input type="password" class="form-control" id="inputEmail3" placeholder="Old password" name="oldPassword">
                            </div>
                        </div>
                        {/if}
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-3 col-form-label">New Password</label>
                            <div class="col-9">
                                <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="newPassword">
                            </div>
                        </div>
                        {if $student}
                        <div class="form-group row">
                            <label for="inputPassword4" class="col-3 col-form-label">Re Password</label>
                            <div class="col-9">
                                <input type="password" class="form-control" id="inputPassword4" placeholder="Retype Password" name="newPasswordRepeat">
                            </div>
                        </div>
                        {/if}
                        <input type="hidden" name="username" value="{$name}">
                        <input type="hidden" name="id" value="{$userId}">
                        <input type="hidden" value="{$tableName}" name="table">
                        <div class="form-group m-b-0 row">
                            <div class="offset-3 col-9">
                                <button type="submit" class="btn btn-info waves-effect waves-light">Update password</button>
                            </div>
                        </div>
                    </form>
                </div>
                {/if}
            </div>
        </div>
    </div>
</div>
{include('footer.tpl')}

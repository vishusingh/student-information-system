{include('header.tpl')}
<div class="content">
    <div class="container-fluid">
        <br />
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card-box">
                    <h4 class="header-title m-t-0 text-center">Add new student to system</h4>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
        <br />

        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <div class="card-box">
                    <form role="form" action="/students/new/" method="POST">
                        {if $errorCounter > 0}
                            {foreach $errors error}
                                <div class="form-group row">
                                    <div class="col-12">
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">{$error}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            {/foreach}
                        {/if}
                        <div class="form-group row">
                            <label for="username" class="col-4 col-form-label">Username *</label>
                            <div class="col-7">
                                <input type="text" required class="form-control" id="username" placeholder="Username" name="username">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="first_name" class="col-4 col-form-label">First Name *</label>
                            <div class="col-7">
                                <input type="text" required class="form-control" id="first_name" placeholder="First Name" name="first_name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="middle_name" class="col-4 col-form-label">Middle Name or Initials</label>
                            <div class="col-7">
                                <input type="text" required class="form-control" id="middle_name" placeholder="Middle Name" name="middle_name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="last_name" class="col-4 col-form-label">Last Name *</label>
                            <div class="col-7">
                                <input type="text" required class="form-control" id="last_name" placeholder="Last Name" name="last_name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-4 col-form-label">Email *</label>
                            <div class="col-7">
                                <input type="email" required class="form-control" id="email" placeholder="Email" name="email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-4 col-form-label">Password *</label>
                            <div class="col-7">
                                <input type="text" required class="form-control" id="password" placeholder="Password" name="password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="gender" class="col-4 col-form-label">Gender *</label>
                            <div class="col-7">
                                <select class="form-control" name="gender" id="gender">
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="course" class="col-4 col-form-label">Course *</label>
                            <div class="col-7">
                                <select class="form-control" name="course" id="course">
                                    {if $coursesCounter > 0}
                                        {foreach $courses course}
                                            <option>{$course.name}</option>
                                        {/foreach}
                                    {/if}
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nationality" class="col-4 col-form-label">Nationality *</label>
                            <div class="col-7">
                                <input type="text" required class="form-control" id="nationality" placeholder="Nationality" name="nationality">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-8 offset-4">
                                <button type="submit" class="btn btn-primary waves-effect waves-light">
                                    Add Student
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
            <div class="col-lg-2"></div>
        </div>
    </div>
</div>
{include('footer.tpl')}

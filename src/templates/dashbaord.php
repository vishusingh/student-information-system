<div class="container" style="margin-top: 15px">
    <div class="alert alert-success">
        Welcome back <strong><?php echo User::data('username'); ?></strong>
    </div>
    <div class="col-md-3 text-center">
        <div class="panel panel-default">
            <div class="panel-body">
                <i class="fa fa-home fa-5x"></i>
                <a href="/home/">
                    <h3>Home</h3>
                </a>
            </div>
        </div>
    </div>
    <?php if (User::isAdmin()): ?>
    <div class="col-md-3 text-center">
        <div class="panel panel-default">
            <div class="panel-body">
                <i class="fa fa-plus fa-5x text-success"></i>
                <a href="/new/">
                    <h3>New</h3>
                </a>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <div class="col-md-3 text-center">
        <div class="panel panel-default">
            <div class="panel-body">
                <i class="fa fa-search fa-5x text-primary"></i>
                <a href="/search/">
                    <h3>Search</h3>
                </a>
            </div>
        </div>
    </div>
    <?php if (User::isAdmin()): ?>
    <div class="col-md-3 text-center">
        <div class="panel panel-default">
            <div class="panel-body">
                <i class="fa fa-group fa-5x text-muted"></i>
                <a href="/students/">
                    <h3>Students</h3>
                </a>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <?php if (User::isAdmin()): ?>
    <div class="col-md-3 text-center">
        <div class="panel panel-default">
            <div class="panel-body">
                <i class="fa fa-trash fa-5x text-danger"></i>
                <a href="/delete/">
                    <h3>Delete Files</h3>
                </a>
            </div>
        </div>
    </div>
    <?php endif; ?> 
    <div class="col-md-3 text-center">
        <div class="panel panel-default">
            <div class="panel-body">
                <i class="fa fa-bar-chart fa-5x text-warning"></i>
                <a href="/results/">
                    <h3>Results</h3>
                </a>
            </div>
        </div>
    </div>
    <?php if (User::isAdmin()): ?>
    <div class="col-md-3 text-center">
        <div class="panel panel-default">
            <div class="panel-body">
                <i class="fa fa-upload fa-5x text-muted"></i>
                <a href="/upload/">
                    <h3>Upload</h3>
                </a>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <?php if (User::isAdmin()): ?>
    <div class="col-md-3 text-center">
        <div class="panel panel-default">
            <div class="panel-body">
                <i class="fa fa-download fa-5x text-muted"></i>
                <a href="/download/">
                    <h3>Download</h3>
                </a>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <div class="col-md-3 text-center">
        <div class="panel panel-default">
            <div class="panel-body">
                <i class="fa fa-table fa-5x text-primary"></i>
                <a href="/timetables/">
                    <h3>Timetables</h3>
                </a>
            </div>
        </div>
    </div>
    <div class="col-md-3 text-center">
        <div class="panel panel-default">
            <div class="panel-body">
                <i class="fa fa-book fa-5x text-success"></i>
                <a href="/notes/">
                    <h3>Notes</h3>
                </a>
            </div>
        </div>
    </div>
    <?php if (!User::isAdmin()): ?>
    <div class="col-md-3 text-center">
        <div class="panel panel-default">
            <div class="panel-body">
                <i class="fa fa-group fa-5x text-info"></i>
                <a href="/classmates/">
                    <h3>Classmates</h3>
                </a>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <div class="col-md-3 text-center">
        <div class="panel panel-default">
            <div class="panel-body">
                <i class="fa fa-user fa-5x text-info"></i>
                <a href="/profile/">
                    <h3>Profile</h3>
                </a>
            </div>
        </div>
    </div>
    <div class="col-md-3 text-center">
        <div class="panel panel-default">
            <div class="panel-body">
                <i class="fa fa-sign-out fa-5x text-info"></i>
                <a href="/logout/">
                    <h3>Logout</h3>
                </a>
            </div>
        </div>
    </div>
</div>
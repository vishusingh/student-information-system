<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title><?=$pageTitle;?></title>
<link href="http://coderthemes.com/minton/plugins/switchery/switchery.min.css" rel="stylesheet" />
<link href="<?=CSSPATH;?>bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="<?=CSSPATH;?>icons.css" rel="stylesheet" type="text/css">
<link href="<?=CSSPATH;?>style.css" rel="stylesheet" type="text/css">
<script src="<?=JSPATH;?>modernizr.min.js"></script>
</head>
<body>
        <div class="wrapper-page">
            <div class="text-center">
                <a href="index.html" class="logo-lg"><i class="mdi mdi-radar"></i> <span>SIS</span> </a>
            </div>
            <form class="form-horizontal m-t-20" action="/" method="POST">
                <?php
                    if (count($errorList))
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
                    ?>
                <div class="form-group row">
                    <div class="col-12">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="mdi mdi-account"></i></span>
                            <input name="username" class="form-control" type="text" required="" placeholder="Enter your username or email">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-12">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="mdi mdi-radar"></i></span>
                            <input name="password" class="form-control" type="password" required="" placeholder="Enter your password">
                        </div>
                    </div>
                </div>
                <div class="form-group text-right m-t-20">
                    <div class="col-xs-12">
                        <button class="btn btn-primary btn-custom w-md waves-effect waves-light" type="submit">Log In
                        </button>
                    </div>
                </div>
        </div>
        </form>
        </div>    
    </body>
</html>
<script src="<?=JSPATH;?>jquery.min.js"></script>
<script src="<?=JSPATH;?>popper.min.js"></script>
<script src="<?=JSPATH;?>bootstrap.min.js"></script>

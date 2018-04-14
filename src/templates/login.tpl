{include('short_header.tpl')}
<div class="wrapper-page">
    <div class="text-center">
        <a href="/" class="logo-lg"><i class="mdi mdi-radar"></i> <span>{$brandName}</span> </a>
    </div>
    <form class="form-horizontal m-t-20" action="/" method="POST">
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
    </form>
</div>
{include('short_footer.tpl')}

{include('header.tpl')}
<div class="content">
    <div class="container-fluid">
        <br /> <br />
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card-box">
                    <h4 class="header-title m-t-0 text-center">Post new notice</h4>
                    <br />
                    <form class="" action="/notices/new/" method="post">
						{if $success}
                            <div class="alert alert-success alert-dismissible fade show" role="alert">Notice has been added
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        {/if}

                        {if $errorCounter > 0}
                            {foreach $errors error}
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">{$error}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            {/foreach}
                        {/if}

                        <div class="form-group">
                            <label>Notice Title</label>
                            <input name='title' value="{$title}" type="text" class="form-control" required placeholder="Enter your title"/>
                        </div>
                        <div class="form-group">
                            <label>Message</label>
                            <div>
                                <textarea name="message" required class="form-control">{$message}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div>
                                <button type="submit" class="btn btn-primary waves-effect waves-light">
                                    Post
                                </button>
                                <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                    Cancel
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</div>
{include('footer.tpl')}

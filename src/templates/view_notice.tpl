{include('header.tpl')}
<div class="content">
    <div class="container-fluid">
        <br /> <br />
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card-box">
                    <h4 class="header-title m-t-0 text-center">{$title}</h4>
                    <br />
                    <p>{$message}</p>
                    <a href="/notices/update/{$id}" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</a>
                    <a href="/notices/delete/{$id}" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</div>
{include('footer.tpl')}

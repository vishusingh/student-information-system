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

        <div class="row">
            <div class="col-lg-12">
                <div class="card-box">
                    <table class="table">
                        <thead class="thead-default">
                        <tr>
                            <th>Description</th>
                            <th>Author</th>
                            <th>Course</th>
                            <th>Semester</th>
                            <th>Date Added</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        {if $notesCounter > 0}
                            {foreach $notes note}
                                <tr>
                                    <th scope="row">{$note.description}</th>
                                    <td>{$note.added_by}</td>
                                    <td>{$note.course}</td>
                                    <td>{$note.semester}</td>
                                    <td>{$note.date_added}</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example"><a class="btn btn-danger" href="{$note.webpath}"><i class="fa fa-trash"></i></a><a class="btn btn-success" href="{$note.webpath}"><i class="fa fa-download"></i></a></div>
                                    </td>
                                </tr>
                            {/foreach}
					    {/if}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
{include('footer.tpl')}

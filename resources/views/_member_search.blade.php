<div class="col-md-3">
    {{ Form::open(['method' => 'GET', 'url' => 'members', 'class' => 'form-inline navform my-2 my-lg-0', 'role' => 'search']) }}
        <div class="input-group custom-search-form">
            <input type="text" class="form-control" name="search" placeholder="Volunteers">
            <span class="input-group-btn">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </span>
        </div>
    {{ Form::close() }}
</div>
<div class="col-md-3">
    <div class="row">
    {{ Form::open(['method' => 'GET', 'url' => 'members', 'class' => 'form-inline navform col-md-3', 'role' => 'approval_status', 'style'=> 'display:inline-block']) }}
    <select name="approval_status">
        <option value="">All</option>
        <option value="pending">Pending</option>
        <option value="approved">Approved</option>
        <option value="disapproved">Disapproved</option>
        <option value="inactive">Inactive</option>
    </select>
    </div><br>
    <div class="row">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Approval Status</button>
    </div>
    {{ Form::close() }}
</div>
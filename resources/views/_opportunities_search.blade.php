<div class="col-md-3">
    {{ Form::open(['method' => 'GET', 'url' => 'opportunities', 'class' => 'form-inline navform my-2 my-lg-0', 'role' => 'search']) }}
        <div class="input-group custom-search-form">
            <input type="text" class="form-control" name="search" placeholder="Opportunities">
            <span class="input-group-btn">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </span>
        </div>
    {{ Form::close() }}
</div>
<div class="col-md-3">
    <div class="row">
    {{ Form::open(['method' => 'GET', 'url' => 'opportunities', 'class' => 'form-inline navform col-md-3', 'role' => 'volunteer_center_id', 'style'=> 'display:inline-block']) }}
    <select name="volunteer_center_id">
        <option value="">All</option>
        @foreach ($centers as $center)
            <option value="{{ $center->id }}">{{ ucfirst($center->name) }}</option>
        @endforeach
    </select>
    </div><br>
    <div class="row">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Volunteer Center</button>
    </div>
    {{ Form::close() }}
</div>
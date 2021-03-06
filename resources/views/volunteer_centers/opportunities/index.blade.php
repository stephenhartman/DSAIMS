@extends('layout')

@section('content')

    <div class="row">
        <div class="col-md-9">
            <h1>Opportunities</h1>
        </div>
        <div class="col-md-2">
            <a href="{{ route('volunteer_centers.opportunities.create', $volunteer_center->id) }}" class="btn btn-block btn-primary" style="margin-top: 18px">New Opportunity</a>
        </div>
        <div class="col-md-12">
            <hr>
        </div>
    </div> <!--end of row-->

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            @foreach ($volunteer_center->opportunities as $opportunity)
            <div>
                <a href="{{ URL::to('/volunteer_centers/' . $volunteer_center->id . '/opportunities/' . $opportunity->id) }}">{{ $opportunity->name }}</a>
            </div>
        @endforeach
        </div>
    </div>
@stop

@extends('base')

@section('title')
    Admin Dashboard
@endsection

@section('page-heading')
    Dashboard Adiministrativni pregled
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="panel panel-primary">
                <div class="panel-body">
                    <h3>Info Section</h3>
                </div>
            </div>

        </div>
        <div class="col-md-6">
            <div class="btn-group btn-group-lg">
                <a href="/" class="btn btn-default"> <span class="glyphicon glyphicon-home"></span> Home</a>
                <a href="{{ route('hiker_panel') }}" class="btn btn-default">
                    <span class="glyphicon glyphicon-th-list"></span>
                    Hikers
                </a>
                <a href="{{ route('hike_panel') }}" class="btn btn-default">
                    <span class="glyphicon glyphicon-triangle-top"></span>
                    Hikes
                </a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel panel-primary">
                <div class="panel-body">
                    <h3>Quick over view </h3>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
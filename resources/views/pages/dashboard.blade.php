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
                    <h3>Informacije</h3>
                </div>
            </div>

        </div>
        <div class="col-md-6">
            <div class="btn-group btn-group-lg">
                <a href="/" class="btn btn-default"> <span class="glyphicon glyphicon-home"></span> Domov</a>
                <a href="{{ route('hiker_panel') }}" class="btn btn-default">
                    <span class="glyphicon glyphicon-th-list"></span>
                    Pohodniki
                </a>
                <a href="{{ route('hike_panel') }}" class="btn btn-default">
                    <span class="glyphicon glyphicon-triangle-top"></span>
                    Hribi
                </a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel panel-primary">
                <div class="panel-body">
                    <h3>Hitri Pregled </h3>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
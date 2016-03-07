@extends('base')

@section('title')
    Hikes mangement
@endsection

@section('page-heading')
    Hikes mamagement Section
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <div class="btn-group btn-group-lg">
                    <a href="{{ route('dashboard') }}" class="btn btn-default">
                        <span class="glyphicon glyphicon-dashboard"></span>
                        Dashboard
                    </a>
                    <a href="/" class="btn btn-default">
                        <span class="glyphicon glyphicon-home"></span>
                        Home
                    </a>
                    <a href="{{ route('hiker_panel') }}" class="btn btn-default">
                        <span class="glyphicon glyphicon-th-list"></span>
                        Hikers
                    </a>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="panel panel-primary">
                    <div class="panel-body">
                        <a href="{{ route('add_hike') }}" class="btn btn-primary btn-blockšš">
                            <span class="glyphicon glyphicon-plus"></span>
                            Add new hike
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- all hikes table -->
        <div class="row">
            <div class="col-sm-8 col-offset-2">
                <h2>Hikes</h2>
                @if(count($hikes) == 0)
                    <div class="well">
                        <span class="glyphicon glyphicon-info-sign"></span>
                        There is no hikes destinations saved in the database.
                        Click on Add new hike button to save hike infro.
                    </div>
                @else
                    <table class="table table-responsive table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Altitude</th>
                            <th>Difficulty</th>
                            <th>Guide</th>
                            <th>Settings</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($hikes as $hike)
                                <tr>
                                    <td><a href="{{ route('about_hike', ['id' => $hike->id]) }}">{{ $hike->name }}</a></td>
                                    <td>{{ $hike->altitude }}</td>
                                    <td>{{ $hike->difficulty->name }}</td>
                                    <td>{{ $hike->guide->name }}  {{ $hike->guide->surname }}</td>
                                    <td>
                                        <a href="#" class="btn bg-primary">Settings</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>
@endsection
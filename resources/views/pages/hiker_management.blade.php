@extends('base')

@section('title')
    Hikers mangement
@endsection

@section('page-heading')
    Hikers mamagement Section
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="btn-group btn-group-lg">
                    <a href="{{ route('dashboard') }}" class="btn btn-default">
                        <span class="glyphicon glyphicon-th-list"></span>
                        Dashboard
                    </a>
                    <a href="/" class="btn btn-default">
                        <span class=" glyphicon glyphicon-home"></span> Domov
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-md-offset-2">
                <div class="page-header">
                    <h2>Hikers</h2>
                </div>
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Hikers Statistics
                        </div>
                        <div class="panel-body bg-info">
                            Hikers Management
                            <p>
                                <a href="{{ route('add_hiker') }}" class="btn btn-primary">
                                    <span class="glyphicon glyphicon-plus"></span>
                                    Add new Hhiker
                                </a>
                            </p>

                        </div>
                    </div>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <table class="table table-bordered table-responsive table-striped">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Surname</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Birth Date</th>
                        <th> Hiker Type</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($hikers as $hiker)
                            <tr>
                                <td>{{ $hiker->name }}</td>
                                <td>{{ $hiker->surname }}</td>
                                <td>{{$hiker->email}}</td>
                                <td>{{$hiker->phone}}</td>
                                <td>{{$hiker->birth_date}}</td>
                                <!-- klic povezovalne funkcije na Hiker modelu -->
                                <td>{{ $hiker->hiker_type->name }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-sm-offset-2">
                <h3>Hiker Types</h3>
                <!-- add new hiker type -->
                <div class="panel panel-primary">
                    <div class="panel-body">
                        <h4>Add new hiker type</h4>
                        <form action="{{ route('create_hiker_type') }}" method="post" class="form-inline">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <input type="text" name="name" id="name" placeholder="Hiker type name" class="form-control">
                                <button class="btn btn-primary">
                                    Create
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <!-- table of all hiker types -->
                @if(count($hikerTypes) == 0)
                    <div class="well">
                        There is on HikerTypes in database
                    </div>
                @else
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th># Id</th>
                                <th>Hiker Type</th>
                                <th>Created at</th>
                                <th> Updated at</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($hikerTypes as $hikerType)
                            <tr>
                                <td>{{ $hikerType->id }}</td>
                                <td>{{ $hikerType->name }}</td>
                                <td>{{ $hikerType->created_at }}</td>
                                <td>{{ $hikerType->updated_at }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>
@endsection
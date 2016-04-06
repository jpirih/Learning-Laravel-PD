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
                        <span class="glyphicon glyphicon-dashboard"></span>
                        Dashboard
                    </a>
                    <a href="/" class="btn btn-default">
                        <span class=" glyphicon glyphicon-home"></span> Domov
                    </a>
                    <a href="{{ route('hike_panel') }}" class="btn btn-default">
                        <span class="glyphicon glyphicon-triangle-top"></span>
                        Hribi
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-md-offset-2">
                <div class="page-header">
                    <h2>Pohodniki</h2>
                </div>
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Pohodniki - Statistika
                        </div>
                        <div class="panel-body bg-info">
                            Hikers Management
                            <p>
                                <a href="{{ route('add_hiker') }}" class="btn btn-primary">
                                    <span class="glyphicon glyphicon-plus"></span>
                                    Dodaj pohodnika
                                </a>
                            </p>

                        </div>
                    </div>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                @if(count($hikers) == 0)
                    <div class="well">
                        <span class="glyphicon glyphicon-info-sign"></span>
                        Trenutno v bazi ni shranjienih pohodnikov
                        Za dodajanje novega pohodnika Kliknite gumb dodaj Dodaj pohodnika
                    </div>
                @else
                    <table class="table table-bordered table-responsive table-striped">
                        <thead>
                        <tr class="glava">
                            <th>Ime</th>
                            <th>Priimek</th>
                            <th>E-mail</th>
                            <th>Telefon</th>
                            <th>Datum Rojstva</th>
                            <th> Tip pohodnika</th>
                        </tr>
                        </thead>
                        <tbody class="bg-info table-striped">
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
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-sm-offset-2">
                <h3>Hiker Types</h3>
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                            <!-- add new hiker type -->
                <div class="panel panel-primary">
                    <div class="panel-body">
                        <h4>Dodaj tip pohodnika</h4>
                        <form action="{{ route('create_hiker_type') }}" method="post" class="form-inline">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <input type="text" name="name" id="name" placeholder="tip pohodnika" class="form-control">
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
                        <span class="glyphicon glyphicon-info-sign"></span>
                        Trenutno ni shranjenih tipov pohodnikov
                    </div>
                @else
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr class="glava">
                                <th># Id</th>
                                <th>Hiker Type</th>
                                <th>Ustvarjen</th>
                                <th> Zadnja Sprememba</th>
                            </tr>
                        </thead>
                        <tbody class="bg-info table-striped">
                        @foreach($hikerTypes as $hikerType)
                            <tr>
                                <td>{{ $hikerType->id }}</td>
                                <td>{{ $hikerType->name }}</td>
                                <td>{{ $hikerType->created_at }}</td>
                                <td>{{ $hikerType->updated_at->diffForHumans() }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>
@endsection
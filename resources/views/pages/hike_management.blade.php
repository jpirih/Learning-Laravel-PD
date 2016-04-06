@extends('base')

@section('title')
    Hikes mangement
@endsection

@section('page-heading')
    Administracija Hribov - pohodov
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
                        Domov
                    </a>
                    <a href="{{ route('hiker_panel') }}" class="btn btn-default">
                        <span class="glyphicon glyphicon-th-list"></span>
                        Pohodniki
                    </a>
                </div>
            </div>
        </div>
        <br>
        <!-- all hikes table -->
        <div class="row">
            <div class="col-sm-8">
                <h2>Hribi</h2>
                @if(count($hikes) == 0)
                    <div class="well">
                        <span class="glyphicon glyphicon-info-sign"></span>
                        Trenutno ni hribov v bazi Za dodajanje novega Hriba.
                        Kliknite gumb dodaj Hrib-pohod.
                    </div>
                @else
                    <table class="table table-responsive table-bordered table-striped">
                        <thead>
                        <tr class="glava">
                            <th>Naziv</th>
                            <th>Nadmorska višina</th>
                            <th>Težavnost</th>
                            <th>Vodnik</th>
                            <th>Uredi</th>
                        </tr>
                        </thead>
                        <tbody class=" table-striped bg-info">
                            @foreach($hikes as $hike)
                                <tr>
                                    <td><a href="{{ route('about_hike', ['id' => $hike->id]) }}">{{ $hike->name }}</a></td>
                                    <td>{{ $hike->altitude }}</td>
                                    <td>{{ $hike->difficulty->name }}</td>
                                    <td>{{ $hike->guide->name }}  {{ $hike->guide->surname }}</td>
                                    <td>
                                        <a href="#" class="btn bg-primary">Uredi</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
                <br>
                <!-- vsi izleti -->
                <h2> Vsi organizirani izleti</h2>
                @if(count($allEvents) == 0)
                    <div class="well">
                        <span class="glyphicon glyphicon-info-sign"></span>
                        V bazi trenutno ni shranjenih podatkov o izletih. Za dodajanje klikni
                        na gumb organiziraj izlet
                    </div>
                @else
                    <table class="table table-bordered table responsive table-striped">
                        <thead>
                            <tr class="glava">
                                <th>Začetek</th>
                                <th>Konec</th>
                                <th>Hrib</th>
                                <th>Cena €</th>
                                <th>Več</th>
                            </tr>
                        </thead>
                        <tbody class="bg-info table-striped">
                            @foreach($allEvents as $event)
                                <tr>
                                    <td>{{ $event->start }}</td>
                                    <td>{{ $event->end }}</td>
                                    <td>{{ $event->hike->name }}</td>
                                    <td>{{ $event->price }}</td>
                                    <td><a href="#" class="btn btn-primary">Info</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
            <!-- dodaj hrib in kategorije zahtevnosti -->
            <div class="col-sm-4">
                <div class="panel panel-primary">
                    <div class="panel-body">
                        <!-- dodaj podatke o hribu pohodu  -->
                        <h3> Dodaj Hrib </h3>
                        <a href="{{ route('add_hike') }}" class="btn btn-primary btn-block">
                            <span class="glyphicon glyphicon-plus"></span>
                            Dodaj Hrib - pohod
                        </a>
                        <hr>
                        <!-- organizacija izleta -->
                        <h3> Aktualni izleti </h3>
                        @if(count($events) == 0)
                            <div class="well">
                                <span class="glyphicon glyphicon-info-sign"></span>
                                Trenutno ni organiziranih izletov na ktere bi se lahko
                                prijavili. Spremljajte obvestila na spletni strani
                            </div>
                        @else
                            <table class=" table table-responsive table-condensed">
                                <thead>
                                    <tr>
                                        <th>Hrib</th>
                                        <th>Datum</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($events as $event)
                                        <tr>
                                            <th>{{ $event->hike->name}}</th>
                                            <th>{{ $event->start }}</th>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @endif
                        <a href="{{ route('create_event') }}" class="btn btn-success btn-block">
                            <span class="glyphicon glyphicon-plus"></span>
                            Organiziraj Izlet
                        </a>
                        <hr>
                        <h3> Kategorije zahtevnosti </h3>
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <p>
                        <form action="{{ route('create_difficulty') }}" method="post" class="form-inline">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="row">
                                <div class="col-sm-4">
                                    <input type="text" name="label" placeholder="Oznaka" class="form-control">
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" name="name" placeholder="Naziv" class="form-control">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-8">
                                    <button type="submit" class="btn btn-primary btn-block">
                                         <span class="glyphicon glyphicon-save"></span> Shrani
                                    </button>
                                </div>
                            </div>
                        </form>
                        <br>
                        </p>
                        @if(count($difficulties) == 0)
                            <div class="well">
                                <span class="glyphicon glyphicon-info-sign"></span>
                                Trenutno ni shranjenih kategorij zahtevnosti obvezno dodaj
                                preden dodajaš odatke o hribu oz pohodu
                            </div>
                        @else
                            <ul>
                                @foreach($difficulties as $difficulty)
                                    <li>{{ $difficulty->label }} - {{ $difficulty->name }}</li>
                                @endforeach
                            </ul>
                        @endif
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@extends('base')

@section('title')
    Hikes
@endsection

@section('page-heading')
    Hribi na katere organiziramo pohode ali izlete
@endsection

@section('content')
    <div class="container">
        <div class="row">
            @if(session('status'))
                <div class="col-sm-6 col-sm-offset-3">
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                </div>
            @endif
            <div class="col-sm-8 col-sm-offset-2">
                <p>
                    V spodnji tabeli so so našteti hribi na katere oganizhiramo izlete
                    za več podrobnosti kliknite na  naziv hriba.
                </p>
                @if(count($hikes) == 0)
                    <div class="well">
                        <p>
                            <span class="glyphicon glyphicon-info-sign"></span>
                            Trenutno ni shranjeih opisov hirobv v bazi za dodajanje novega
                            klikni na Hribi na Dashbord zavihku
                        </p>
                    </div>
                @else
                    <table class="table table-responsive table-bordered table-striped">
                        <thead>
                        <tr class="glava">
                            <th>Hrib</th>
                            <th>Vodnik</th>
                            <th>Datum izleta</th>
                            <th>Prijava</th>
                        </tr>
                        </thead>
                        <tbody class="bg-info table-striped">
                            @foreach($hikes as $hike)
                                <tr>
                                    <td><a href="{{ route('about_hike', ['id' => $hike->id]) }}">{{ $hike->name }}</a></td>
                                    <td>
                                        {{ $hike->guide->name }} {{$hike->guide->surname}}
                                    </td>
                                    @foreach($events as $event)
                                        <td>{{ $event->start }}</td>
                                        <td><a href="{{route('event_signup', ['id' => $hike->id])}}" class="btn btn-primary">
                                            Prijava
                                        </a>
                                    </td>
                                    @endforeach
                                    <td><span class="glyphicon glyphicon-info-sign"></span> Trenutno ni organiziranega izleta</td>
                                    <td> Prijava ni mogoča</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>
@endsection
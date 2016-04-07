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
                    @foreach($hikes as $hike)
                        <div class="media">
                            <div class="media-left">
                                <a href="{{ route('about_hike', ['id' => $hike->id]) }}">
                                    <img class="media-object img-rounded img-thumbnail" width="150" height="150" src="{{ $hike->img_url }}" alt="hrib_slikca">
                                </a>
                            </div>
                            <div class="media-body">
                                <a href="{{ route('about_hike', ['id' => $hike->id]) }}" class="media-heading"><h4>{{ $hike->name }}</h4></a>
                                <p>
                                    <sapn class="krepko">Nadmorska višina: </sapn> {{ $hike->altitude }} metrov
                                </p>
                                <p>
                                    <span class="krepko">Zahtevnost: </span> {{ $hike->difficulty->name }}
                                </p>
                                <p>
                                    <span class="krepko">Opis</span> {{ $hike->description }}}
                                </p>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
@endsection
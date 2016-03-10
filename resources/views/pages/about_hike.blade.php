@extends('base')

@section('title')
    Hikes - {{$hike->name}}
@endsection

@section('page-heading')
    Vse o {{ $hike->name }}
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <h2> O hribu </h2>
                <p>
                    {{$hike->description}}
                </p>
                <h2> General info</h2>
                <div>
                    <table class="table table-bordered table-responsive table-striped ">
                        <thead>
                        <tr>
                            <th>Naziv</th>
                            <th>Nadmorska višina</th>
                            <th>Zahtevnost</th>
                            <th>Odprto od</th>
                            <th>Odprto do</th>
                            <th>Vodnik</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $hike->name }}</td>
                                <td>{{ $hike->altitude }}</td>
                                <td>{{ $hike->difficulty->name }}</td>
                                <td>{{ $hike->open_form }}</td>
                                <td>{{ $hike->open_to }}</td>
                                <td>{{ $hike->guide->name }} {{ $hike->guide->surname }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p>
                    <span class="img">
                        <img src="{{$hike->img_url}}" alt="{{$hike->name}}" class=" img img-responsive" width="640" height="480">
                    </span>
                </p>

            </div>
        </div>
    </div>

@endsection
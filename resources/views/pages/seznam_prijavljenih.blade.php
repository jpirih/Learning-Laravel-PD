@extends('base')

@section('title')
    Seznam prijavljenih {{ $pohod  }}
@endsection

@section('page-heading')
    Seznam  udeležencev pohoda
@endsection

@section('content')
    @if(session('status'))
        <div class="col-sm-6 col-sm-offset-3">
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        </div>
    @endif
        <!-- general data section top middle blue box -->
        <div class="row">
            <div class="col-sm-2">
                <p>
                    <a href="/" class="btn btn-success btn-block">
                        <span class="glyphicon glyphicon-home"></span> Domov
                    </a>
                </p>
                <p>
                    <a href="/hikes/smarna-gora" class="btn btn-primary btn-block">
                        <span class="glyphicon glyphicon-asterisk"></span> About {{ $pohod }}
                    </a>
                </p>
                <p>
                    <a href="/hikes" class="btn btn-danger btn-block">
                        <span class="glyphicon glyphicon-triangle-left"></span> Nazaj na seznam
                    </a>
                </p>
            </div>
        <div class="col-sm-4 col-sm-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    General data
                </div>
                <div class="panel-body">
                    <p>
                        <span class="krepko">Pohod:</span> {{ $pohod }}
                    </p>
                    <p>
                        <span class="krepko">Datum:</span> {{ $datum }}
                    </p>
                    <p>
                        <span class="krepko">Vodnik:</span> {{ $guide }}
                    </p>
                    <p>
                        <span class="krepko"> Trenutno prijavljenih: </span> {{  $stevPrijavljenih }}
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- tabela z vsemi pohodniki  -->
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <table class="table table-bordered table-responsive">
                <thead>
                <tr>
                    <th>Ime</th>
                    <th>Priimek</th>
                    <th>Email</th>
                    <th>Datum Rojstva</th>
                </tr>
                </thead>
                <tbody>
                @foreach($pohodniki as $pohodnik)
                    <tr>
                        <td>{{ $pohodnik->name }}</td>
                        <td>{{ $pohodnik->surname }}</td>
                        <td>{{ $pohodnik->email }}</td>
                        <td>{{ $pohodnik->birth_date }}</td>
                    </tr>
                @endforeach
                </tbody>

            </table>
        </div>
    </div>
@endsection
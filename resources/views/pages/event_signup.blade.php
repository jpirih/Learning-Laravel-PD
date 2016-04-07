@extends('base')

@section('title')
    Prijava na izlet {{ $event->hike->name}}
@endsection

@section('page-heading')
    Prijava za izlet {{ $event->hike->name}}
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <div class="well">
                    <p>
                        <span class="krepko">izlet id:</span> {{ $event->id }}
                    </p>

                    <p>
                        <span class="krepko">Odhod:</span> {{ $event->start->format('d.m.y H:i') }}
                    </p>
                    <p>
                        <span class="krepko">Prihod:</span> {{ $event->end->format('d.m.y H:i') }}
                    </p>
                    <p>
                        <span class="krepko">Info:</span> {{ $event->info }}
                    </p>

                    <p>
                        <span class="krepko">Vodnik:</span> {{ $event->hike->guide->name }} {{ $event->hike->guide->surname }}
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <h2>Izpolni Prijavo</h2>
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="" method="post"   class="form-horizontal">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label for="name" class="col-sm-4 control-label">Ime</label>
                        <div class="col-sm-8">
                            <input type="text" name="name" id="name" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="surname"class="col-sm-4 control-label">Priimek</label>
                        <div class="col-sm-8">
                            <input type="text" name="surname" id="surname" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-sm-4 control-label">E-mail</label>
                        <div class="col-sm-8">
                            <input type="email" name="email" id="email" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="phone"class="col-sm-4 control-label">Telefon (031-123-456)</label>
                        <div class="col-sm-8">
                            <input type="text" name="phone" id="phone" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="birth_date" class="col-sm-4 control-label">Datum rojstva (YYYY-MM-DD)</label>
                        <div class="col-sm-8">
                            <input type="date" name="birth_date" id="birth_date" class="form-control">
                            <br>
                            <button type="submit" class="btn btn-primary btn-block">
                                <span class="glyphicon glyphicon-save"></span>
                                Shrani podatke!
                            </button>
                        </div>

                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
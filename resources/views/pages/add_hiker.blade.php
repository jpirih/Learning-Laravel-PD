@extends('base')

@section('title')
    Add new hiker
@endsection

@section('page-heading')
    Dodaj Pohodnika
@endsection

@section('content')
    <div class="contariner">
        <div class="row">
            <!-- prijavni obrazec -->
            <div class="col-sm-6 col-sm-offset-3">
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
                        <label for="hikerTypes" class="col-sm-4 control-label">Tip pohodnika</label>
                        <div class="col-sm-8">
                            @foreach($hikerTypes as $hikerType)
                                <input type="radio" name="hikerTypes[]" value="{{$hikerType->id}}" class="radio radio-inline" >
                                {{ $hikerType->name }}
                            @endforeach
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
@extends('base')

@section('title')
    Organizacija izleta
@endsection

@section('page-heading')
    Organizacija izleta
@endsection

@section('content')
    <div class="container">
        <div class="row">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="col-sm-6 col-sm-offset-3">
                <form action="" method="post" class="form-horizontal">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label for="start" class="col-sm-4 control-label">Začetek datum in ura</label>
                        <div class="col-sm-8">
                            <input type="datetime-local" name="start" id="start" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="end" class="col-sm-4 control-label">Konec datum in ura</label>
                        <div class="col-sm-8">
                            <input type=datetime-local name="end" id="end" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="hikes" class="col-sm-4 control-label">Izberei Hrib </label>
                        <div class="col-sm-8">
                            <select name="hikes[]" id="hikes" class="form-control">
                                @foreach($hikes as $hike)
                                    <option value="{{ $hike->id }}">{{ $hike->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="price" class="col-sm-4 control-label">Cena €</label>
                        <div class="col-sm-8">
                            <input type="text" name="price" id="price" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="info" class="col-sm-4 control-label">Info</label>
                        <div class="col-sm-8">
                            <textarea name="info" id="info" cols="30" rows="10" class="form-control">

                            </textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-8 col-sm-offset-4">
                            <button type="submit" class="btn btn-success">
                                <span class="glyphicon glyphicon-save"></span>
                                Shrani podatke
                            </button>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>

    <
@endsection
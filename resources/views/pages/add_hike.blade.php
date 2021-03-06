@extends('base')

@section('title')
    Add new hike
@endsection

@section('page-heading')
    Dodaj podatke o Hribu - pohodu
@endsection

@section('content')
    <div class="container">
        <div class="row">
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
                <form action="" method="post" class="form-horizontal">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label for="name" class="col-sm-4 control-label">Naziv</label>
                        <div class="col-sm-8">
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="altitude" class="col-sm-4 control-label">Nadmorska višina </label>
                        <div class="col-sm-8">
                            <input type="number" name="altitude" id="altitude" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="difficulties" class="col-sm-4 control-label">Zahtevnost</label>
                        <div class="col-sm-8">
                            @foreach($difficulties as $difficulty)
                                <input type="radio" name="difficulties[]" value="{{ $difficulty->id }}" class="radio radio-inline"> 
                                {{ $difficulty->name }}
                            @endforeach
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="open_from" class="col-sm-4 control-label">Odprto od(YYYY-MM-DD)</label>
                        <div class="col-sm-8">
                            <input type="text" id="open_from" name="open_from" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="open_to" class="col-sm-4 control-label">Odprto do (YYYY-MM-DD)</label>
                        <div class="col-sm-8">
                            <input type="text" id="open_to" name="open_to" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="guide" class="col-sm-4 control-label">Vodnik</label>
                        <div class="col-sm-8">
                            <select name="guides[]" id="guide" class="form-control">
                                @foreach($guides as $guide)
                                    <option value="{{$guide->id}}"> {{$guide->name}} {{$guide->surname}} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="description" class="col-sm-4 control-label">Opis</label>
                        <div class="col-sm-8">
                            <textarea name="description" id="description" cols="30" rows="10" class="form-control">

                            </textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="img_url" class="col-sm-4 control-label">Url Slike</label>
                        <div class="col-sm-8">
                            <input type="text" id="img_url" name="img_url" class="form-control">
                        </div>
                    </div>
                    <div class="from-group">
                        <div class="col-sm-8 col-sm-offset-4">
                            <button type="submit" class="btn btn-primary">
                                <span class="glyphicon glyphicon-save"></span>
                                Save hike info
                            </button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>




@endsection
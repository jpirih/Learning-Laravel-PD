@extends('base')

@section('title')
    Add new hiker
@endsection

@section('page-heading')
    Add new hiker
@endsection

@section('content')
    <div class="contariner">
        <div class="row">
            <!-- prijavni obrazec -->
            <div class="col-sm-6 col-sm-offset-3">
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
                        <label for="phone"class="col-sm-4 control-label">Phone (031-123-456)</label>
                        <div class="col-sm-8">
                            <input type="text" name="phone" id="phone" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="hikerTypes" class="col-sm-4 control-label">Hiker type</label>
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
                            <input type="text" name="birth_date" id="birth_date" class="form-control">
                            <br>
                            <button type="submit" class="btn btn-primary btn-block">
                                Save Hikers info!
                            </button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
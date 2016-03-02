@extends('base')

@section('title')
    Prijavni obrazec
@endsection

@section('page-heading')
    Prijava za pohod na Šmarno Goro
@endsection

@section('content')
        <!-- prijavni obrazec -->
    <div class="col-sm-6 col-sm-offset-3">
        <form action="" method="post" class="form-horizontal">
            <div class="form-group">
                <label for="name" class="col-sm-4 control-label">Ime</label>
                <div class="col-sm-8">
                    <input type="text" name="name" id="name" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="surname"class="col-sm-4 control-label">Priimek</label>
                <div class="col-sm-8">
                    <input type="text" name="surname" id="surname" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-4 control-label">E-mail</label>
                <div class="col-sm-8">
                    <input type="email" name="email" id="email" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="birth_date" class="col-sm-4 control-label">Datum rojstva (YYYY-MM-DD)</label>
                <div class="col-sm-8">
                    <input type="text" name="birth_date" id="birth_date" class="form-control">
                    <br>
                    <button type="submit" class="btn btn-primary btn-block">
                        Prijavi se!
                    </button>
                </div>

            </div>
        </form>
    </div>
@endsection
@extends('base')

@section('title')
    Hikes
@endsection

@section('page-heading')
    All Our Hikes
@endsection

@section('content')
    <div class="col-sm-8 col-sm-offset-2">
        <p>
            In the table below are listed click on Hhike title
        </p>

        <table class="table table-bordered table-responsive">
            <tr>
                <th>Hike title </th>
                <th>Guide</th>
                <th>Seznam udelelžencev</th>
            </tr>
            <tr>
                <td><a href="/hikes/smarna-gora">Šmarna gora</a></td>
                <td>Janez Kranjski</td>
                <td><a href="/hikes/seznam-vseh">Seznam Prijavljenih</a></td>
            </tr>

        </table>

    </div>
@endsection
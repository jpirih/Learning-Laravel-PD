@extends('base')

@section('title')
    Hikes
@endsection

@section('page-heading')
    All Our Hikes
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <p>
                    In the table below are listed click on Hhike title
                </p>
                @if(count($hikes) == 0)
                    <div class="well">
                        <p>
                            <span class="glyphicon glyphicon-info-sign"></span>
                            There is no hikes in the database To add new hike go to dashboard Hikes
                            section
                        </p>
                    </div>
                @else
                    <table class="table table-responsive table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Hike name</th>
                            <th>Guide</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($hikes as $hike)
                                <tr>
                                    <td><a href="{{ route('about_hike', ['id' => $hike->id]) }}">{{ $hike->name }}</a></td>
                                    <td>
                                        {{ $hike->guide->name }} {{$hike->guide->surname}}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif

                <table class="table table-bordered table-responsive">

                </table>

            </div>
        </div>
    </div>
@endsection
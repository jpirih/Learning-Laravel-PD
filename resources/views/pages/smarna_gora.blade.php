@extends('base')

@section('title')
    Hikes - Šmarna Gora
@endsection

@section('page-heading')
    About {{ $title }}
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <h2> About hike </h2>
                <p>
                    Suspendisse mattis nulla at risus pharetra, at blandit neque dictum.
                    Vestibulum molestie at urna quis sagittis. In hac habitasse platea dictumst.
                    Nunc tempor magna eget arcu pharetra posuere. Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit. Phasellus pulvinar quis tellus ut lobortis
                </p>
                <h2> General info</h2>
                <div>
                    <table class="table table-bordered table-responsive ">
                        <tr>
                            <th>Name</th>
                            <td>{{ $title }}</td>
                        </tr>
                        <tr>
                            <th>Altitude</th>
                            <td>676 meters </td>
                        </tr>
                        <tr>
                            <th>Guide</th>
                            <td>{{ $guide }}</td>
                        </tr>
                    </table>
                </div>

                <p>
                    Pellentesque egestas dolor convallis orci bibendum, id ornare sem pharetra.
                    Integer sed magna vel dolor faucibus elementum vitae vel ipsum. Maecenas vel mattis nisi.
                    Morbi id auctor nibh. Fusce accumsan felis ut elit lacinia, rhoncus semper ante suscipit.
                    Vivamus rutrum mi et dui tincidunt, eget suscipit ex convallis. Donec ut varius nibh.
                    Quisque vestibulum eros eu dui commodo, quis sodales ex porta. Cras in bibendum odio.
                    Phasellus iaculis, dui sed bibendum vestibulum, odio urna rutrum sem, vitae hendrerit eros velit et lacus.
                    Aenean fringilla nibh turpis. Fusce ultricies sapien id porta vestibulum. Aenean in ipsum magna.
                </p>
                <p>
    <span class="img">
        <img src="http://farm7.static.flickr.com/6032/6221415536_5367fde3a8.jpg" alt="porezen" class=" img img-responsive">
    </span>
                </p>
            </div>
        </div>
    </div>

@endsection
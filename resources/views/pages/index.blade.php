@extends('base')

@section('title')
    Home
@endsection



@section('content')
    <div class="container">
        @section('page-heading')
            Dobrodošli na spletni strani Hobby PD!
        @endsection

        @if(session('status'))
                <div class="row">
                    <col-sm-6 class="col-sm-offset-3">
                        <div class="alert alert-success">
                            <span class="glyphicon glyphicon-check"></span>
                            {{ session('status') }}
                        </div>
                    </col-sm-6>
                </div>
        @endif

        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <h3> Aktualni izleti </h3>
                @if(count($events) != 0)
                    <div class="panel panel-primary">
                        <div class="panel-body">
                            @foreach($events as $event)
                                <p>
                                    <span class="vabilo">Pohod</span>: Zbiramo prijave za pohod na
                                    <span class="vabilo">{{ $event->hike->name }}:</span>,
                                     Ki bo dne <span class="vabilo">{{$event->start->format('d.m.y  H:i')}}</span> {{ $event->info }}
                                </p>
                                <p>
                                    Prijavi se tukaj
                                    <a href="{{route('event_signup', ['id' => $event->id])}}" class="btn btn-primary">
                                        Prijava
                                    </a>
                                </p>
                                <hr>
                            @endforeach
                        </div>
                    </div>
                @else
                <div class="well">
                    <p>
                        <span class="glyphicon glyphicon-info-sign"></span>
                        Trenutno ni organiziranih izletov
                    </p>
                </div>
                @endif
            </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <h2>Zdravo! :)</h2>
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
                <img src="http://www.sobe-simonic.si/images/attractions/16.jpg" alt="porezen" class=" img img-responsive">
            </span>
                    </p>
                    <p>
                        Vestibulum sit amet posuere felis. Proin at lobortis dolor. Aenean condimentum feugiat dui sit
                        amet blandit. Pellentesque ornare purus arcu, at facilisis lacus ultricies in. Integer
                        lacinia, metus sit amet suscipit dapibus, neque velit condimentum magna, vel tristique dolor
                        velit et eros. Donec feugiat vitae turpis ac vestibulum. Pellentesque rutrum dictum enim, ac mollis
                        urna consectetur vitae. Pellentesque quis rhoncus diam, sed suscipit metus. Sed feugiat vulputate posuere.
                        Vestibulum auctor venenatis lorem a facilisis. Aenean pharetra efficitur bibendum. Vivamus pretium nibh et
                        sem consectetur cursus.
                    </p>

                </div>
            </div>
        </div>

    </div>

@endsection
@extends('base')

@section('title')
    Podrobnosti o izletu
@endsection

@section('page-heading')
    Podrobnosti o izletu na {{ $event->hike->name }}
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-4 ">
                <div class="thumbnail okvir">
                    <img src="{{ $event->hike->img_url }}" alt="hill_image" class=" img img-rounded img-responsive" width="320" height="400">
                    <div class="caption">
                        <h3>{{ $event->hike->name }} {{ $event->start->format('d.M.Y') }}</h3>
                        <hr>
                        <h4>Pregled</h4>
                        <p>
                            <span class="krepko">Odhod</span> {{ $event->start->format('d.m.y H:i') }}
                        </p>
                        <p>
                            <span class="krepko">Prihod </span> {{ $event->end->format('d.m.y H:i') }}
                        </p>
                        <p>
                            <span class="krepko">Število pirjavljenih:</span> <span class="badge">{{ count($participants) }}</span>
                        </p>
                        <h4>Podrobnosti</h4>
                        <p>
                            {{ $event->info }}
                        </p>
                        <p>
                            <span class="krepko">Vodnik</span> {{ $event->hike->guide->name }} {{ $event->hike->guide->surname }}
                        </p>
                        <p>
                            <span class="krepko">Cena</span> {{ $event->price }} <span class="krepko">EUR</span>
                        </p>

                        <p>
                            <a href="{{ route('about_hike', ['id' => $event->hike_id]) }}" class="btn btn-primary" role="button">
                                O hribu
                            </a>
                            <a href="{{ route('hike_panel') }}" class="btn btn-danger" role="button">Nazaj</a>
                        </p>

                    </div>
                </div>

            </div>
            <div class="col-sm-8">
                <h3>Seznam udeležencev</h3>
                <hr>
                <table class="table table-responsive table-striped table-bordered">
                    <thead>
                        <tr class="glava">
                            <th>Ime</th>
                            <th>Priimek</th>
                            <th>Starost</th>
                            <th>Telefon</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody class="bg-info table-striped">
                    @foreach($participants as $participant)
                        <tr>
                            <td>{{ $participant->name }}</td>
                            <td>{{ $participant->surname }}</td>
                            <td>{{ $participant->birth_date->diffInYears() }}</td>
                            <td>{{ $participant->phone }}</td>
                            <td>{{ $participant->email }}</td>
                        </tr>
                    @endforeach

                    </tbody>


                </table>
            </div>
        </div>
    </div>

@endsection
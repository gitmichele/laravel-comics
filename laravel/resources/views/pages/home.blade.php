@extends('layouts.main-layout')

@section('jumbo-image')
    <img src="{{ asset('/storage/img/jumbotron.jpg') }}" alt="">
@endsection

@section('content')
    <div class="container">
        <div class="current">
            Current-series
        </div>
    </div>

    <main>
        <div class="cover-show container">
            @foreach ($data as $card)
                <div class="card">
                    <figure>
                        <img src="{{ $card['thumb'] }}" alt="">
                    </figure>
                    <div class="name">
                        <h3> {{ $card['title'] }}</h3>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
@endsection


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
        <div class="home-main-container">
            <div class="cover-show container">
                @foreach ($data as $card)
                    <a class="card" href="{{ route('comic', $loop -> index) }}">
                        <figure>
                            <img src="{{ $card['thumb'] }}" alt="">
                        </figure>
                        <div class="name">
                            <h3> {{ $card['title'] }}</h3>
                        </div>
                    </a>
                @endforeach
    
                <div class="more-btn">
                    <a href="#">Load more</a>
                </div>
            </div>
    
            @include('components.main-nav')
        </div>
    </main>
@endsection


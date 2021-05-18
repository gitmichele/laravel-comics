@extends('layouts.main-layout')

@section('jumbo-image')
    <img src="{{ asset('/storage/img/jumbotron.jpg') }}" alt="">
@endsection

@section('content') 
<div class="separator">
</div>

<div class="container">
    <div class="comic-cover-container">
        <img src="{{ $elem['thumb'] }}" alt="">
    </div>
</div>

<main>

    <div class="container">
        <div class="comic-top-description">
            <div class="comic-text">
                <h2>
                    {{ $elem['title'] }}
                </h2>

                <div class="price-avail-container">
                    <div class="price">
                        <span>U.S. Price: {{ $elem['price'] }}</span>
                    </div>
                    <div class="avail">
                        <div>Available</div>
                        <div>Check Availability</div>
                    </div>
                </div>

                <p>{{ $elem['description'] }}</p>

            </div>

            <div class="comic-adv">
                <img src="{{ asset('/storage/img/test.jpg') }}" alt="">
            </div>
        </div>
    </div>

</main>
@endsection
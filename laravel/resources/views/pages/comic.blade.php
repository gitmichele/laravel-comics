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

    <div class="comic-bottom-description">
        <div class="container">
            <div class="talent"> 
                <div class="col-title">
                    <h3>Talent<h3>
                </div>
                <div class="col-row">
                    <h5>Art by:</h5>
                    <span>
                        @foreach ($elem['artists'] as $artist)
                            @if ($loop -> index < count($elem['artists']) - 1)
                                <a href="#"> {{ $artist }}</a>,
                            @else
                                <a href="#"> {{ $artist }}</a>
                            @endif
                        @endforeach
                    </span>
                </div>
                <div class="col-row">
                    <h5>Written by:</h5>
                    <span>
                        @foreach ($elem['writers'] as $writer)
                            @if ($loop -> index < count($elem['writers']) - 1)
                                <a href="#"> {{ $writer }}</a>,
                            @else
                                <a href="#"> {{ $writer }}</a>
                            @endif
                        @endforeach
                    </span>
                </div>
            </div>

            <div class="specs">
                <div class="col-title">
                    <h3>Specs<h3>
                </div>
                <div class="col-row">
                    <h5>Series</h5>
                    <span>
                        <a href="">{{ $elem['series'] }}</a>
                    </span>
                </div>
                <div class="col-row">
                    <h5>U.S. Price</h5>
                    <span>{{ $elem['price'] }}</span>
                </div>
                <div class="col-row">
                    <h5>On Sale Date</h5>
                    <span>{{ $elem['sale_date'] }}</span>
                </div>
                
            </div>
        </div>
    </div>

</main>
@endsection
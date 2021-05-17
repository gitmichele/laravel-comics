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
@endsection


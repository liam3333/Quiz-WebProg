<head>
    <style>
        .silver{
            background-color: silver;
        }
        .gold{
            background-color: gold;
        }
        .red{
            background-color: #ef6058;
        }
    </style>
</head>

@extends('master')

@section('title', 'Main Product')
@section('description', 'Product Description Here')

@section('container')
    <h1 class="box">Product Lists</h1>
    @foreach ($product as $p)
    <div class="box
    {{ ($p["status"] === 'R') ? 'silver' : ''}}
    {{ ($p["status"] === 'SR') ? 'gold' : '' }}
    {{ ($p["status"] === 'SSR') ? 'red' : '' }}">
        <div class="info">
            <div class="numbering">
                <p>{{ $p["id"] }}</p>
            </div>
            <a href="product/{{ $p["id"] }}"><h1 class="title">{{ $p["name"] }}</h1></a>
            <h2>Status: {{ $p["status"] }}</h2>
            <h2>Price: Rp {{ $p["price"] }}</h2>
        </div>

        <div class="image">
            <img src="assets/{{ $p["id"] }}.jpg" alt="" width="100%">
        </div>
    </div>
    @endforeach
@endsection

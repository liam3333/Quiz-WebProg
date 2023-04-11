<head>
    <style>
        body{
            font-family: 'Plus Jakarta Sans', sans-serif;
            padding: 20px
        }
        .color{
            padding: 10px 30px;
            border-radius: 10px;   
            margin-bottom: 20px;
        }
        .button{
            padding: 5px 10px;
            background-color: black;
            border-radius: 10px;
            color: white;
        }
        .image img{
            border-radius: 20px
        }

    </style>
</head>

@extends('master')

@section('title', 'Detail Product')
@section('description', 'Product Description Here')

@section('container')
    @if (($product["status"] == 'R'))    
        <div class="color" style="border: 10px solid silver;">    
            <h1>{{ $product["name"] }}</h1>
            <h2>Status: {{ $product["status"] }}</h2>
            <h2>Price : Rp {{ $product["price"] }}</h2>
            <p>{{ $product["description"] }}</p>
            {{-- <p>{{ $product["id"] }}</p> --}}
            <div class="image">
                <img src="{{asset('assets/'.$product["id"]. '.jpg')}}" alt="EROR" width="80%">
            </div>
        </div>
    @elseif (($product["status"] == 'SR'))    
        <div class="color" style="border: 10px solid gold;">    
            <h1>{{ $product["name"] }}</h1>
            <h2>Status: {{ $product["status"] }}</h2>
            <h2>Price : Rp {{ $product["price"] }}</h2>
            <p>{{ $product["description"] }}</p>
            <div class="image">
                <img src="{{asset('assets/'.$product["id"]. '.jpg')}}" alt="EROR" width="80%">
            </div>
        </div>
    @elseif (($product["status"] == 'SSR'))    
        <div class="color" style="border: 10px solid #ef6058;">    
            <h1>{{ $product["name"] }}</h1>
            <h2>Status: {{ $product["status"] }}</h2>
            <h2>Price : Rp {{ $product["price"] }}</h2>
            <p>{{ $product["description"] }}</p>
            <div class="image">
                <img src="{{asset('assets/'.$product["id"]. '.jpg')}}" alt="EROR" width="80%">
            </div>
        </div>
    @endif

    <a href="/product" class="button">Back to Main Page</a>
@endsection
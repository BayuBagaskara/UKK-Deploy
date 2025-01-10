@extends('layouts.app')

@section('title', $product->name)

@section('content')
<div class="card mb-4">
    <img src="{{ $product->image_url }}" class="card-img-top" alt="{{ $product->name }}">
    <div class="card-body">
        <h1>{{ $product->name }}</h1>
        <p>{{ $product->description }}</p>
        <h4>Price: ${{ $product->price }}</h4>
        <a href="/cart/add/{{ $product->id }}" class="btn btn-success">Add to Cart</a>
    </div>
</div>
@endsection

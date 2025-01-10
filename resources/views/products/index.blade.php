@extends('layouts.app')

@section('title', 'Daftar Produk')

@section('content')
<div class="container my-5">
    <h1 class="text-center mb-4">Daftar Produk</h1>

    <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 g-4">
        @foreach ($products as $product)
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="{{ $product->image }}" class="card-img-top" alt="{{ $product->name }}" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text text-success fw-bold">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                        <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary btn-sm w-100">Detail Produk</a>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="" class="card-img-top" alt="" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text text-success fw-bold">Rp </p>
                        <a href="" class="btn btn-primary btn-sm w-100">Detail Produk</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="" class="card-img-top" alt="" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text text-success fw-bold">Rp </p>
                        <a href="" class="btn btn-primary btn-sm w-100">Detail Produk</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="" class="card-img-top" alt="" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text text-success fw-bold">Rp </p>
                        <a href="" class="btn btn-primary btn-sm w-100">Detail Produk</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="" class="card-img-top" alt="" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text text-success fw-bold">Rp </p>
                        <a href="" class="btn btn-primary btn-sm w-100">Detail Produk</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="" class="card-img-top" alt="" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text text-success fw-bold">Rp </p>
                        <a href="" class="btn btn-primary btn-sm w-100">Detail Produk</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="" class="card-img-top" alt="" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text text-success fw-bold">Rp </p>
                        <a href="" class="btn btn-primary btn-sm w-100">Detail Produk</a>
                    </div>
                </div>
            </div><div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="" class="card-img-top" alt="" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text text-success fw-bold">Rp </p>
                        <a href="" class="btn btn-primary btn-sm w-100">Detail Produk</a>
                    </div>
                </div>
            </div><div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="" class="card-img-top" alt="" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text text-success fw-bold">Rp </p>
                        <a href="" class="btn btn-primary btn-sm w-100">Detail Produk</a>
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection

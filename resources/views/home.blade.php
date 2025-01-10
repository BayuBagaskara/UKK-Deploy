@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        </div>
    </div>
    <div class="d-flex justify-content-between align-items-center p-3">
    <h1>Dashboard</h1>
    <form action="{{ route('logout') }}" method="POST" style="display: inline;">
        @csrf
        <button type="submit" class="btn btn-danger">Logout</button>
    </form>
</div>
<div class="container-fluid">
        <div class="row">
            <!-- Main Content -->
            <div class="col-md-9">
            <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-info mx-3" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
                <div class="p-3">
                    <h3>Overview</h3>
                    <p>
                        This dashboard provides an overview of your account and activity. Use the sidebar to browse different categories or start shopping now!
                    </p>
                    <div class="bg-light p-4 rounded shadow-sm">
                        <h5 class="fw-bold">Quick Tips:</h5>
                        <ul>
                            <li>Check out our latest collections in the <strong>Fashion</strong> section.</li>
                            <li>Don’t miss the best deals on <strong>Electronics</strong> this week.</li>
                            <li>New arrivals in <strong>Books</strong> to keep you inspired!</li>
                        </ul>
                        <p class="text-muted">Happy shopping with <strong><span class="text-danger">INDO</span> MART</strong>!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

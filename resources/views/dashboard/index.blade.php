@extends('dashboard.layouts.main')

@section('main')

<!-- Table Start -->
<div class="container-fluid pt-4 px-4">
    <div class="col-12">
        <div class="bg-secondary rounded h-100 p-4">
            <h1 class="mb-4">Welcome Back, {{ auth()->user()->name }}</h1>
        </div>
    </div>
</div>
<!-- Table End -->

@endsection
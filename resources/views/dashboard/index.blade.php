@extends('layouts.app')
@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <h3 class="p-2 text-primary-emphasis bg-primary-subtle border border-primary-subtle">
            Selamat Datang, {{ Auth::user()->name }}.</h3>
    </div>

@endsection
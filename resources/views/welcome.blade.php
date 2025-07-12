{{-- reference: https://laravel.com/docs/12.x/blade#layouts-using-template-inheritance --}}
@extends('layout.default')

@section('title', 'Welcome')

@section('content')
    <p class="text-teal-600">Welcome to {{ config('app.name', 'Laravel') }}!</p>
    <livewire:guest-name />
@endsection

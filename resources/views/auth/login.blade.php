@extends('layout.base')

@section('content')
    <div class="flex h-full">
        <div class="banner w-1/2 bg-blue-800"></div>
        <div class="login-container flex align-center w-1/2">
            <div class="flex items-center w-100 p-8">
                <form method="POST" action="{{ route('authenticate') }}" class="flex flex-col gap-2 w-full">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password">
                    </div>
                    <button type="submit" class="btn-default mt-4">Login</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.auth')
@section('title', 'Login')
@section('content')
    <div class="col-xl-4 col-lg-5 col-md-6 col-sm-8 p-3">
        <form action="" method="POST" class="border rounded-3 my-bg-dark p-4" >
            <h5 class="text-white text-center bg-light bg-opacity-50 rounded-1 pb-2 pt-1">Login</h5>
            <div class="border-top mb-2 mt-3 mx-1"></div>
            @csrf
            <label for="email" class="label">Email</label>
            <x-input type="text" placeholder="Email@..." id="email" class="mb-3"/>

            <label for="password" class="label">Password</label>
            <x-input type="text" placeholder="Password-****" id="password"/>

            <div class="border-top my-3 mx-1"></div>

            <div class="d-flex align-items-center w-100 mt-3">
                <div class="border-top mx-3 w-100"></div>
                <button class="btn btn-light px-4 rounded-5">Enter</button>
                <div class="border-top mx-3 w-100"></div>
            </div>


        </form>

    </div>
@endsection

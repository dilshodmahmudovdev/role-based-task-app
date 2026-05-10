@extends('layouts.app')
@section('title', 'Home')
@section('content')
    <div class="row">
        <div class="col-12">
            <h5 class="text-white mt-2">Home</h5>
            <div class="border-top border-secondary mt-2"></div>
        </div>

        <div class="col-xl-4 mt-3">
            <div class="border border-secondary rounded-3 p-2 text-white text-center">
                <h5>Completed Tasks</h5>
                <h2>20</h2>
            </div>
        </div>
        <div class="col-xl-4 mt-3">
            <div class="border border-secondary rounded-3 p-2 text-white text-center">
                <h5>Not Completed Tasks</h5>
                <h2>30</h2>
            </div>
        </div>
    </div>

@endsection

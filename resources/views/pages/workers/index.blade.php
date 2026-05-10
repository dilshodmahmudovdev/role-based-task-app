@extends('layouts.app')
@section('title', 'Workers')
@section('content')
    <div class="row">
        <div class="col-12">
            <h5 class="text-white mt-2">
                Workers
            </h5>
            <div class="border-top border-secondary mt-2"></div>

            <table class="table table-striped table-dark">
                <thead>
                <tr>
                    <th>№</th>
                    <th>Name</th>
                    <th>status</th>
                    <th>Other</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>John Doe</td>
                    <td>
                        <x-status content="Worker"/>
                    </td>
                    <td>
                        <div class="d-flex gap-2">
                            <button class="btn btn-primary btn-sm">See tasks</button>
                            <button class="btn btn-secondary btn-sm">Edit</button>
                            <button class="btn btn-danger btn-sm">Fire</button>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection

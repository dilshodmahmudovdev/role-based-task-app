@extends('layouts.app')
@section('title', 'Tasks')
@section('content')
    <div class="row">
        <div class="col">

            <h5 class="text-white mt-2">
                Tasks
            </h5>
            <div class="border-top border-secondary mt-2"></div>

            <table class="table table-striped table-dark">
                <thead>
                <tr>
                    <th>№</th>
                    <th>Task</th>
                    <th>status</th>
                    <th>Other</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td></td>
                    <td>Picking up</td>
                    <td>
                        <x-status type="success" content="Done"/>
                    </td>
                    <td>
                        <div class="d-flex gap-2">
                            <button class="btn btn-primary btn-sm">See full Info</button>
                            <button class="btn btn-secondary btn-sm">Edit</button>
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>Picking up</td>
                    <td>
                        <x-status type="danger" content="No Done"/>
                    </td>
                    <td>
                        <div class="d-flex gap-2">
                            <button class="btn btn-primary btn-sm">See full Info</button>
                            <button class="btn btn-secondary btn-sm">Edit</button>
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>Picking up</td>
                    <td>
                        <x-status type="warning" content="Pending"/>
                    </td>
                    <td>
                        <div class="d-flex gap-2">
                            <button class="btn btn-primary btn-sm">See full Info</button>
                            <button class="btn btn-secondary btn-sm">Edit</button>
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>Picking up</td>
                    <td>
                        <x-status content="Worker"/>
                    </td>
                    <td>
                        <div class="d-flex gap-2">
                            <button class="btn btn-primary btn-sm">See full Info</button>
                            <button class="btn btn-secondary btn-sm">Edit</button>
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection

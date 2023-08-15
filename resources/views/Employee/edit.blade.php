@extends('app')
@section('content')

<head>
    <title>edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <main class="login-form">
        <div class="container my-3">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div style="text-align:left">
                        <div style="margin-bottom: 1em;">
                            <a href="{{ route('employees.index') }}"><button type="submit" class="btn btn-dark text-light">Employee List</button></a>

                            <div class="my-3 shadow  mb-5 bg-body-tertiary rounded">

                                <h1 class="card-header bg-dark text-center text-light">Edit Employee</h1>
                                <div class="card-body p-4">
                                    @if(session('message'))
                                    <div style="color: green;">{{ session('message') }}</div>
                                    @endif
                                    <form action="{{ route('employees.edit', $employee) }}" method="post">
                                        @csrf
                                        <div style="margin-bottom: 20px;">
                                            <div style="padding-top: 20px">
                                                <label for="Name">Name</label>
                                                <input type="text" name="Name" id="Name" placeholder="Enter employee" value="{{ $employee->Name}}" class="form-control">
                                                @error('name')
                                                <div style="color: red;">{{ $message}}</div>
                                                @enderror
                                            </div>
                                            <div style="margin-bottom: 20px;">
                                                <div style="padding-top: 20px">
                                                    <label for="LastName">LastName</label>
                                                    <input type="text" name="LastName" id="LastName" placeholder="Enter LastName" class="form-control">
                                                    @error('LastName')
                                                    <div style="color: red;">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div style="margin-bottom: 20px;">
                                                    <div style="padding-top: 20px">
                                                        <label for="Cargo">Cargo</label>
                                                        <input type="text" name="Cargo" id="Cargo" placeholder="Enter Cargo" class="form-control">

                                                        @error('Cargo')
                                                        <div style="color: red;">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div style="margin-bottom: 20px;">
                                                        <div style="padding-top: 20px">
                                                            <label for="Pago">Pago</label>
                                                            <input type="text" name="Pago" id="Pago" placeholder="Enter Pago" class="form-control">

                                                            @error('Pago')
                                                            <div style="color: red;">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div style="margin-left: 80px">
                                                                <div style="margin-bottom: 5px">
                                                                    <div style="padding-top: 25px">
                                                                        <div class="d-grid mx-auto">
                                                                            <div class="col-md-9">
                                                                                <div class="card">
                                                                                    <button type="submit" class="btn btn-dark btn-block">Submit</button>
                                                                                </div>
                                    </form>
                                    @endsection

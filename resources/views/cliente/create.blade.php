@extends('app')
@section('content')

<head>
    <title>create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<div style="margin-left: 35.4%; ">
    <a href="{{ route('clientes.index') }}"> <button type="submit" class="btn btn-dark text-left">Cliente List</button></a>
</div>

<body>
    <main class="login-form">
        <div class="container my-3">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="card">
                        <div style="text-align:left">
                            <div class="my-10 shadow  mb-10 bg-body-tertiary rounded">
                                <h1 class="card-header  text-center">Create Cliente</h1>
                                <div class="black-body p-4">
                                    @if(session('message'))
                                    <div style="color: gree;">{{ session('message') }}</div>
                                    @endif
                                    <form action="{{ route('clientes.create') }}" method="post">
                                        @csrf
                                        <div style="margin-bottom: 20px;">
                                            <div style="padding-top: 20px">
                                                <label for="name">Name</label>
                                                <input type="text" name="name" id="name" placeholder="Enter name" class="form-control">
                                                @error('name')
                                                <div style="color: red;">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div style="margin-bottom: 20px;">
                                            <div style="padding-top: 20px">
                                                <label for="lastname">lastname</label>
                                                <input type="text" name="lastname" id="lastname" placeholder="Enter lastname" class="form-control">
                                                @error('lastname')
                                                <div style="color: red;">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div style="margin-bottom: 20px;">
                                            <div style="padding-top: 20px">
                                                <label for="address">address</label>
                                                <input type="text" name="address" id="address" placeholder="Enter address" class="form-control">
                                                @error('address')
                                                <div style="color: red;">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div style="margin-bottom: 20px;">
                                            <div style="padding-top: 20px">
                                                <label for="phone">phone</label>
                                                <input type="text" name="phone" id="phone" placeholder="Enter phone" class="form-control">
                                                @error('phone')
                                                <div style="color: red;">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div style="margin-bottom: 20px;">
                                            <div style="padding-top: 20px">
                                                <label for="correo">correo</label>
                                                <input type="text" name="correo" id="correo" placeholder="Enter correo" class="form-control">
                                                @error('correo')
                                                <div style="color: red;">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div style="margin-left: 80px">
                                                    <div style="margin-bottom: 6px">
                                                    <div style="padding-top: 20px">
                                                        <div class="d-grid mx-auto">
                                                            <div class="col-md-9">
                                                                <div class="card">
                                                                    <button type="submit" class="btn btn-dark btn-block ">Submit</button>
                                                                </div>
                                    </form>
                                    @endsection

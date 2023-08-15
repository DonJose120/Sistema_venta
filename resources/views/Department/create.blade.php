@extends('app')
@section('content')

<head>
    <title>create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<div style="margin-left: 35.4%; ">

    <a href="{{ route('departments.index') }}"><button type="submit" class="btn btn-dark ">Department List</button></a>
</div>

<body>
    <main class="login-form">
        <div class="container my-3">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="card">
                        <div style="text-align:left">
                            <div class="my-10 shadow  mb-10 bg-body-tertiary rounded">
                                <h1 class="card-header  text-center">Create Department</h1>
                                <div class="black-body p-4">
                                    @if(session('message'))
                                    <div style="color: gree;">{{ session('message') }}</div>
                                    @endif
                                    <form action="{{ route('departments.create') }}" method="post">
                                        @csrf
                                        <div style="margin-bottom: 20px;">
                                            <div style="padding-top: 20px">
                                                <label for="name">Name</label>
                                                <input type="text" name="name" id="name" placeholder="Enter department" class="form-control">
                                                @error('name')
                                                <div style="color: red;">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div style="margin-left: 80px">
                                                <div style="margin-bottom: 20px">
                                                    <div style="padding-top: 20px">
                                                        <div class="d-grid mx-auto">
                                                            <div class="col-md-9">
                                                                <div class="card">
                                                                    <button type="submit" class="btn btn-dark btn-block ">Submit</button>
                                                                </div>
                                    </form>
                                    @endsection

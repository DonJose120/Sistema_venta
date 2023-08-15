@extends('app')
@section('content')
<head>
    <title>create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<div style="margin-left: 35.4%; ">

    <a href="{{ route('cities.index') }}"> <button type="submit" class="btn btn-dark ">City List</a></button>
</div>

<body>
    <main class="login-form">
        <div class="container my-3">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="card">
                        <div style="text-align:left">


                            <div class="my-10 shadow  mb-10 bg-body-tertiary rounded">
                                <h1 class="card-header  text-center">Create City</h1>
                                <div class="black-body p-4">
                                    @if(session('message'))
                                    <div style="color: green;">{{ session('message') }}</div>
                                    @endif

                                    <form action="{{ route('cities.create') }}" method="post">
                                        @csrf
                                        <div style="margin-bottom: 20px;">
                                            <div style="padding-top: 20px">
                                                <label for="name">Name</label>
                                                <input type="text" name="name" id="name" placeholde="Enter Department" value="{{ old('name') }}" class="form-control">
                                                @error('name')
                                                <div style="color: red;">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div style="margin-bottom: 20px;">
                                                <div style="padding-top: 20px">
                                                    <label for="department_id">Department</label>
                                                    <select name="department_id" id="department_id">
                                                        <option value=""> Select</option>
                                                        @foreach($departments as $department)
                                                        <option @if ($department->id === (int)old('department_id'))
                                                            selected
                                                            @endif
                                                            value="{{ $department->id }}">{{ $department->name }}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('department_id')
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
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                    </form>
                                    @endsection

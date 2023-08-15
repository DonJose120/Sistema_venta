@extends('app')
@section('content')

<head>
    <title>create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<div style="margin-left: 35.4%; ">

    <a href="{{ route('facturas.index') }}"> <button type="submit" class="btn btn-dark ">Factura List</button></a>
</div>

<body>
    <main class="login-form">
        <div class="container my-3">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="card">
                        <div style="text-align:left">


                            <div class="my-10 shadow  mb-10 bg-body-tertiary rounded">
                                <h1 class="card-header  text-center">Create Factura</h1>
                                <div class="black-body p-4">
                                    @if(session('message'))
                                    <div style="color: green;">{{ session('message') }}</div>
                                    @endif

                                    <form action="{{ route('facturas.create') }}" method="post">
                                        @csrf
                                        <div style="margin-bottom: 20px;">
                                            <div style="padding-top: 20px">
                                                <label for="fecha">fecha</label>
                                                <input type="text" name="fecha" id="fecha" placeholde="Enter fecha" value="{{ old('fecha') }}" class="form-control">
                                                @error('fecha')
                                                <div style="color: red;">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div style="margin-bottom: 20px;">
                                                <div style="padding-top: 20px">
                                                    <label for="total">total</label>
                                                    <input type="text" name="total" id="total" placeholde="Enter total" value="{{ old('total') }}" class="form-control">
                                                    @error('total')
                                                    <div style="...">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <div style="margin-bottom: 20px;">
                                                    <div style="padding-top: 20px">
                                                        <label for="cliente_id">Cliente</label>
                                                        <select name="cliente_id" id="cliente_id">
                                                            <option value="">Select</option>
                                                            @foreach($clientes as $cliente)
                                                            <option @if ($cliente->id === (int)old('cliente_id'))
                                                                selected
                                                                @endif
                                                                value="{{ $cliente->id }}">{{ $cliente->name }}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('cliente_id')
                                                        <div style="color: red;">{{ $message }}</div>
                                                        @enderror
                                                    </div>

                                                    <div style="margin-bottom: 20px;">
                                                        <div style="padding-top: 20px">
                                                            <label for="employee_id">Employee</label>
                                                            <select name="employee_id" id="employee_id">
                                                                <option value="">Select</option>
                                                                @foreach($employees as $employee)
                                                                <option @if ($employee->id === (int)old('employee_id'))
                                                                    selected
                                                                    @endif
                                                                    value="{{ $employee->id }}">{{ $employee->Name }}</option>
                                                                @endforeach
                                                            </select>
                                                            @error('employee_id')
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

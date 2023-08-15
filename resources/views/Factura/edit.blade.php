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
                            <a href="{{ route('facturas.index') }}"><button type="submit" class="btn btn-dark text-light">Factura List</button></a>
                            <div class="my-3 shadow  mb-5 bg-body-tertiary rounded">

                                <h1 class="card-header bg-dark text-center text-light">Edit Factura</h1>
                                <div class="card-body p-4">
                                    @if(session('message'))
                                    <div style="color: green;">{{ session('message') }}</div>
                                    @endif

                                    <form action="{{ route('facturas.edit', $factura) }}" method="get">
                                        @csrf
                                        <div style="margin-bottom: 20px;">
                                            <div style="padding-top: 20px">
                                                <label for="fecha">fecha</label>
                                                <input type="text" name="fecha" id="fecha" placeholde="Enter factura" value="{{ $factura->fecha }}" class="form-control">
                                                @error('fecha')
                                                <div style="color: red;">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div style="margin-bottom: 20px;">
                                                <div style="padding-top: 20px">
                                                    <label for="total">total</label>
                                                    <input type="text" name="total" id="total" placeholde="Enter total" value="{{ $factura->total }}" class="form-control">
                                                    @error('total')
                                                    <div style="color: red;">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <div style="margin-bottom: 20px;">
                                                    <div style="padding-top: 20px">
                                                        <label for="cliente_id">Cliente</label>
                                                        <select name="cliente_id" id="cliente_id">
                                                            <option value="">Select</option>
                                                            @foreach($clientes as $cliente)
                                                            <option @if ($cliente->id === (int) $factura->cliente_id)
                                                                selected
                                                                @endif
                                                                value="{{ $cliente->id }}">{{ $cliente->name}}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('cliente_id')
                                                        <div style="color: red;">{{ $message }}</div>
                                                        @enderror
                                                    </div>

                                                    <div style="margin-bottom: 1em;">
                                                        <label for="employee_id">Employee</label>
                                                        <select name="employee_id"  id="employee_id">
                                                            <option value="">Select</option>
                                                            @foreach($employees as $employee)
                                                            <option @if ($employee->id === (int) $factura->employee_id)
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
                                                        <div style="margin-bottom: 5px">
                                                            <div style="padding-top: 25px">
                                                                <div class="d-grid mx-auto">
                                                                    <div class="col-md-9">
                                                                        <div class="card">
                                                                            <button type="submit" class="btn btn-dark btn-block">Submit</button>
                                                                        </div>

                                    </form>
                                    @endsection

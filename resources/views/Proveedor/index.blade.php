@extends('app')
@section('content')
</html>
<head>
    <title>edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <main class="login-form">
        <div class="container my-4">
            <div class="row justify-content-center">
                <div class="col-md-9">
                    <div style="text-align:left">
                    <div class="my-10 shadow  mb-10 bg-body-tertiary rounded">

<div><a href="/"> <button type="submit" class="btn btn-dark btn-blocktext-light" style="margin-bottom:10px;">Home</button></a></div>
<a href="{{ route('proveedors.create') }}"><button type="submit" class="btn btn-dark btn-block text-light" style="padding: 7px 20px;">New Proveedor</button></a>

@if(session('message'))
<div style="color: green;">{{ session('message') }}</div>
@endif
<table eellpadding="10" eellspacing="1" border="1">
<thead>
<tr>
<td>No.</td>
<td>Name</td>
<td>lastname</td>
<td>address</td>
<td>phone</td>
<td>correo</td>
<td>Timestamp</td>
<td>City</td>
<td>Action</td>
</tr>
</thead>
<tbody>
@forelse($proveedors as $key => $proveedor)
<tr>
<td>{{ $proveedors->firstItem() + $key }}.</td>
<td>{{ $proveedor->name }}</td>
<td>{{ $proveedor->lastname }}</td>
<td>{{ $proveedor->address }}</td>
<td>{{ $proveedor->phone }}</td>
<td>{{ $proveedor->correo }}</td>
<td>{{ $proveedor->created_at->format('F d, Y') }}</td>
<td>
{{ $proveedor->city->name }}
</td>
<td>
<a href="{{ route('proveedors.edit', $proveedor) }}">Edit</a>
<form action="{{ route('proveedors.delete', $proveedor) }}" method="post">
@csrf
<button type="submit">Delete</button>
</form>
</td>
</tr>
@empty
<tr>
<td colspan="5">No data found in table</td>
</tr>
@endforelse
</tbody>

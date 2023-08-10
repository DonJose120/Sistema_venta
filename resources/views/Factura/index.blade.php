<div><a href="/">Home</a></div>
<a href="{{ route('facturas.create') }}">New Factura</a>

@if(session('message'))
<div style="color: green;">{{ session('message') }}</div>
@endif
<table eellpadding="10" eellspacing="1" border="1">
<thead>
<tr>
<td>No.</td>
<td>fecha</td>
<td>total</td>
<td>Cliente</td>
<td>Employee</td>
<td>Action</td>
</tr>
</thead>
<tbody>
@forelse($facturas as $key => $factura)
<tr>
<td>{{ $facturas->firstItem() + $key }}.</td>
<td>{{ $factura->fecha }}</td>
<td>{{ $factura->total }}</td>
<td>
{{ $factura->cliente->name }}
{{ $factura->employee->Name }}
</td>
<td>

<a href="{{ route('facturas.edit', $factura) }}">Edit</a>
<form action="{{ route('facturas.delete', $factura) }}" method="post">
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

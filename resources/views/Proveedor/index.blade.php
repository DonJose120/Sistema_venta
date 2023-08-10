<div><a href="/">Home</a></div>
<a href="{{ route('proveedors.create') }}">New Proveedor</a>

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

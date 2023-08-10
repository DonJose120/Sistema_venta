<div><a href="/">Home</a></div>
<a href="{{ route('clientes.create') }}">New Cliente</a>

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
@forelse($clientes as $key => $cliente)
<tr>
<td>{{ $clientes->firstItem() + $key }}.</td>
<td>{{ $cliente->name }}</td>
<td>{{ $cliente->lastname }}</td>
<td>{{ $cliente->address }}</td>
<td>{{ $cliente->address }}</td>
<td>{{ $cliente->correo }}</td>
<td>{{ $cliente->created_at->format('F d, Y') }}</td>
<td>
<a href="{{ route('clientes.edit', $cliente) }}">Edit</a>

<form Action="{{ route('clientes.delete', $cliente) }}" method="post"
@csrf
<button type="submit">Delete</button>
</form>
</td>
</tr>
@empty
<tr>
<td colspan="5">No data found in table </td>
</tr>
@endforelse
</tbody>
</table>

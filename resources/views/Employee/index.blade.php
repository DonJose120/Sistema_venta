<div><a href="/">Home</a></div>
<a href="{{ route('employees.create') }}">New Employee</a>

@if(session('message'))
<div style="color: green;">{{ session('message') }}</div>
@endif
<table eellpadding="10" eellspacing="1" border="1">
<thead>
<tr>
<td>No.</td>
<td>Name</td>
<td>LastName</td>
<td>Pago</td>
</tr>
</thead>
<tbody>
@forelse($employees as $key => $Employee)
<tr>
<td>{{ $employees->firstItem() + $key }}.</td>
<td>{{ $employee->Name }}</td>
<td>{{ $employee->LastName }}</td>
<td>{{ $employee->Cargo }}</td>
<td>{{ $employee->Pago }}</td>
<td>
<a href="{{ route('employees.edit', $employee) }}">Edit</a>

<form Action="{{ route('employees.delete', $employee) }}" method="post"
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

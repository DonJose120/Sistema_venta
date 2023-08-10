<div style="margin-bottom: 1em;">
<a href="{{ route('facturas.index') }}">Factura List</a>
</div>

<h1>Create Factura</h1>

@if(session('message'))
<div style="color: green;">{{ session('message') }}</div>
@endif

<form action="{{ route('facturas.create') }}" method="post">
@csrf
<div style="margin-bottom: 1em;">
<label for="fecha">fecha</label>
<input type="text" name="fecha" id="fecha" placeholde="Enter fecha" value="{{ old('fecha') }}">
@error('fecha')
<div style="color: red;">{{ $message }}</div>
@enderror
</div>
<div style="margin-bottom: 1em;">
<label for="total">total</label>
<input type="text" name="total" id="total" placeholde="Enter total" value="{{ old('total') }}">
@error('total')
<div style="...">{{ $message }}</div>
@enderror
</div>

<div style="margin-bottom: 1em;">
<label for="cliente_id">Cliente</label>
<select name="cliente_id" id="cliente_id">
<option value="">Select</option>
@foreach($clientes as $cliente)
<option
@if ($cliente->id === (int)old('cliente_id'))
selected
@endif
value="{{ $cliente->id }}">{{ $cliente->name }}</option>
@endforeach
</select>
@error('cliente_id')
<div style="color: red;">{{ $message }}</div>
@enderror
</div>

<div style="margin-bottom: 1em;">
<label for="employee_id">Employee</label>
<select name="employee_id" id="employee_id">
<option value="">Select</option>
@foreach($employees as $employee)
<option
@if ($employee->id === (int)old('employee_id'))
selected
@endif
value="{{ $employee->id }}">{{ $employee->Name }}</option>
@endforeach
</select>
@error('employee_id')
<div style="color: red;">{{ $message }}</div>
@enderror
</div>

<div>
<button type="submit">Submit</button>
</div>
</form>

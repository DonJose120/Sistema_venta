<div style="margin-bottom: 1em;">
<a href="{{ route('employees.index') }}">Employee List</a>
</div>

<h1>Edit Employee</h1>
@if(session('message'))
<div style="color: green;">{{ session('message') }}</div>
@endif
<form action="{{ route('employees.edit', $employee) }}" method="post">
@csrf
<div style="margin-bottom: 1em;">
<label for="Name">Name</label>
<input type="text" name="Name" id="Name" placeholder="Enter employee" value="{{ $employee->Name}}">
@error('name')
<div style="color: red;">{{ $message}}</div>
@enderror
</div>
<div style="margin-bottom: 1em;">
<label for="LastName">LastName</label>
<input type="text" name="LastName" id="LastName" placeholder="Enter LastName">
<div style="color: red;">{{ $message }}</div>
@enderror
</div>
<div style="margin-bottom: 1em;">
<label for="Cargo">Cargo</label>
<input type="text" name="Cargo" id="Cargo" placeholder="Enter Cargo">
<div style="color: red;">{{ $message }}</div>
@enderror
</div>
<div style="margin-bottom: 1em;">
<label for="Pago">Pago</label>
<input type="text" name="Pago" id="Pago" placeholder="Enter Pago">
<div style="color: red;">{{ $message }}</div>
@enderror
</div>
<div>
<button type="submit">Submit</button>
</div>
</form>

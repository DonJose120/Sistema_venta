<div style="margin-bottom: 1em;">
<a href="{{ route('employees.index') }}">Employee List</a>
</div>

<h1>Create Employee</h1>
@if(session('message'))
<div style="color: gree;">{{ session('message') }}</div>
@endif
<form action="{{ route('employees.create') }}" method="post">
@csrf
<div style="margint-bottom: 1em;">
<label for="name">Name</label>
<input type="text" name="name" id="name" placeholder="Enter Employee">
@error('name')
<div style="color: red;">{{ $message }}</div>
@enderror
</div>
<div style="margint-bottom: 1em;">
<label for="LastName">LastName</label>
<input type="text" name="LasName" id="LasName" placeholder="Enter Employee">
@error('LasName')
<div style="color: red;">{{ $message }}</div>
@enderror
</div>
</div>
<div style="margint-bottom: 1em;">
<label for="Cargo">Cargo</label>
<input type="text" name="Cargo" id="Cargo" placeholder="Enter Employee">
@error('Cargo')
<div style="color: red;">{{ $message }}</div>
@enderror
</div>
</div>
</div>
<div style="margint-bottom: 1em;">
<label for="Pago">Pago</label>
<input type="text" name="Pago" id="Pago" placeholder="Enter Employee">
@error('Pago')
<div style="color: red;">{{ $message }}</div>
@enderror
</div>
<div>
<button type="submit">Registra</button>
</div>
</form>

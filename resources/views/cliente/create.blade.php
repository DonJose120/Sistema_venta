<div style="margin-bottom: 1em;">
<a href="{{ route('clientes.index') }}">Cliente List</a>
</div>

<h1>Create Cliente</h1>
@if(session('message'))
<div style="color: gree;">{{ session('message') }}</div>
@endif
<form action="{{ route('clientes.create') }}" method="post">
@csrf
<div style="margint-bottom: 1em;">
<label for="name">Name</label>
<input type="text" name="name" id="name" placeholder="Enter name">
@error('name')
<div style="color: red;">{{ $message }}</div>
@enderror
</div>
<div style="margin-bottom:: 1em;">
<label for="lastname">lastname</label>
<input type="text" name="lastname" id="lastname" placeholder="Enter lastname">
@error('lastname')
<div style="color: red;">{{ $message }}</div>
@enderror
</div>
<div style="margin-bottom:: 1em;">
<label for="address">address</label>
<input type="text" name="address" id="address" placeholder="Enter address">
@error('address')
<div style="color: red;">{{ $message }}</div>
@enderror
</div>
<div style="margin-bottom:: 1em;">
<label for="phone">phone</label>
<input type="text" name="phone" id="phone" placeholder="Enter phone">
@error('phone')
<div style="color: red;">{{ $message }}</div>
@enderror
</div>
<div style="margin-bottom:: 1em;">
<label for="correo">correo</label>
<input type="text" name="correo" id="correo" placeholder="Enter correo">
@error('correo')
<div style="color: red;">{{ $message }}</div>
@enderror
</div>
<div>
<button type="submit">Submit</button>
</div>
</form>

<div style="margin-bottom: 1em;">
<a href="{{ route('clientes.index') }}">Cliente List</a>
</div>

<h1>Edit Cliente</h1>
@if(session('message'))
<div style="color: green;">{{ session('message') }}</div>
@endif
<form action="{{ route('clientes.edit', $cliente) }}" method="post">
@csrf
<div style="margin-bottom: 1em;">
<label for="name">Name</label>
<input type="text" name="name" id="name" placeholder="Enter cliente" value="{{ $cliente->name}}">
@error('name')
<div style="color: red;">{{ $message}}</div>
@enderror
</div>
<div style="margin-bottom: 1em;">
<label for="lastname">lastname</label>
<input type="text" name="lastname" id="lastname" placeholder="Enter lastname"
value="{{ $cliente->lastname }}">
@error('lastname')
<div style="color: red;">{{ $message }}</div>
@enderror
</div>
<div style="margin-bottom: 1em;">
<label for="address">address</label>
<input type="text" name="address" id="address" placeholder="Enter cliente" value="{{ $cliente->address}}">
@error('address')
<div style="color: red;">{{ $message}}</div>
@enderror
</div>
<div style="margin-bottom: 1em;">
<label for="phone">phone</label>
<input type="text" name="phone" id="phone" placeholder="Enter cliente" value="{{ $cliente->phone}}">
@error('phone')
<div style="color: red;">{{ $message}}</div>
@enderror
</div>
<div style="margin-bottom: 1em;">
<label for="correo">correo</label>
<input type="text" name="correo" id="correo" placeholder="Enter cliente" value="{{ $cliente->correo}}">
@error('correo')
<div style="color: red;">{{ $message}}</div>
@enderror
</div>
<div>
<button type="submit">Submit</button>
</div>
</form>

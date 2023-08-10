<div style="margim-bottom: 1em;">
<a href="{{ route('proveedors.index') }}">Proveedor List</a>
</div>
<h1>Edit Proveedor</h1>
@if(session('message'))
<div style="color: green;">{{ session('message') }}</div>
@endif

<form action="{{ route('proveedors.edit', $Proveedor) }}" method="post">
@csrf
<div style="margin-bottom: 1em;">
<label for="name">Name</label>
<input type="text" name="name" id="name" placeholde="Enter city" value="{{ $proveedor->name }}">
@error('name')
<div style="color: red;">{{ $message }}</div>
@enderror
</div>
<div style="margin-bottom: 1em;">
<label for="lastname">lastname</label>
<input type="text" name="lastname" id="lastname" placeholde="Enter lastname" value="{{ $proveedor->lastname }}">
@error('lastname')
<div style="color: red;">{{ $message }}</div>
@enderror
</div>
<div style="margin-bottom: 1em;">
<label for="address">address</label>
<input type="text" name="address" id="address" placeholde="Enter address" value="{{ $proveedor->address }}">
@error('address')
<div style="color: red;">{{ $message }}</div>
@enderror
</div>
<div style="margin-bottom: 1em;">
<label for="phone">phone</label>
<input type="text" name="phone" id="phone" placeholde="Enter phone" value="{{ $proveedor->phone }}">
@error('phone')
<div style="color: red;">{{ $message }}</div>
@enderror
</div>
<div style="margin-bottom: 1em;">
<label for="correo">correo</label>
<input type="text" name="correo" id="correo" placeholde="Enter correo" value="{{ $proveedor->correo }}">
@error('correo')
<div style="color: red;">{{ $message }}</div>
@enderror
</div>
<div style="margin-bottom: 1em;">
<label for="city_id">City</label>
<select name="city_id" id="city_id">
<option value="">Select</option>
@foreach($cities as $city)
<option
@if ($city->id === (int) $Proveedor->city_id)
selected
@endif
value="{{ $city->id }}">{{ $city->name}}</option>
@endforeach
</select>
@error('city')
<div style="color: red;">{{ $message }}</div>
@enderror
</div>
<div>
<button type="submit">Submit</button>
</div>
</form>

<div style="margin-bottom: 1em;">
<a href="{{ route('products.index') }}">Product List</a>
</div>

<h1>Create Product</h1>

@if(session('message'))
<div style="color: green;">{{ session('message') }}</div>
@endif

<form action="{{ route('products.create') }}" method="post">
@csrf
<div style="margin-bottom: 1em;">
<label for="name">name</label>
<input type="text" name="name" id="name" placeholde="Enter category" value="{{ old('name') }}">
@error('name')
<div style="color: red;">{{ $message }}</div>
@enderror
</div>
<div style="margin-bottom: 1em;">
<label for="price">Price</label>
<input type="text" name="price" id="price" placeholde="Enter price" value="{{ old('price') }}">
@error('price')
<div style="...">{{ $message }}</div>
@enderror
</div>

<div style="margin-bottom: 1em;">
<label for="category_id">Category</label>
<select name="category_id" id="category_id">
<option value="">Select</option>
@foreach($categories as $category)
<option
@if ($category->id === (int)old('category_id'))
selected
@endif
value="{{ $category->id }}">{{ $category->name }}</option>
@endforeach
</select>
@error('category_id')
<div style="color: red;">{{ $message }}</div>
@enderror
</div>

<div style="margin-bottom: 1em;">
<label for="proveedor_id">Proveedor</label>
<select name="proveedor_id" id="proveedor_id">
<option value="">Select</option>
@foreach($proveedors as $proveedor)
<option
@if ($proveedor->id === (int)old('proveedor_id'))
selected
@endif
value="{{ $proveedor->id }}">{{ $proveedor->name }}</option>
@endforeach
</select>
@error('proveedor_id')
<div style="color: red;">{{ $message }}</div>
@enderror
</div>

<div>
<button type="submit">Submit</button>
</div>
</form>

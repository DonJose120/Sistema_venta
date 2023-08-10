<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{

    public function index()
    {
        return view('proveedor.index', [
            'proveedors' => Proveedor::paginate()
        ]);
    }

    public function create()
    {
         $cities = City::orderBy('name')->get();
        return view('proveedor.create', compact('cities'));
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'lastname' => 'required|max:255',
            'address' => 'required|max:255',
            'phone' => 'required|max:255',
            'correo' => 'required|max:255',
            'city_id' => 'required|integer',
        ]);
        Proveedor::create($data);
        return back()->with('message', 'Proveedor created successfully');
    }
    public function edit(Proveedor $proveedor)
    {
        $cities = City::orderBy('name')->get();
        return view('proveedor.create', compact('cities'));
    }
    public function update(Proveedor $proveedor, Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'lastname' => 'required|max:255',
            'address' => 'required|max:255',
            'phone' => 'required|max:255',
            'correo' => 'required|max:255',
            'city_id' => 'required|integer',
        ]);
        $proveedor->update($data);
        return back()->with('message', 'Proveedor update.');
    }
    public function destroy(Proveedor $proveedor)
    {
        $proveedor->delete();
        return back()->with('message', 'Proveedor deleted.');
    }

}

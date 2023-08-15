<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        return view('cliente.index', [
            'clientes' => Cliente::paginate()
        ]);
    }

    public function create()
    {
        return view('cliente.create');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'lastname' => 'required|max:255',
            'address' => 'required|max:255',
            'phone' => 'required|max:255',
            'correo' => 'required|max:255'
        ]);

        Cliente::create($data);

        return back()->with('message', 'Cliente created successfully');
    }
    public function edit(Cliente $cliente)
    {
        return view('cliente.edit', compact('cliente'));
    }
    public function update(Cliente $cliente, Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'lastname' => 'required|max:255',
            'address' => 'required|max:255',
            'phone' => 'required|max:255',
            'correo' => 'required|max:255'
        ]);
        $cliente->update($data);
        return back()->with('message', 'Cliente update.');
    }
    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return back()->with('message', 'Cliente deleted.');
    }
}



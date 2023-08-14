<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Employee;
use App\Models\Factura;
use Illuminate\Http\Request;

class FacturaController extends Controller
{
    public function index()
    {
        return view('factura.index', [
            'facturas' => Factura::paginate()
        ]);

    }
    public function create()
    {
        $clientes = Cliente::orderBy('name')->get();
        $employees = Employee::orderBy('Name')->get();
        return view('factura.create', compact('clientes', 'employees'));

    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'fecha' => 'required|date',
            'total' => 'required|regex:/^\d{1,13}(\.\d{1,4})?$/|gt:0',
            'cliente_id' => 'required|integer',
            'employee_id' => 'required|integer'

        ]);

        Factura::create($data);
        return back()->with('message', 'Factura created successfully');
    }
    public function edit(Factura $factura)
    {
        $clientes = Cliente::orderBy('name')->get();
        $employees = Employee::orderBy('Name')->get();
        return view('facturas.create', compact('clientes', 'employees'));
    }
    public function update(Factura $factura, Request $request)
    {
        $data = $request->validate([
            'fecha' => 'required|date',
            'total' => 'required|regex::/^\d{1,13}(\.\d{1,4})?$/|gt:0',
            'cliente_id' => 'required|integer',
            'employee_id' => 'required|integer'
        ]);

        $factura->update($data);
        return back()->with('message', 'Factura updated.');
    }
    public function destroy(Factura $factura)
    {
        $factura->delete();
        return back()->with('message','Factura deleted.');
    }
}

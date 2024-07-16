<?php

namespace App\Http\Controllers;

use App\Models\Customer;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //
    public function listar()
    {
        $customer = Customer::orderBy('id','desc')->get();
        return view('customer.listar', compact('customer'));

    }

    public function create(){
        return view('customer.create');
    }

    public function store( Request $request){
        $customer = new Customer();
        $customer->telefono = $request->telefono;
        $customer->num_social = $request->num_social;
        $customer->codigo = $request->codigo;
        $customer->domicilio = $request->domicilio;
        $customer->save();

        return redirect()->route('customer.listar');
    }

    public function show ($id)
    {
        $customer=Customer::find($id);
        return view('customer.show', compact('customer'));
    }

    public function destroy ( Customer $customer)
    {
        $customer->delete();
        return redirect()->route('customer.listar');
    }

    public function update(Request $request, Customer $customer)
    {
        $customer->telefono = $request->telefono;
        $customer->num_social = $request->num_social;
        $customer->codigo = $request->codigo;
        $customer->domicilio = $request->domicilio;
        $customer->save();
        $customer->save();

        return redirect()->route('customer.listar');
    }

    public function edit(Customer $customer)
    {
        return view('customer.edit', compact('customer'));
    }
}

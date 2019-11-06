<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class CustomerController extends Controller
{

    public function getAll()
    {
        if (Gate::allows('crud-user')){
        $customers = Customer::all();
        return view('customer.index', compact('customers'));
        }
        abort(403,"You do not have access to this site !!!");
    }


    public function create()
    {
        return view('customer.create');
    }

    public function store(Request $request)
    {
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->phone = $request->phone;
        $customer->address = $request->address;
        $customer->save();
        return redirect()->route('customers.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {

        $customer = Customer::findOrFail($id);
        return view('customer.edit', compact('customer'));
    }

    public function update(Request $request, $id)
    {
        $customer = Customer::findOrFail($id);
        $customer->name = $request->name;
        $customer->phone = $request->phone;
        $customer->address = $request->address;
        $customer->save();
        return redirect()->route('customers.index');
    }

    public function destroy($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();
        return redirect()->route('customers.index');

    }

    public function search(Request $request){
        $search = $request->get('search');
        $customers = Customer::where('name','LIKE',"%$search%")->get();
        return view('customer.index', compact('customers'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Supplier;
use Illuminate\Http\Request;
use App\Http\Requests\SupplierRequest;
use Session;

class SupplierController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $supp_list = Supplier::all();
        return view('supplier/index', compact('supp_list'));
    }

    public function create() {
        return view('supplier.create');
    }

    public function store(SupplierRequest $request) {
        Supplier::create($request->all());
        Session::flash('flash_message', 'Data supplier berhasil disimpan.');
        return redirect('supplier');
    }

    public function edit(Supplier $supplier) {
        return view('supplier.edit', compact('supplier'));
    }

    public function update(Supplier $supplier, SupplierRequest $request) {
        $input = $request->all();
        $supplier->update($input);
        Session::flash('flash_message', 'Data supplier berhasil diupdate.');
        return redirect('supplier');
    }

    public function destroy(Supplier $supplier) {
        $supplier->delete();
        Session::flash('flash_message', 'Data supplier berhasil dihapus.');
        Session::flash('penting', true);
        return redirect('supplier');
    }
}

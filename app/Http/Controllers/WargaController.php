<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use Illuminate\Http\Request;

class WargaController extends Controller
{
    public function index() {
        $warga = Warga::all();
        return view('warga.index', compact('warga'));
    }

    public function create() {
        return view('warga.create');
    }

    public function store(Request $request) {
        Warga::create($request->all());

        return redirect()->route('warga.page');
    }

    public function edit(string $id) {
        $warga = Warga::find($id);
        return view('warga.edit', compact('warga'));
    }

    public function update(Request $request, string $id) {
        $warga = Warga::find($id);
        $warga->update($request->all());

        return redirect()->route('warga.page');
    }
}

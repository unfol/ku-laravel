<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owner;

class OwnerController extends Controller
{
    public function create()
    {
        return view('owner.create');
    }

    public function store(Request $request)
    {
        $owner = Owner::create($request->all());
        return redirect()->route('owners.index');
    }

    public function index()
    {
        return view('owner.index', ['owners' => Owner::with('cars')->get()]);
    }

    public function delete($id)
    {
        $owner = Owner::find($id);
        $owner->delete();
        return redirect()->route('owners.index');
    }

    public function edit($id)
    {
        $owner = Owner::find($id);
        return view('owner.edit', compact('owner'));
    }

    public function update(Request $request, $id)
    {
        $owner = Owner::find($id);
        $owner->update($request->all());
        return redirect()->route('owners.index');
    }
}

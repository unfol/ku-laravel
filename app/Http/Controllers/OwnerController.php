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
        $owner = new Owner();

        $owner->name = $request->name;
        $owner->surname = $request->surname;
        $owner->phone = $request->phone;
        $owner->email = $request->email;
        $owner->address = $request->address;
        $owner->save();

        return redirect()->route('owners.index');
    }

    public function index()
    {
        $owners = Owner::all();
        return view('owner.index', compact('owners'));
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

        $owner->name = $request->name;
        $owner->surname = $request->surname;
        $owner->phone = $request->phone;
        $owner->email = $request->email;
        $owner->address = $request->address;
        $owner->save();

        return redirect()->route('owners.index');
    }
}

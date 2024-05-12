<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
// use App\Models\Role;
use Spatie\Permission\Models\Role;

class userController extends Controller
{
    //
    public function index()
    {
        $users = User::latest()->paginate(10);
        return view('admin.users.index', compact('users'));
    }

    public function show(User $user)
    {
        return view('admin.users.show', compact('user'));
    }

    public function create()
    {
        $roles = Role::all();
        return view('admin.users.create', compact('roles'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'email' => 'required',
            'prenom' => 'required',
            'password' => 'required',
            'adresse' => 'required',
            'dateNaissance' => 'required',
            'role_id' => 'required',
            'numTelephone' => 'required',
            'userable_type' => 'required',
            'userable_id' => 'required',
            'sexe' => 'required',
        ]);


        User::create($request->all());

        return redirect()->route('admin.users.index')
            ->with('success', 'User created successfully.');
    }

    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $user->update($request->all());

        return redirect()->route('admin.users.index')
            ->with('success', 'User updated successfully.');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('admin.users.index')
            ->with('success', 'User deleted successfully.');
    }

    public function restore($id)
    {
        $user = User::onlyTrashed()->findOrFail($id);

        $user->restore();

        return redirect()->route('admin.users.index')
            ->with('success', 'User restored successfully.');
    }

    public function permanentDelete($id)
    {
        $user = User::withTrashed()->findOrFail($id);

        $user->forceDelete();

        return redirect()->route('admin.users.index')
            ->with('success', 'User deleted permanently.');
    }


}

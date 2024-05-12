<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Spatie\Permission\Models\Role;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        $roles = Role::all();
        return view('auth.register', compact('roles'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        // dd($request->all());
        $request->validate([
            'nom' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'adresse' => ['required', 'string', 'max:255'],
            'dateNaissance' => ['required', 'date', 'max:255'],
            'numTelephone' => ['required', 'string', 'max:255'],
            'sexe' => ['required', 'string', 'max:255'],
            'role_id' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'nom' => '$request->nom',
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'prenom' => '$request->prenom',
            'adresse' => '$request->adresse',
            'dateNaissance' => now(),
            'numTelephone' => '$request->numTelephone',
            'sexe' => 'm',
            // 'role_id' => $request->role_id,

        ]);
        // il faut faire une relation entre user et role
        // $user->assignRole($request->role_id);
        // if($request->role_id == 1){
        //     $user->userable_type = 'App\Models\Partenaire';
        //     // $user->userable_id = 3;
        // }
        // $user->save();
            
        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}

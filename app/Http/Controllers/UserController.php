<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::with('roles')->paginate(10);
        return view('dashboard.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::all();
        return view('dashboard.users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'second_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'second_surname' => 'required|string|max:255',
            'gender' => 'required|in:male,female',
            'phone' => 'required|max:15',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
            'role' => 'required', 'exists:roles,name',
        ]);

        try {
        $user = User::create([
            'name' => $request->name,
            'second_name' => $request->second_name,
            'last_name' => $request->last_name,
            'second_surname' => $request->second_surname,
            'gender' => $request->gender,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => bcrypt($request->password),

        ]);

        $user->assignRole($request->role);


        return redirect()->route('admin.users.index')

            ->with('success', 'Usuario creado exitosamente');

    } catch (\Exception $e) {

        return back()

            ->withInput()

            ->with('error', 'No se pudo crear el usuario: ' . $e->getMessage());

    }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $roles = Role::all();
        return view('dashboard.users.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $validator = Validator::make($request->all(),[
            'name' => ['required|string|max:255'],
            'second_name' => ['required|string|max:255'],
            'last_name' => ['required|string|max:255'],
            'second_surname' => ['required|string|max:255'],
            'email' => ['required|email|unique:users,email,' . $user->id],
            'gender' => ['required|in:male,female'],
            'phone' => ['required|max:15'],
            'role' => ['required', 'exists:roles,name'],
        ]);

        try {

            // Actualizar datos del usuario
    
            $user->update([
                'name' => $request->name,
                'second_name' => $request->second_name,
                'last_name' => $request->last_name,
                'second_surname' => $request->second_surname,
                'email' => $request->email,
                'gender' => $request->gender,
                'phone' => $request->phone,
            ]);
    
    
            // Actualizar contraseña si se proporciona
    
            if ($request->filled('password')) {
    
                $user->password = Hash::make($request->password);
    
            }
    
    
            $user->save();
    
    
            // Sincronizar rol
    
            $user->syncRoles([$request->role]);
    
    
            return redirect()->route('admin.users.index')
    
                ->with('success', 'Usuario actualizado exitosamente');
    
        } catch (\Exception $e) {
    
            return back()
    
                ->withInput()
    
                ->with('error', 'No se pudo actualizar el usuario: ' . $e->getMessage());
    
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.users.index')->with('success', 'User deleted successfully.');

    }
}

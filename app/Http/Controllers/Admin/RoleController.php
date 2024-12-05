<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::all();
        return view('dashboard.administrador.roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.administrador.roles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validación de datos

        $request->validate([

            'name' => [
                'required', 
                'string', 
                'max:255', 
                'unique:roles,name'
            ]
        ]);
        try {
            // Crear el rol
            $role = Role::create([
                'name' => $request->name,
                'guard_name' => 'web' // Especificar el guard por defecto
            ]);
            // Redireccionar con mensaje de éxito
            return redirect()->route('admin.roles.index')
                ->with('success', 'Rol creado exitosamente');
        } catch (\Exception $e) {
            // Manejar cualquier error
            return back()
                ->withInput()
                ->with('error', 'No se pudo crear el rol: ' . $e->getMessage());

        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        return view('dashboard.administrador.roles.show', compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $role = Role::findOrFail($id);


        return view('dashboard.administrador.roles.edit', compact('role'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validación de datos

        $request->validate([
            'name' => [
                'required', 
                'string', 
                'max:255', 
                // Ignorar el rol actual al validar unicidad
                'unique:roles,name,' . $id
            ]

        ]);


        try {

            // Buscar el rol
            $role = Role::findOrFail($id);
            // Actualizar el rol

            $role->update([
                'name' => $request->name
            ]);


            // Redireccionar con mensaje de éxito

            return redirect()->route('admin.roles.index')

                ->with('success', 'Rol actualizado exitosamente');

        } catch (\Exception $e) {

            // Manejar cualquier error

            return back()

                ->withInput()

                ->with('error', 'No se pudo actualizar el rol: ' . $e->getMessage());

        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        $role->delete();
        return redirect()->route('admin.roles.index')->with('success', 'Rol eliminado exitosamente');
    }
}

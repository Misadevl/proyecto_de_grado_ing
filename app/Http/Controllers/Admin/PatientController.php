<?php

namespace App\Http\Controllers\Admin;
use App\Models\User;

use App\Models\Patient;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $patients = Patient::with('user')->paginate(10);
        return view('dashboard.administrador.pacientes_registro.index', compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = auth()->user(); // Usuario autenticado
        return view('dashboard.administrador.pacientes_registro.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, User $user)
    {
        $validated = $request->validate([
            'document_number' => 'nullable|string|max:255|unique:patients',
            'first_name' => 'required|string|max:255',
            'second_name' => 'nullable|string|max:255',
            'last_name' => 'required|string|max:255',
            'second_surname' => 'nullable|string|max:255',
            'gender' => 'required|in:male,female',
            'date_of_birth' => 'nullable|date',
            'email' => 'required|email|unique:patients',
            'phone' => 'required|string|max:255',
            'state_civil' => 'nullable|string|max:20',
            'emergency_contact' => 'nullable|string|max:255',
            'blood_group' => 'nullable|string|max:10',
            'additional_notes' => 'nullable|string',
        ]);
        
        $user = User::create([
            'name' => $request->first_name,
            'second_name' => $request->second_name,
            'last_name' => $request->last_name,
            'second_surname' => $request->second_surname,
            'gender' => $request->gender,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password), // Contraseña por defecto (mejorar en producción)
            // ... otros campos del usuario
        ])->assignRole('Paciente');
        
        $paciente = Patient::create([
            'user_id' => $user->id,
            'document_number' => $request->document_number,
            'first_name' => $request->first_name,
            'second_name' => $request->second_name,
            'last_name' => $request->last_name,
            'second_surname' => $request->second_surname,
            'gender' => $request->gender,
            'date_of_birth' => $request->date_of_birth,
            'email' => $request->email,
            'phone' => $request->phone,
            'state_civil' => $request->state_civil,
            'emergency_contact' => $request->emergency_contact,
            'blood_group' => $request->blood_group,
            'additional_notes' => $request->additional_notes,

        ]); 
        

       /*  Patient::create($request->all()); */
        return redirect()->route('admin.patients.index')->with('success', 'Paciente creado exitosamente.');

    }

    /**
     * Display the specified resource.
     */
    public function show(Patient $patient)
    {
        return view('admin.patients.show', compact('patient'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Patient $patient)
    {
        $users = User::doesntHave('patient')->orWhere('id', $patient->user_id)->get();
        return view('dashboard.administrador.pacientes_registro.edit', compact('patient', 'users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Patient $patient)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id|unique:patients,user_id,' . $patient->id,
            'document_number' => 'required|string|max:50|unique:patients,document_number,' . $patient->id,
            'first_name' => 'required|string|max:100',
            'second_name' => 'nullable|string|max:100',
            'last_name' => 'required|string|max:100',
            'second_surname' => 'nullable|string|max:100',
            'gender' => 'required|in:male,female',
            'date_of_birth' => 'required|date',
            'email' => 'required|email|unique:patients,email,' . $patient->id,
            'phone' => 'required|string|max:15',
            'state_civil' => 'nullable|string|max:50',
            'emergency_contact' => 'nullable|string|max:15',
            'blood_group' => 'nullable|string|max:10',
            'additional_notes' => 'nullable|string',
        ]);

        $patient->update($validated);
        return redirect()->route('admin.patients.index')->with('success', 'Paciente actualizado exitosamente.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Patient $patient)
    {
       // Verificar si el paciente tiene un usuario asociado
    if ($patient->user) {
        // Eliminar el usuario asociado
        $patient->user->delete();
    }

    // Eliminar el registro del paciente
    $patient->delete();
        
        return redirect()->route('admin.patients.index')->with('success', 'Paciente eliminado exitosamente.');

    }
}

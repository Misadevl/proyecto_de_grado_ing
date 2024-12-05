<?php

namespace App\Listeners;

use App\Models\Patient;

use Illuminate\Auth\Events\Registered;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class CreatePatientAfterUserRegistration
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(Registered $event): void
    {
        $user = $event->user;

        // Crear una entrada en la tabla 'patients'
        Patient::create([
            'user_id' => $user->id, // Relacionar con el usuario
            'document_number' => null, // Inicialmente vacío, se puede editar después
            'first_name' => $user->name, // Usamos el nombre del usuario
            'second_name' => $user->second_name, // Inicialmente vacío
            'last_name' => $user->last_name, // Inicialmente vacío
            'second_surname' => $user->second_surname, // Inicialmente vacío
            'gender' => $user->gender, // Inicialmente vacío
            'date_of_birth' => null, // Inicialmente vacío
            'email' => $user->email, // Copiar el email del usuario
            'phone' => $user->phone, // Inicialmente vacío
            'state_civil' => null, // Inicialmente vacío
            'emergency_contact' => null, // Inicialmente vacío
            'blood_group' => null, // Inicialmente vacío
            'additional_notes' => null, // Inicialmente vacío
        ]);
    }
}

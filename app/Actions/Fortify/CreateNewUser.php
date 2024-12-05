<?php

namespace App\Actions\Fortify;

use App\Models\User;
use App\Models\Patient;
use Laravel\Jetstream\Jetstream;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;


class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'second_name' => ['nullable', 'string', 'max:255'], 
            'last_name' => ['required', 'string', 'max:255'],
            'second_surname' => ['nullable', 'string', 'max:255'],
            'gender' => ['required', 'string', 'in:male,female'],
            'phone' => ['required', 'string', 'max:20'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'second_name' => $input['second_name'] ?? null,
            'last_name' => $input['last_name'],
            'second_surname' => $input['second_surname'] ?? null,
            'gender' => $input['gender'],
            'phone' => $input['phone'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ])->assignRole('Paciente');
        
        /* Patient::create([ 
            'user_id' => $user->id, 
            'document_number' => 'ND' . time(), // Generar un número de documento único 
            'first_name' => $data['name'], 
            'second_name' => null, // Puede ser null 
            'last_name' => '', // Puedes ajustar esto según tus necesidades 
            'second_surname' => null, // Puede ser null 
            'gender' => '', // Puedes ajustar esto según tus necesidades 
            'date_of_birth' => now(), // Ajustar según sea necesario 
            'email' => $data['email'], 
            'phone' => '', // Puedes ajustar esto según tus necesidades 
            'state_civil' => null, // Puede ser null 
            'emergency_contact' => null, // Puede ser null 
            'blood_group' => null, // Puede ser null 
            'additional_notes' => null, // Puede ser null 
            ]); 
            return $user; */
        
    }
}

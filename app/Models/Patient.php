<?php

namespace App\Models;

use Laravel\Jetstream\HasProfilePhoto;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Patient extends Model
{
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use HasRoles;


    protected $fillable = [
        'user_id',
        'document_number',
        'first_name',
        'second_name',
        'last_name',
        'second_surname',
        'gender',
        'date_of_birth',
        'email',
        'phone',
        'state_civil',
        'emergency_contact',
        'blood_group',
        'additional_notes',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

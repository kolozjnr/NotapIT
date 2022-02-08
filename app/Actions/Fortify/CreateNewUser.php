<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        
        //return view('auth.register', ['items' => $items]);

        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'dept' => ['required', 'string', 'max:255'],
            'role_id' => ['required'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();

         $user = User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'dept' => $input['dept'],
            'tel' => $input['tel'],
            'status' => $input['status'],
            'password' => Hash::make($input['password']),
        ]);
        $user->attachRole($input['role_id']);
        return $user;
    }
}

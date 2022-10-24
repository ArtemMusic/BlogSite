<?php

namespace App\Http\services\Admin\User;

use App\Mail\User\PasswordMail;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class Service
{
    public function store($data)
    {
        $password = Str::random(10);
        $data['password'] = Hash::make($password);
        $user = User::FirstOrCreate(["email" => $data['email']], $data);
        Mail::to($data['email'])->send(new PasswordMail($password));
        return $user;
    }

    public function update($data, $user)
    {
        $user->update($data);
        return $user;
    }
}
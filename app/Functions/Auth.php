<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

function login($email, $password) {
    if (Auth::attempt(['email' => $email, 'password' => $password])) {
        return true;
    }
    return false;
}

<?php

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

function createUser($data) {
    try {
        DB::beginTransaction();
        User::create($data);
        DB::commit();
        return true;
    } catch (\Exception $e) {
        Log::channel('users')->error('User register failed', [$e->getMessage()]);
        DB::rollBack();
        return false;
    }
}

function updateUser($user, $data) {
    try {
        DB::beginTransaction();
        User::find($user)->fill($data)->save();
        DB::commit();
        return true;
    } catch (\Exception $e) {
        Log::channel('users')->error('User update failed', [$e->getMessage()]);
        DB::rollBack();
        return false;
    }
}

function getUser($user) {
    return User::find($user);
}

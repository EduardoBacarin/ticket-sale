<?php

use App\Models\User;

beforeEach(function () {
    User::where('email', 'user@test.com')->delete();
});

afterEach(function () {
    User::where('email', 'user@test.com')->delete();
});

test('register user success', function () {
    include_once(app_path('Functions/User.php'));
    $data = [
        'name' => 'User Test',
        'email' => 'user@test.com',
        'password' => '123password123'
    ];
    expect(createUser($data))->toBeTrue();
    $user = User::where('email', 'user@test.com')->first();
    expect($user->name)->toBe($data['name']);
    expect($user->email)->toBe($data['email']);
});

test('update user success', function () {
    include_once(app_path('Functions/User.php'));
    $data = [
        'name' => 'User Test',
        'email' => 'user@test.com',
        'password' => '123password123'
    ];
    createUser($data);
    $user = User::where('email', 'user@test.com')->first();
    expect(updateUser($user->id, ['name' => 'User Updated Test']))->toBeTrue();
    $user = User::where('email', 'user@test.com')->first();
    expect($user->name)->toBe('User Updated Test');
});

test('login user success', function () {
    include_once(app_path('Functions/User.php'));
    include_once(app_path('Functions/Auth.php'));
    $data = [
        'name' => 'User Test',
        'email' => 'user@test.com',
        'password' => '123password123'
    ];
    createUser($data);
    expect(login($data['email'], $data['password']))->toBeTrue();
});

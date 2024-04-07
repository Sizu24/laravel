<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Resources\UserResource;
use App\Http\Models\User;

class UserController extends Controller
{
    public function index()
    {
        // Logic for retrieving all users
    }

    public function signup(UserRequest $request)
    {
        // Logic for creating a new user

        // Create new user Model
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();

        $resource = new UserResource($user);

        return $this->login($request);
    }

    public function show($id)
    {
        // Logic for retrieving a specific user by ID
    }

    public function store(Request $request)
    {
        // Logic for creating a new user
    }

    public function update(Request $request, $id)
    {
        // Logic for updating a specific user by ID
    }

    public function destroy($id)
    {
        // Logic for deleting a specific user by ID
    }
}

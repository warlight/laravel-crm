<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    public function index()
    {
        return Role::get();
    }

    public function create(Request $request)
    {
        Role::create($request->only('name'));

        return response()->json(true);
    }

    public function update(Request $request, Role $role)
    {
        $role->update($request->only('name'));
        return response()->json($role);
    }

    public function show(Role $role)
    {
        return response()->json(['data' => $role]);
    }

    public function users(Role $role)
    {
        return $role->users->map->name;
//        return $role->users()->orderByDesc('id')->get();
    }
}

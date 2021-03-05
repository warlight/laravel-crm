<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    public function create()
    {
//        $role = new Role();
//
//        $role->name = 'Client';
//        $role->save();

//        Role::insert(['name' => 'Admin']);

        Role::create([
            'name' => 'manager',
        ]);

        return response()->json(true);
    }

    public function index()
    {
//        return Role::all();
//        return Role::find(1);
//        Role::where('id', 1)->first();
//        dd(Role::whereNotNull('created_at')->orWhere('id', '>', 1)->get());
//        dd(Role::whereNotNull('created_at')->orWhere('id', '>', 1)->get());
//        return Role::where('created_at', '!=', null)->get();
//        dd(Role::get()->sortBy('name'));

//        return response()->json(Role::get());

//        $role = Role::find(3);
//        $role->name = 'Manager';
//        $role->save();

//        $role = Role::find(3)->update([
//            'name' => 'M',
//        ]);
//
//        return Role::find(3);

        Role::find(3)->delete();
    }
}

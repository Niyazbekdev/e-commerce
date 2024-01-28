<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRoleRequest;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
        $this->authorizeResource(Role::class, 'role');
    }

    public function index()
    {
        return $this->response(Role::all());
    }

    public function store(StoreRoleRequest $request)
    {
        if(Role::query()->where('name', $request->name)->exists())
        {
            return $this->error('role already exists');
        }

        $role = Role::create([
            'name' => $request->name,
            'guard_name' => 'web'
        ]);

        return $this->success('role created', $role);
    }

    public function show(Role $role)
    {
        //
    }

    public function update(UpdateRoleRequest $request, Role $role)
    {
        //
    }

    public function destroy(Role $role)
    {
        //
    }
}

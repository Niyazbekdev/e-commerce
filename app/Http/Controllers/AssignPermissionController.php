<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAssignPermissionRequest;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AssignPermissionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
        $this->authorizeResource(Permission::class, 'permission');
    }

    public function store(StoreAssignPermissionRequest $request)
    {
        $permission = Permission::findOrFail($request->permission_id);
        $role = Role::findOrFail($request->role_id);

        if($role->hasPermissionTo($permission->name))
        {
            return $this->error('permission already assigned');
        }

        $role->givePermissionTo($permission->name);

        return $this->success('permission assigned to role');
    }
}

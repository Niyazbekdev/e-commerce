<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAssignRoleRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class AssignRoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
        $this->authorizeResource(Role::class, 'role');
    }

    public function store(StoreAssignRoleRequest $request)
    {
        $user = User::findOrFail($request->user_id);
        $role = Role::findOrFail($request->role_id);

        $user->assignRole($role);

        //$user->syncRoles(['writer', 'admin']); / qosimsha role qosiw
        return $this->success('role assigned' , $user);
    }

    public function destroy(User $user)
    {
        $user->removeRole('role'); // role di oshiriw
    }
}

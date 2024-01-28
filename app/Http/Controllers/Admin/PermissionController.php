<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePermissionRequest;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
        $this->authorizeResource(Permission::class, 'permission');
    }

    public function index()
    {
        return $this->response(Permission::all());
    }

    public function store(StorePermissionRequest $request)
    {
        if(Permission::query()->where('name', $request->name)->exists())
        {
            return $this->error('permission already exists');
        }

        $permission = Permission::create([
            'name' => $request->name,
            'guard_name' => 'web'
        ]);

        return $this->success('permission created', $permission);
    }

    public function show(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}

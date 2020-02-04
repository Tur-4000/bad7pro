<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Auth\Role;

class ManageUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::select('id', 'name', 'email')
            ->orderBy('id', 'ASC')
            ->paginate();

        return view('manage.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = new User();
        $roles = Role::pluck('name', 'id');
        $create = true;

        return view('manage.users.create', compact('user', 'create', 'roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {
//        dd(__METHOD__, $request);

        $request->merge(['password' => Hash::make($request->get('password'))]);

        if ($user = User::create($request->except('roles'))) {
            $this->syncPermissions($request, $user);
            flash('User has been created.')->important();
        } else {
            flash()->error('Unable to create user.');
        }

//        $user = User::create([
//            'name' => $request['name'],
//            'email' => $request['email'],
//            'password' => Hash::make($request['password']),
//        ]);

        return redirect()
            ->route('manage.user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
//        dd(__METHOD__, $user);

        return view('manage.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
//        dd(__METHOD__, $user);

        $create = false;

        return view('manage.users.edit', compact('user', 'create'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, User $user)
    {
//        dd(__METHOD__, $user, $request);

        $user->fill($request->all());
        $user->save();

        return redirect()
            ->route('manage.user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
//        dd(__METHOD__, $id);

        $user = User::find($id);
        if ($user) {
            $user->delete();
        }
        return redirect()->route('manage.user.index');
    }

    private function syncPermissions(Request $request, $user)
    {
//        dd($request->roles, $user);
        // Get the submitted roles
        $roles = $request->get('roles', []);

//        $permissions = $request->get('permissions', []);

        // Get the roles
        $roles = Role::find($roles);
//        dd($roles);
        // check for current role changes
//        if( ! $user->hasAllRoles($roles) ) {
//            // reset all direct permissions for user
//            $user->permissions()->sync([]);
//        } else {
//            // handle permissions
//            $user->syncPermissions($permissions);
//        }

        $user->syncRoles($roles);
//dd($user);
        return $user;
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\VarDumper\VarDumper;

class UserController extends Controller
{
    public readonly User $user;
    public function __construct()
    {
        $this->user = new user();
    }



    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = $this->user->all();
        return view('users',['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, User $user)
    {
        $data= $request ->all();
        $user = $user -> create($data);
        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     */
    public function show (User $user)
    {
        return view('user_show',['user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(user $user)
    {
        dd($user);
        return view('user_edit',['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $updated = $this->user->where('id',$id)->update($request->except(['_token','_method']));

        if($updated){
            return redirect()->route('users.index');
        }
        return redirect()->back()->with('message','error');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        dd($id);
        $this->user->where('id',$id)->delete();
        
        return redirect()->route('users.index');
    }
}

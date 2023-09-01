<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Member::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        // Validate the request data
        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|email',
            'address' => 'required|email',
        ]);
    
        // Create a new member
        $member = new Member();
        $member->name = $request->name;
        $member->email = $request->email;
        $member->address = $request->address;
    
        // Save the member to the database
        $member->save();
    
        // Return the member
        return $member;
    }
    
    public function store(Request $request)
    {
        // Crée un nouvel objet membre à partir des données de la requête
        $member = new Member();
        $member->name = $request->name;
        $member->email = $request->email;
        $member->address = $request->address;

        $result = $member ->save();
        if($result)
        {
          return ["result"=>"data has been added"];
        }
        return ["result"=>"Record fail"];
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $device = Member::find($id);
        $device->name = $request->name;
        $device->email = $request->email;
        $device->address = $request->address;
        $result = $device->save();
        if ($result) {
            return ["result" => "data has been updated"];
        }
        return ["result" => "operation failed"];
    }
    
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

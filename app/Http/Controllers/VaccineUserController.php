<?php

namespace App\Http\Controllers;

use App\Models\VaccineUser;
use App\Http\Requests\StoreVaccineUserRequest;
use App\Http\Requests\UpdateVaccineUserRequest;
use Illuminate\Http\Request;

class VaccineUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVaccineUserRequest $request)
    {

        return $request;
        VaccineUser::create($request->validated());
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(VaccineUser $vaccineUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(VaccineUser $vaccineUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVaccineUserRequest $request, VaccineUser $vaccineUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(VaccineUser $vaccineUser)
    {
        //
    }
}

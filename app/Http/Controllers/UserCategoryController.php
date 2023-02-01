<?php

namespace App\Http\Controllers;

use App\Models\userCategory;
use Illuminate\Http\Request;

class UserCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('userCategory.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\userCategory  $userCategory
     * @return \Illuminate\Http\Response
     */
    public function show(userCategory $userCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\userCategory  $userCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(userCategory $userCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\userCategory  $userCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, userCategory $userCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\userCategory  $userCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(userCategory $userCategory)
    {
        //
    }
}

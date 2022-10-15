<?php

namespace App\Http\Controllers;

use App\Models\Problems;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProblemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('post');
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
     * @param  \App\Models\Problems  $problems
     * @return \Illuminate\Http\Response
     */
    public function show(Problems $problems)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Problems  $problems
     * @return \Illuminate\Http\Response
     */
    public function edit(Problems $problems)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Problems  $problems
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Problems $problems)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Problems  $problems
     * @return \Illuminate\Http\Response
     */
    public function destroy(Problems $problems)
    {
        //
    }
}

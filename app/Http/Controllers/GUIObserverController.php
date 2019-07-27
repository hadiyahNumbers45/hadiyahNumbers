<?php

namespace App\Http\Controllers;

use App\observer;
use Illuminate\Http\Request;

class ObserverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
     {
         $this->middleware('auth:observer');
     }

     /**
      * Show the application dashboard.
      *
      * @return \Illuminate\Contracts\Support\Renderable
      */
     public function index()
     {
         return view('observer');
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
     * @param  \App\observer  $observer
     * @return \Illuminate\Http\Response
     */
    public function show(observer $observer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\observer  $observer
     * @return \Illuminate\Http\Response
     */
    public function edit(observer $observer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\observer  $observer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, observer $observer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\observer  $observer
     * @return \Illuminate\Http\Response
     */
    public function destroy(observer $observer)
    {
        //
    }
}

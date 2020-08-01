<?php

namespace App\Http\Controllers;

use App\BarberShop;
use Illuminate\Http\Request;

class BarberShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('news.index', ['barbershops' => BarberShop::all()]);
    }
    public function show($id)
    {
        return view('news.show', ['barbershops' => BarberShop::findOrFail($id)]);
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
     * @param  \App\BarberShop  $barberShop
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BarberShop  $barberShop
     * @return \Illuminate\Http\Response
     */
    public function edit(BarberShop $barberShop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BarberShop  $barberShop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BarberShop $barberShop)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BarberShop  $barberShop
     * @return \Illuminate\Http\Response
     */
    public function destroy(BarberShop $barberShop)
    {
        //
    }
}

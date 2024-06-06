<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreabonnementRequest;
use App\Http\Requests\UpdateabonnementRequest;
use App\Models\abonnement;

class AbonnementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.home');
    }
    public function about()
    {
        return view('pages.about');
    }
    public function service()
    {
        return view('pages.services');
    }
    public function live()
    {
        return view('pages.live');
    }
    public function agenda()
    {
        return view('pages.agendall');
    }
    public function abonnement()
    {
        return view('pages.abonement');
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
    public function store(StoreabonnementRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(abonnement $abonnement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(abonnement $abonnement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateabonnementRequest $request, abonnement $abonnement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(abonnement $abonnement)
    {
        //
    }
}

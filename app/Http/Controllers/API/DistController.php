<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\DistributerResurs;
use App\Models\Distributer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dists = Distributer::all();
        return DistributerResurs::collection($dists);
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
     * @param  \App\Models\Distributer  $distributer
     * @return \Illuminate\Http\Response
     */
    public function show(Distributer $distributer)
    {
        return new DistributerResurs($distributer);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Distributer  $distributer
     * @return \Illuminate\Http\Response
     */
    public function edit(Distributer $distributer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Distributer  $distributer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Distributer $distributer)
    {
        $validator = Validator::make($request->all(), [
            'naziv' => 'required',
            'adresa' => 'required',
            'grad' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['Greska pri validaciji!', $validator->errors()]);
        }

        $distributer->naziv = $request->naziv;
        $distributer->adresa = $request->adresa;
        $distributer->grad = $request->grad;
        $distributer->save();

        return response()->json([
            'Podaci o distributeri izmenjeni!',
            new DistributerResurs($distributer)
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Distributer  $distributer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Distributer $distributer)
    {
        $distributer->delete();
        return response()->json([
            'Distributer obrisan!',
        ]);
    }
}

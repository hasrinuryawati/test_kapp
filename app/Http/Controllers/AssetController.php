<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AssetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $assets = Asset::orderByDesc('id')->get();
        return view('asset_view', compact('assets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create_view');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'owner' => 'required|email', 
            'asset_name' => 'required|string|max:100',
            'value' => 'required|numeric|min:1',
            'added_at' => '',
            'last_check_at' => 'required|date',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => 0,
                'message' => $validator->messages()->all()
            ], 400);
        }

        $added = now();
        if ($request->added_at) {
            $added = $request->added_at;
        }

        // hitung days
        $day = strtotime($request->last_check_at) - strtotime($added);
        $jumlahHari = floor($day / (60 * 60 * 24));
        if (strtotime($request->last_check_at) <= strtotime($added)) {
            $jumlahHari = 0;
        }

        Asset::upsert([
            [
                'id' => $request->id,
                'owner' => $request->owner,
                'asset_name' => $request->asset_name,
                'value' => $request->value,
                'added_at' => $added,
                'last_check_at' => $request->last_check_at,
                'days' => $jumlahHari
            ]
        ],
        'id');

        return response()->json([
            'success' => 1,
            'message' => 'sukses'
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function show(Asset $asset)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function edit(Asset $asset)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Asset $asset)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function destroy(Asset $asset)
    {
        //
    }
}

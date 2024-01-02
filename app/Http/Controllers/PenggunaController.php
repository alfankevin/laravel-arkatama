<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;
use App\Http\Requests\StorePenggunaRequest;
use App\Http\Requests\UpdatePenggunaRequest;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Pengguna::all();
        return view('main', compact('user'));
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
    public function store(Request $request)
    {
        $input = $request->input('user');

        $data = explode(' ', $input);

        $ageIndex = null;
        foreach ($data as $index => $value) {
            if (is_numeric($value)) {
                $ageIndex = $index;
                break;
            }
        }

        if ($ageIndex !== null && $ageIndex > 0) {
            $nameArray = array_slice($data, 0, $ageIndex);
            $name = implode(' ', $nameArray);

            $cityArray = array_slice($data, $ageIndex + 1);
            $city = implode(' ', $cityArray);

            $user = new Pengguna();
            $user->name = strtoupper($name);
            $user->age = $data[$ageIndex];
            $user->city = strtoupper($city);
            $user->save();
        } else {
            //
        }

        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pengguna $pengguna)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pengguna $pengguna)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePenggunaRequest $request, Pengguna $pengguna)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pengguna $pengguna)
    {
        //
    }
}

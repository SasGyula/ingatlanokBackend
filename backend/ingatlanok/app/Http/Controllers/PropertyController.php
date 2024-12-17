<?php

namespace App\Http\Controllers;

use App\Models\Property;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Type\Integer;

class PropertyController extends Controller
{
    public function show()
    {
        return Property::all();
    }
    public function ingatlanok(){
        $properties = DB::table('properties as p')
            ->join('categories as c', 'p.kategoria', '=', 'c.id')
            ->select('c.nev', 'p.kategoria', 'p.leiras', 'p.hirdetesDatuma', 'p.tehermentes', 'p.kepUrl')
            ->get();

        return response()->json($properties);
    }

    public function rendezes(Integer $id){
        $rendezett = DB::table('properties as p')
        ->join('categories as c', 'p.kategoria', '=', 'c.id')
        ->select('p.leiras')
        ->where('c.id', '=',  $id)
        ->get();
        return response()->json($rendezett);
    }

    public function store(Request $request)
    {
        $record = new Property();
        $record->fill($request->all());
        $record->save();

    }

    public function update(Request $request, string $id)
    {
        $record = Property::find($id);
        $record->fill($request->all());
        $record->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Property::find($id)->delete();
        return 'Sikeres törlés!';
    }

}

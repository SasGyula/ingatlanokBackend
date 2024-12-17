<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Brick\Math\BigInteger;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function show()
    {
        return Category::all();
    }


    public function store(Request $request)
    {
        $record = new Category();
        $record->fill($request->all());
        $record->save();

    }

    public function update(Request $request, string $id)
    {
        $record = Category::find($id);
        $record->fill($request->all());
        $record->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Category::find($id)->delete();
        return 'Sikeres törlés!';
    }

    public function kategoraik () {
        $kategoriak = DB::table('categories as c')
        ->select('c.id','c.nev')
        ->get();
        return response()->json($kategoriak);
    }


}

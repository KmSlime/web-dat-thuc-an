<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\food_categories;

class FCController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fcs = DB::table('food_categories')->select('*')->paginate(10);
        
        return view('admin/adminFC/index', compact('fcs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/adminFC/insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return dd('dd');
        $storeData = $request->validate([
            'name' => 'required|max:255'
        ]);

        $fcs = food_categories::create($storeData);
        return redirect('/admin/foodcatergory')->with('Complete', 'Create Food Category is success!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fc  = food_categories::findOrFail($id);
        return view('/admin/adminFC/index', compact('fc'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $updateData = $request->validate([
            'name' => 'required|max:255',
            
        ]);
        food_categories::whereId($id)->update($updateData);
        return redirect('/admin/foodcatergory')->with('completed', 'Food Category has been updated');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fc  = food_categories::findOrFail($id);
        $fc->delete();
        return redirect('/admin/foodcatergory')->with('completed', ' Food Category has been deleted');

    }
}

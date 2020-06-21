<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;

class createdcontroller extends Controller
{
    public function create_perform()
    {
        return view('create_ac');
    }
    public function create_insert(Request $request)
    {       
        $premission = DB::insert('insert into member(name, ac, psd) values(?,?,?)',
        [$request['name'],$request['ac'],$request['psd']]);
        return redirect('/');
    }
}
?>
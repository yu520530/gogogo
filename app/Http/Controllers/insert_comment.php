<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;

class insert_comment extends Controller
{
    public function insert_perform()
    {       
        return view('frontend.about');
    }
    public function insert_comment(Request $request)
    {       
        $data =date("Y-m-d H:i:s" , mktime(date('H')+8, date('i'), date('s'), date('m'), date('d'), date('Y')));
        $premission = DB::insert('insert into comment(ac,c_title,comment,time) values(?,?,?,?)',[session('ac'),$request['t_text'],$request['c_text'],$data]);
        if($premission != null)
        {
            return redirect('message');
        }
        else
        {                   
            return redirect('insertmessage');
        }
    }
}
?>
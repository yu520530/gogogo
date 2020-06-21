<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;

class subcontroll extends Controller
{
    public function say()
    {
        if(session()->has('ac'))
        {
            session()->flush();
        }
        return view('login');
    }
    public function loginProcess(Request $request)
    {
        $premission = DB::select('select name from member where ac = ? and psd = ?',[$request['ac'],$request['psd']]);
        if($premission != null)
        {
            foreach($premission as $value)
            {
               $data = $value ->name;

            }
            session()->put('name',$data);
            $request->session()->put('ac',$request['ac']);
            $request->session()->put('psd',$request['psd']);
            return redirect()->action('comment@comment_perform');
        }
        else
        {
            return redirect('/');
        }
    }
}
?>

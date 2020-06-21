<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;

class comment extends Controller
{
    public function comment_perform()
    {
        $data =DB::table('comment')->join('member','comment.ac','=','member.ac')->select('member.name','comment.ac','comment.c_title','comment.comment','comment.time')->get();
        return view('frontend.index')->with("db",$data);
    }
}
?>

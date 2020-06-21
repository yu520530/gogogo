<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;

class profilecontroller extends Controller
{
    public function profile_perform()
    {
        return view('frontend.products');
    }
   
}
?>
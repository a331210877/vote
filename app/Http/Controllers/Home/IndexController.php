<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;
use Storage;

class IndexController extends Controller
{
    public function getMessage(Request $request){
        if (isset($_GET['code'])){
            echo $_GET['code'];
        }else{
            echo "NO CODE";
        }
    }
}
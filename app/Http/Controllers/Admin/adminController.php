<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use  App\Http\Controllers\Controller;
use DB;
class adminController extends Controller
{
    public function admin()
    {
        return view('admin.admin');
    }

}

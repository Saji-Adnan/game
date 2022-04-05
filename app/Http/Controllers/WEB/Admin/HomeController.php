<?php

namespace App\Http\Controllers\WEB\Admin;

use App\Models\Admin;
use App\Models\User;

use DB;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Response;

class HomeController extends Controller
{


    public function index()
    {
        return view('admin.home.dashboard');
    }

}

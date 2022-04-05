<?php

use App\Models\User;
use Illuminate\Support\Facades\Cache;

function admin_assets($dir){
    return url('/admin_assets/assets/' . $dir);
}




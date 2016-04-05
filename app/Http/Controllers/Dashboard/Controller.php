<?php

namespace Eduboard\Http\Controllers\Dashboard;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

abstract class Controller extends BaseController
{
    public function __construct() 
    {
    	$this->middleware('auth');
    }
}

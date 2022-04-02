<?php

namespace App\Http\Controllers;

use App\Models\Malls;
use Illuminate\Http\Request;

class MallController extends Controller
{
    public function index($slug)
    {
        $mall = Malls::where('slug', $slug)->first();
        if (!isset($mall) || empty($mall)){
            abort(503);
        }
        return view('mall', compact('mall'));
    }
}

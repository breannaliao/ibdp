<?php

namespace App\Http\Controllers;

use App\Models\Deliveries;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        $deliveries = Deliveries::all();

        return view('deliveries.index', ['deliveries' => $deliveries]);
    }
}

<?php

namespace App\Http\Controllers\Member\Location;

use App\Http\Controllers\Controller;
use App\Models\Location;
use Illuminate\Http\Request;

class LocationMemberController extends Controller
{
    public function index()
    {
        $locations = Location::all(); // Fetch all locations
        return response()->json($locations); // Return data as JSON
    }
}

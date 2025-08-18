<?php

namespace App\Http\Controllers\Admin;

use App\Models\Property;
use App\Models\PropertyType;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminDashboardController extends Controller
{
    public function __construct()
    {

    }

public function index()
{
    $viewData = [];
    $viewData["userCount"] = User::all()->count();
    $viewData['propertyCount'] = Property::all()->count();

    $propertyTypes = PropertyType::with('properties')->get();
    $chartLabels = json_encode($propertyTypes->pluck('type')->all());
    $chartData = json_encode($propertyTypes->map(function ($type) {
        return $type->properties->count();
    })->all());

    return view("admin.dashboard.index", $viewData, compact('chartLabels', 'chartData'));
}
}
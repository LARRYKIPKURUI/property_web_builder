<?php

namespace App\Http\Controllers\Admin;

use App\Models\Property;
use App\Models\PropertyType;
use App\Models\User;
use ConsoleTVs\Charts\Classes\Chartjs\Chart; // Use the new class
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
        $labels = $propertyTypes->pluck('title')->all();
        $data = $propertyTypes->map(function ($type) {
            return $type->properties->count();
        })->all();

        $chart = new Chart();
        $chart->labels($labels);
        $chart->dataset('Property Types', 'bar', $data);

        return view("admin.dashboard.index", $viewData, compact('chart'));
    }
}
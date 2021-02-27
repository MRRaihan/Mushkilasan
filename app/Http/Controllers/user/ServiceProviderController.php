<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\Role;

class ServiceProviderController extends Controller
{
    public function index()
    {
        $categories = Category::where('status', 'Active')->orderBy('category_name')->get();
        $provider_profetions = Role::where('status', 'Active')->orderBy('name')->get();
        return view('user.serviceprovider.dashboard', compact('categories','provider_profetions'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function show(Request $request, string $slug)
    {
        $company = Company::query()
                ->where('slug', $slug)
                ->firstOrFail();

        return view('company', compact('company'));
    }
}

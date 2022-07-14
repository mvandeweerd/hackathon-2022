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

    public function claim(Request $request, $slug)
    {
        $company = Company::query()
            ->where('slug', $slug)
            ->whereNull('user_id')
            ->firstOrFail();

        dd($company);
    }

}

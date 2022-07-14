<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateCompanyRequest;
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

    public function edit(Request $request, string $slug)
    {
        $company = Company::query()
            ->where('slug', $slug)
            ->firstOrFail();


        return view('company/edit', compact('company'));

    }

    public function update(UpdateCompanyRequest $request, string $slug)
    {
        $company = Company::query()
            ->where('slug', $slug)
            ->firstOrFail();

        $company->update($request->validated());

        return redirect()->back();
    }

}

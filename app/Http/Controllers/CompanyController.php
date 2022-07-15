<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateCompanyRequest;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CompanyController extends Controller
{

    public function create()
    {
        return view('company.create', [
        ]);
    }

    public function store()
    {
        \request()->validate([
            'website' => 'required|unique:company,website',
            'name' => 'required'
        ]);
        $company = Company::create(\request()->all() + ['slug' => Str::slug(\request('name'))]);
        return redirect()->to('/company/'.$company['slug']);
    }

    public function show(Request $request, string $slug)
    {
        $company = Company::query()
                ->where('slug', $slug)
                ->firstOrFail();

        return view('company', [
            'company' => $company,
        ]);
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

        $company->update($request->all());

        return redirect()->back()->with('success', 1);
    }

}

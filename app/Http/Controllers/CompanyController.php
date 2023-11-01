<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companies = Company::all();
        return view('company.company')->with(['companies' => $companies]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(StoreCompanyRequest $request)
        {
            if ($request->hasFile('logo')) {
                // Image Name
                $fileName = time() . "-" . $request->file('logo')->getClientOriginalName();
                // Image File Path
                $request->file('logo')->move(public_path('_uploads/'), $fileName);
                
                // Now Create The Company
                $data = $request->only(['name', 'email', 'website']);
                $data['logo'] = $fileName;
                Company::create($data);
                
                return redirect()->back()->with('message', 'Company Added');
            }
        }


    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        return view('company.companyEdit')->with(['company' => $company]);
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(UpdateCompanyRequest $request, Company $company)
        {
            if ($request->hasFile('logo')) {
                // Delete Existing Image
                $filePath = public_path('_uploads/' . $company->logo);
                if (file_exists($filePath)) {
                    unlink($filePath);
                }
                
                $fileName = time() . "-" . $request->file('logo')->getClientOriginalName();
                
                // Move and save the uploaded file
                $request->file('logo')->move(public_path('_uploads'), $fileName);
                
                // Update company information
                $data = $request->only(['title']);
                $data['logo'] = $fileName;
                $company->update($data);
                
                return redirect()->route('company.index')->with('message', 'Award Updated');
            }

            return redirect()->back()->with('message', 'Award Not Updated');
        }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        $company->delete();
        return back()->with('message', 'Company Deleted');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Requests\CompanyRequest;
use App\Http\Resources\CompanyResource;

class CompanyController extends Controller
{
    private Company $companies;

    public function __construct(Company $companies)
    {
        $this->companies = $companies;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = $this->companies->with(['countries'])->get();
        return CompanyResource::collection($companies);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CompanyRequest $companyRequest
     * @return \Illuminate\Http\Response
     */
    public function store(CompanyRequest $companyRequest)
    {
        $compnay = $this->companies->newQuery()->create($companyRequest->validated());
        return new CompanyResource($compnay->load(['countries']));
    }

    /**
     * Display the specified resource.
     *
     * @param  Company $company
     * @return CompanyResource
     */
    public function show(Company $company)
    {
        return new CompanyResource($company->load(['countries']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(CompanyRequest $companyRequest, Company $company)
    {
        $company->update($companyRequest->validated());
        return new CompanyResource($company->load(['countries']));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        $company->delete();
        return response()->noContent();
    }
}

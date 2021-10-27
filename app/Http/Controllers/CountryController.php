<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Requests\CountryRequest;
use App\Http\Resources\CountryResource;

class CountryController extends Controller
{
    private Country $country;

    public function __construct(Country $country)
    {
        $this->country = $country;
    }

    /**
     * Display a listing of the resource.
     *
     * @return CountryResource
     */
    public function index()
    {
        $country = $this->country->with(['currencies'])->get();
        return CountryResource::collection($country);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CountryRequest  $countryRequest
     * @return CountryResource
     */
    public function store(CountryRequest $countryRequest)
    {
        $country = $this->country->newQuery()->create($countryRequest->validated());
        return new CountryResource($country->load('currencies'));
    }

    /**
     * Display the specified resource.
     *
     * @param  Country  $country
     * @return CountryResource
     */
    public function show(Country $country)
    {
        return new CountryResource($country->load('currencies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  CountryRequest  $countryRequest
     * @param  Country  $country
     * @return CountryResource
     */
    public function update(CountryRequest $countryRequest, Country $country)
    {
        $country->update($countryRequest->validated());
        return new CountryResource($country->load('currencies'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Country  $country
     * @return JsonResponse|object
     * @throws \Exception
     */
    public function destroy(Country $country)
    {
        $country->delete();
        return response()->noContent();
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use Illuminate\Auth\AuthManager;
use Illuminate\Routing\Controller;
use App\Http\Requests\CurrencyRequest;
use App\Http\Resources\CurrencyResource;

class CurrencyController extends Controller
{
    private Currency $currency;

    protected $auth;

    public function __construct(Currency $currency, AuthManager $authManager)
    {
        $this->auth = $authManager->guard('api');
        $this->currency = $currency;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $currencies = $this->currency->all();
        return CurrencyResource::collection($currencies);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CurrencyRequest  $currencyRequest
     * @return CurrencyResource $currency
     */
    public function store(CurrencyRequest $currencyRequest)
    {
        $currency = $this->currency->newQuery()->create($currencyRequest->validated());
        return new CurrencyResource($currency);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Currency  $currency
     * @return \Illuminate\Http\Response
     */
    public function show(Currency $currency)
    {
        return new CurrencyResource($currency);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param CurrencyRequest  $currencyRequest
     * @param Currency $currency
     * @return CurrencyResource $currency
     */
    public function update(CurrencyRequest $currencyRequest, Currency $currency)
    {
        $currency->update($currencyRequest->validated());
        return new CurrencyResource($currency);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Currency $currency
     * @return JsonResponse|object
     * @throws \Exception
     */
    public function destroy(Currency $currency)
    {
        $currency->delete();
        return response()->noContent();
    }
}

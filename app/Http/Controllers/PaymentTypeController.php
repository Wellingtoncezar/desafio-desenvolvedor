<?php

namespace App\Http\Controllers;

use App\Http\Requests\BuyCurrencyRequest;
use App\Http\Requests\PaymentTypeRequest;
use App\Http\Resources\CurrencyPurchaseResource;
use App\Services\CurrencyService;
use App\Services\PaymentTypeService;
use Illuminate\Support\Facades\Request;

class PaymentTypeController extends Controller
{
    public function __construct(
        private PaymentTypeService $paymentTypeService)
    {}

    public function index()
    {
        return view('payment_types');
    }

    public function getPaymentTypes()
    {
        return response()->json($this->paymentTypeService->getPaymentTypes());
    }

    public function savePaymentType(PaymentTypeRequest $request, $id)
    {
        return $this->paymentTypeService->updatePaymentTypes($request->all(), $id);
    }
}
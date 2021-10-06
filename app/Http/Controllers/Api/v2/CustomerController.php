<?php

namespace App\Http\Controllers\Api\v2;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\CustomerModel;
// trả về kiểu dữ liệu json
use App\Http\Resources\v2\CustomerResource;
use App\Http\Resources\v2\CustomerCollection;


class CustomerController extends Controller
{
    public function show(CustomerModel $customer)
    {
        return new CustomerResource($customer);
    }
}

<?php


namespace App\Http\Services\Customer;


use App\Models\Cart;
use App\Models\Customer;
use Illuminate\Support\Facades\Session;

class CustomerService
{
    public function delete($request)
    {
        $customer = Customer::where('id', $request->input('id'))->first();
        if ($customer) {
            $customer->delete();
            return true;
        }
        return false;
    }
}
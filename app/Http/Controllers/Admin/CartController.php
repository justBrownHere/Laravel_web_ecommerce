<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Services\CartService;
use App\Http\Services\Customer\CustomerService;

use Illuminate\Http\JsonResponse;

class CartController extends Controller
{
    protected $cart;
    protected $customerService;
    
    public function __construct(CartService $cart, CustomerService $customerService)
    {
        $this->cart = $cart;
        $this->customerService = $customerService;
    }

    public function index()
    {
        return view('admin.carts.customer', [
            'title' => 'Danh Sách Đơn Đặt Hàng',
            'customers' => $this->cart->getCustomer()
        ]);
    }

    public function show(Customer $customer)
    {
        $carts = $this->cart->getProductForCart($customer);

        return view('admin.carts.detail', [
            'title' => 'Chi Tiết Đơn Hàng: ' . $customer->name,
            'customer' => $customer,
            'carts' => $carts
        ]);
    }
    public function destroy(Request $request)
    {
        $result = $this->customerService->delete($request);
        if ($result) {
            return response()->json([
                'error' => false,
                'message' => 'Xóa thành công đơn hàng'
            ]);
        }
        return response()->json([ 'error' => true ]);
    }
}
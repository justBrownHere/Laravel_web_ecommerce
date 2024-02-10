<?php


namespace App\Http\Services\Contact;

use App\Models\Contact;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class ContactService
{   
    public function getContact()
    {
        return Contact::orderByDesc('id')->paginate(10);
    }
    public function addContact($request)
    {
        try {
            DB::beginTransaction();

            $contacts = Session::get('contacts');

            if (is_null($contacts))
                return false;

            $contact = Contact::create([
                'name' => $request->input('name'),
                'email' => $request->input('name'),
                'phone' => $request->input('phone'),
                'content' => $request->input('content')
            ]);

            DB::commit();
            Session::flash('success', 'Gửi thành công');

            #Queue
         
        } catch (\Exception $err) {
            DB::rollBack();
            Session::flash('error', 'Gửi Lỗi, Vui lòng thử lại sau');
            return false;
        }

        return true;
    }

    protected function infoProductCart($carts, $customer_id)
    {
        $productId = array_keys($carts);
        $products = Product::select('id', 'name', 'price', 'price_sale', 'thumb')
            ->where('active', 1)
            ->whereIn('id', $productId)
            ->get();

        $data = [];
        foreach ($products as $product) {
            $data[] = [
                'customer_id' => $customer_id,
                'product_id' => $product->id,
                'pty'   => $carts[$product->id],
                'price' => $product->price_sale != 0 ? $product->price_sale : $product->price
            ];
        }

        return Cart::insert($data);
    }
    
    
}
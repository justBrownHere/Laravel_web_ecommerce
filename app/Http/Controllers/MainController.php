<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\Slider\SliderService;
use App\Http\Services\Menu\MenuService;
use App\Http\Services\Product\ProductService;
use App\Models\Product;


class MainController extends Controller
{
    protected $slider;
    protected $menu;
    protected $product;

    public function __construct(SliderService $slider, MenuService $menu,
    ProductService $product)
{
    $this->slider = $slider;
    $this->menu = $menu;
    $this->product = $product;
}

    public function index(){
        return view('home', [
            'title' => 'Shop Cuối Kì',
            'sliders' => $this->slider->show(),
            'menus' => $this->menu->show(), 
            'products' => $this->product->get(),
            'lProduct' => $this->product->lastestProduct()
        ]);
    } 
    public function loadProduct(Request $request)
    {
        $page = $request->input('page', 0);
        $result = $this->product->get($page);
        if (count($result) != 0) {
            $html = view('products.list', ['products' => $result ])->render();

            return response()->json([ 'html' => $html ]);
        }

        return response()->json(['html' => '' ]);
    }
    public function search(Request $request){
        $data = Product::where('name','LIKE','%'.$request->key.'%')
        ->orwhere('price',$request->key)
         ->orwhere('price_sale',$request->key)
        ->get();
        return view('search',compact('data'),[
            'title' => 'Shop Cuối Kì',
            'menus' => $this->menu->show()
        ]);  
    }
    public function contact(){
        return view('contact',[
            'title' => 'Liên Hệ',
            'menus' => $this->menu->show()
        ]);
    }
    
}

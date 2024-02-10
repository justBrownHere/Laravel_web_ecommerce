<?php

namespace App\Http\Services\Menu;

use App\Models\Menu;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;


class MenuService{

    public function show(){
        return Menu::select('name','id','thumb')
        ->where('parent_id',0)
        ->where('active',1)
        ->orderbyDesc('id')
        ->get()
        ;  
    }

    public function getParent(){
        return Menu::where('parent_id',0)->get();
    }

    public function getAll(){
       return Menu::orderby('id')->paginate(20); 
    }

    public function create($request){
        try{
            Menu::create([
                'name' => (string)$request -> input('name'),
                'parent_id' => (int)$request -> input('parent_id'),
                'description' => (string)$request -> input('description'),
                'content' => (string)$request -> input('content'),
                'active' => (string)$request -> input('active'),
                'thumb' => (string)$request -> input('thumb'),
            ]);
            Session::flash('success', 'Tạo Danh Mục Thành Công');
        } catch (\Exception $err) {
            Session::flash('error', $err->getMessage());
            return false;
        }
        return true;
    }

    public function destroy($request)
    {
        $menu = Menu::where('id', $request->input('id'))->first();
        if ($menu) {
            $path = str_replace('storage', 'public', $menu->thumb);
            Storage::delete($path);
            $menu->delete();
            return true;
        }

        return false;
    }


    public function update($request, $menu)
    {
        try {
            $menu->fill($request->input());
            $menu->save();
            Session::flash('success', 'Cập nhật danh mục thành công');
        } catch (\Exception $err) {
            Session::flash('error', 'Cập nhật danh mục Lỗi');
            Log::info($err->getMessage());

            return false;
        }

        return true;
    }

    public function getId($id)
    {
        return Menu::where('id', $id)->where('active', 1)->firstOrFail();
    }

    public function getProduct($menu, $request)
    {
        $query = $menu->products()
            ->select('id', 'name', 'price', 'price_sale', 'thumb')
            ->where('active', 1);

        if ($request->input('price')) {
            $query->orderBy('price', $request->input('price'));
        }

        return $query
            ->orderByDesc('id')
            ->paginate(8)
            ->withQueryString();
    }

}


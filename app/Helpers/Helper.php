<?php

namespace App\Helpers;

use Illuminate\Support\Str;

class Helper{
    public static function menu($menus,$parent_id=0,$char=" ") {
        $html = '';

        foreach ($menus as $key => $menu) {
            if ($menu->parent_id == $parent_id) {
                $html .= '
                    <tr>
                        <td>' . $menu->id . '</td>
                        <td>' . $char . $menu->name . '</td>
                        <td>' . self::active($menu->active) . '</td>
                        <td>' . $menu->updated_at . '</td>
                        <td>
                        <a class="btn btn-primary btn-sm" href="/shop-cuoiki/admin/menus/edit/' . $menu->id . '">
                        
                            <i class="fas fa-edit"></i>
                        </a>
                        <a href="#" class="btn btn-danger btn-sm"
                            onclick="removeRow(' . $menu->id . ', \' /shop-cuoiki/admin/menus/destroy \')">

                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                    </tr>
                ';

                unset($menus[$key]);

                $html .= self::menu($menus, $menu->id, $char . '|--');
            }
        }

        return $html;
    }

    public static function active($active = 0): string
    {
        return $active == 0 ? '<span class="btn btn-danger btn-xs">KHÔNG</span>'
            : '<span class="btn btn-success btn-xs">CÓ</span>';
    }

    public static function menus($menus, $parent_id = 0) :string
    {
        $html = '';
        foreach ($menus as $key => $menu) {

            if((self::isChild($menus, $menu->id))&&($menu->parent_id == $parent_id)){
                $html .= '
                    <li class="mega-dropdown da-cap">
                        <a href="/shop-cuoiki/danh-muc/' . $menu->id . '-' . Str::slug($menu->name, '-') . '.html">
                            ' . $menu->name .'  
                            <i class="bx bxs-chevron-down"></i> </a>';
                    $html .= '<div class="mega-content">
                    <div class="row">
                        <div class="col-12">
                            <div class="box">        
                        <ul class="sub-menu">';
                    $html .= self::menus($menus, $menu->id);
                    $html .= '</a></li>
                                </ul></div>
                                </div>
               </li>';        
            }

            else if ($menu->parent_id == $parent_id) {
                $html .= '
                    <li>
                        <a href="/shop-cuoiki/danh-muc/' . $menu->id . '-' . Str::slug($menu->name, '-') . '.html">
                            ' . $menu->name .'  
                        </a>';
            
                unset($menus[$key]);

                // if (self::isChild($menus, $menu->id)) {
                    
                //     $html .= '<ul class="sub-menu">';
                //     $html .= self::menus($menus, $menu->id);
                //     $html .= '</ul>';
                // }

                $html .= '</li>';
            }
        }

        return $html;
    }

    public static function isChild($menus, $id) : bool
    {
        foreach ($menus as $menu) {
            if ($menu->parent_id == $id) {
                return true;
            }
        }

        return false;
    }

    public static function price($price = 0, $priceSale = 0)
    {
        $html = '';
        if ($priceSale != 0) return $html .='<span><del>$'.$price.'</del></span>
        <span class="curr-price">$'.$priceSale.'</span>';
        if ($price != 0)  return $html .='<span class="curr-price">$'.$price.'</span>';

    }
    public static function cost($price = 0, $priceSale = 0)
    {
        if ($priceSale != 0) return number_format($priceSale);
        if ($price != 0)  return number_format($price);
    }
}
<?php

namespace App\Http\Livewire;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use Cart;
class HomeComponent extends Component
{
    public function store($product_id,$product_name,$product_price)
    {
        Cart::add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');
        session()->flash('success_message','Item Added to Cart');
        return redirect()->route('product.cart');
    }
    use WithPagination;
    public function render()
    {
        $products = Product::paginate(12);
        return view('livewire.home-component',['products'=>$products])->layout("layouts.base");
    }
}

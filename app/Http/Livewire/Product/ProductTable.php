<?php

namespace App\Http\Livewire\Product;

use Livewire\Component;
use App\Models\Product;


class ProductTable extends Component
{
    public $product;
    public $name;
    public $description;
    public $price;


    public function render()
    {
        //Product::create(['name'=>'Capialimento']);
        //dd(Product::get());
        return view('livewire.product.product-table',
        [
            'products' => Product::get()
        ])->extends('layouts.app');
    }

    public function crearProucto()
    {

    }

   /* public function updateProucto(Product $product)
    {
        $product->update([
            'name' => $this->nombre,
            'description' => $this->description,
            'price' => $this->price,
        ]);
    }
*/
    public function editProucto(Product $product)
    {
        $this->product = $product;
        $this->name = $product->name;
        $this->description = $product->description;
        $this->price = $product->price;
    }

    public function saveProducto()
    {
        if ($this->product) {
            $this->product->update([
                'name'=> $this->name,
                'description' => $this->description,
                'price' => $this->price,
            ]);
        }else{
            Product::create([
                'name'=> $this->name,
                'description' => $this->description,
                'price' => $this->price,
            ]);
        }
        $this->reset();
    }

    public function deleteProducto(Product $product)
    {
        $product->delete();
    }
}

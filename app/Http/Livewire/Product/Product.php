<?php

namespace App\Http\Livewire\Product;

use Livewire\Component;
use Livewire\WithPagination;

class Product extends Component
{
    use WithPagination;
    public $data;

    public function render()
    {        

        return view('livewire.product.product' ,['products' => $this->data->paginate(5)]);
    }
}

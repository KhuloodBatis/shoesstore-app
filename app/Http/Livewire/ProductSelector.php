<?php

namespace App\Http\Livewire;

use App\Models\Variation;
use Livewire\Component;

class ProductSelector extends Component
{
    public $product;

    public $initialVariation;
    public $skuVariant;

    protected $listeners = [
        'skuVariantSelected'
    ];

    public function mount()
    {
        $this->initialVariation = $this->product->variations->sortBy('order')->groupBy('type')->first();
    }

    public function skuVariantSelected($variantID)
    {  
         if(!$variantID){
             $this->skuVariant = null;
             return ;
         }

        $this->skuVariant = Variation::find($variantID);
    }

    public function addToCart()
    {
     
        dd($this->skuVariant);

    }

    public function render()
    {
        return view('livewire.product-selector');
    }
}

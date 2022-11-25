<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\ProductAttribute;

class AdminAttributeComponent extends Component
{
    public function delAttribute($id){
        $attribute = ProductAttribute::find($id);
        $attribute->delete();
        session()->flash('message','Item Removed !');
    }

    public function render()
    {
        $attributes = ProductAttribute::paginate(10);
        return view('livewire.admin.admin-attribute-component',['attributes'=>$attributes])->layout('layouts.base');
    }
}

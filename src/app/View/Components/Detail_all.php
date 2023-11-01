<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Shop;

class Detail_all extends Component
{
    public $name;
    public $phone;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Shop $shop)
    {
        $this->name = $shop->name;
        $this->phone = $shop->phone;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.detail_all', compact('name', 'phone'));
    }
}

<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Shop;

class DetailAll extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $name;
    public $phone;

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
        return view('components.detail-all');
    }
}

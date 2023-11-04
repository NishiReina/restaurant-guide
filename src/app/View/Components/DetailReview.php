<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Shop;

class DetailReview extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $shop;
    public function __construct(Shop $shop)
    {
        $this->shop = $shop;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.detail-review');
    }
}

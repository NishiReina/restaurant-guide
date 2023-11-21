<?php

namespace App\Http\ViewComposers;

use App\Models\Area;
use App\Models\Gunre;
use Illuminate\View\View;

/**
 * Class UserComposer
 * @package App\Http\ViewComposers
 */
class SearchComposer
{    
   
    /**
     * Bind data to the view.
     * @param View $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with([
            'areas'   => Area::all(),
            'gunres'  => Gunre::all(),
        ]);
    }
}
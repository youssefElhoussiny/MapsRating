<?php
namespace App\Http\ViewComposer;

use App\Models\Category;
use Illuminate\View\View;


Class CategoryComposer
{
    public function compose(View $view)
    {
         return $view->with('categories' , Category::all());
    }
}

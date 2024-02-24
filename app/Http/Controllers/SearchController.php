<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function autoComplete(Request $request)
    {
        if($request->address)
        {
            dd($request->address);
            $input = $request->address;
            $data = Place::where('address' , 'like' , "%$input%")->get();
            $output = '<ul class="bg-gray-100 rounded px-6">';
            foreach($data as $row)
            {
                $output .= '<li class = "flex items-center justify-between my-4'.$row->address.'<li>';
            }
            $output .= '</ul>';
            return $output;
        }
    }
}

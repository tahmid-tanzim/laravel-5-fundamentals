<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function about()
    {
        /* Approach 1: Traditional Codeigniter Style */
//        $data = [];
//        $data['first'] = 'Kazi';
//        $data['last'] = 'Fatiha';
//        return view('pages.about', $data);

        /* Approach 2: Using PHP compact function */
//        $first = 'Jim';
//        $last = 'Carry';
//        return view('pages.about', compact('first', 'last'));

        /* Approach 3: Using 'with' function  */
        return view('pages.about')->with([
            'first' => 'Tahmid',
            'last' => 'Tanzim'
        ]);
    }
}

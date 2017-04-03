<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
  public function home()
  {
      $people = ['Sarah', 'Meow', 'Meow2'];
        return view('welcome', compact('people'));
  }

  public function about() {
    return view('about');
  }
}

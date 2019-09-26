<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
  public function odd() {

    $numDispari = [];
    for ($i=10; $i<=100; $i++) {
      if($i & 1) {
        $numDispari[] = $i;
      }
    }

    return view('odd', compact('numDispari'));
  }
}

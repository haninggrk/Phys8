<?php

namespace App\Http\Livewire;

use App\Models\Fis8Category;
use App\Models\Fis8Level;
use Livewire\Component;

class HalamanBermain extends Component
{
    public $getFt;
    public $getO;
    public $getC;

    public function render()
    {
        $this -> getC = Fis8Category::where('id', 1) -> first();
        $this -> getFt = $this -> getC -> levels;
        $this -> getC = Fis8Category::where('id', 2) -> first();
        $this -> getO = $this -> getC -> levels;
        return view('livewire.halaman-bermain');
    }
}

<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Category extends Component
{

    public $view = false;
    public $vehicle;
    public $new_category = false;

    protected $listener = ['closeView'];

    public function render()
    {
        return view('livewire.category');
    }

    protected function closeView(){
        $this->view = false; 
    }

    public function vehicleUpdated(){
        // if ($this->vehicle['category'] == 'new_category'){
            $this->new_category = true;
        // }
    }

    public function addCategory(){

    }
}

<?php

namespace App\Http\Livewire;

use App\Models\Category as ModelsCategory;
use App\Models\Vehicles;
use Livewire\Component;
use Livewire\WithFileUploads;

class Category extends Component
{

    use WithFileUploads;
    public $view = false;
    public $vehicle;
    public $showCategory = false;
    public $allCategory; 
    public $newCategory; 
    public $test;
    public $photos = [];
    public $carColor = ['Red', "Black", "Green", "Yellow", "White", "Silver", "Grey"];

    protected $listener = ['closeView'];

    public function mount(){
        $this->allCategory = ModelsCategory::get()->toArray();
        
    }

    public function render()
    {   
        $allVehicles= Vehicles::paginate(5);
        // \dd($allVehicles);
        return view('livewire.category', ['allVehicles'=>$allVehicles]);
    }

    protected function closeView(){
        $this->view = false; 
    }

    public function updatedVehicle($value, $key){
        if($key=="category" && $value == "new_category"){
            $this->showCategory = true;
        }else{
            $this->showCategory = false;
        }
    }

    protected $rules = [
        'newCategory' => 'required|unique:categories,type',
        'photos.*' => 'image|max:1024',
        'vehicle.make' => 'required',
        'vehicle.model' => 'required',
        'vehicle.lic' => 'required',
        'vehicle.per_day' => 'required',
        'vehicle.per_week' => 'required',
        'vehicle.color' => 'required',
        'vehicle.category' => 'required',
        'vehicle.capacity' => 'required'

    ];
    protected $messages = [
        'newCategory.required' => 'Category field cannot be empty!',
        'newCategory.unique' => 'Duplicate Entry!',
    ];
 
    public function updatedNewCategory($newCategory)
    {
        $this->validateOnly("newCategory");
    }
    public function addCategory(){
        
        $cat = new ModelsCategory();
        $cat->type = $this->newCategory;
        $cat->save();
        return $cat->id;
    }

    public function addVehicle(){
        $this->validateOnly("photos");
        // foreach ($this->photos as $photo) {
        //     $photo->store('photos');
        // }

        if($this->vehicle['category'] == "new_category"){
            $this->validateOnly("newCategory");
            $categoryId = $this->addCategory();
            $this->test = $categoryId;
        }else{
            $categoryId = $this->vehicle['category'];
            $this->test = $categoryId;
        }

        
        // $this->validate();

        $v = new Vehicles();
        $v->category_id = $categoryId;
        $v->license_no = $this->vehicle['lic'];
        $v->Make = $this->vehicle['make'];
        $v->Model = $this->vehicle['model'];
        $v->capacity = $this->vehicle['capacity'];
        $v->color = $this->vehicle['color'];
        $v->year = $this->vehicle['year'];
        $v->price = $this->vehicle['per_day'];
        $v->save();
        \activitylogger(['Vehicle', $v->id], "Added a new vehicle ".$this->vehicle['lic']);
        $this->resetExcept("allCategory");
        $this->dispatchBrowserEvent('msg', [
            'type' => 'success',  
            'message' => 'Successfully saved', 
            'position' => 'top-end'
        ]);
        $this->view = false;
    }

    public function deleteVehicle($id)
    {
        Vehicles::destroy($id);
    }
}   

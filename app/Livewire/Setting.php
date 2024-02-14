<?php

namespace App\Livewire;

use App\Models\Title;
use Livewire\Component;
use Livewire\WithPagination;

class Setting extends Component
{
    use WithPagination;
    public $title;

    
    public function createTitle(){
        $this->validate([
            "title"=>'required'
        ]);
        Title::create([
            "title" => $this->title
        ]);

        $this->reset(['title']);
        request()->session()->flash('success','Title Created successfully!!!');
       
    }
    
    public function delete($id){

        $deleteId = Title::find($id);
        $deleteId->delete();
        session()->flash('success','Title deleted');

    }
    
     public function render()
    {
       $titles=Title::paginate(5); 
        return view('livewire.setting',compact('titles'));
    }
}

<?php

namespace App\Http\Livewire;

use App\Models\Image;
use Livewire\Component;
use Livewire\WithFileUploads;


class Images extends Component
{
    use WithFileUploads;
    public $images = [];
    public function uploadimages(){
        foreach($this->images as $key=>$image){
            $this->images[$key] = $image->store('images','public');
        }
        $this->images = json_encode($this->images);
        Image::create(['file_name'=>$this->images]);
        session()->flash('message','! تم رفع الصور بنجاح');
        $this->emit('imagesuploaded');
    }

    public function render()
    {
        return view('livewire.images');
    }
}

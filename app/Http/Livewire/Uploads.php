<?php

namespace App\Http\Livewire;

use App\Models\Upload;
use Livewire\Component;
use Livewire\WithFileUploads;
class Uploads extends Component
{

    use WithFileUploads;
    public $title;
    public $file_name;
    public function fileupload(){
        $validatedData = $this->validate([
            'title' => 'required',
            'file_name' => 'required',
        ]);
        $filename = $this->file_name->store('files','public');
        $validatedData['file_name'] = $filename;
        Upload::create($validatedData);
        session()->flash('message','تم رفع الملف بنجاح !');
        $this->emit('fileuploaded');
    }
    public function render()
    {
        return view('livewire.uploads');
    }
}

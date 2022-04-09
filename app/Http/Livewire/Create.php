<?php

namespace App\Http\Livewire;
use Livewire\WithFileUploads;
use Livewire\Component;
use App\Models\Doc;
use Carbon\Carbon;
class Create extends Component
{
    use WithFileUploads;
    public $introd;
    public $link_introd;
    public $copy_right;
    public $copy_right_link;
    public $image_cover;
    public $image_alt;
    public $doc_name;
    public $doc_title;
    public $doc_color;

    public function mount(){
        $setting = Doc::find(1);
        if($setting){
            $this->introd = $setting->introd;
            $this->link_introd = $setting->link_introd;
            $this->link = $setting->link;
            $this->link_subject = $setting->link_subject;
            $this->copy_right = $setting->copy_right;
            $this->copy_right_link = $setting->copy_right_link;
            $this->image = $setting->image;
            $this->image_alt = $setting->image_alt;
            $this->doc_name = $setting->doc_name;
            $this->doc_title = $setting->doc_title;
            $this->doc_color = $setting->doc_color;
           
        }
    }
    public function updated($fields){
        $this->validateOnly($fields,[
            'introd' => 'required',
            'link_introd' => 'required',
            'copy_right' => 'required',
            'copy_right_link' => 'required',
            'image_alt' => 'required',
            'doc_name' => 'required',
            'doc_title' => 'required',
            'doc_color' => 'required',
            'image_cover' => 'image|max:2048',
        ]);
    }
    public function storedoc(){
        $this->validate([
            'introd' => 'required',
            'link_introd' => 'required',
            'copy_right' => 'required',
            'copy_right_link' => 'required',
            'image_alt' => 'required',
            'doc_name' => 'required',
            'doc_title' => 'required',
            'doc_color' => 'required',
            'image_cover' => 'image|max:2048',
        ]);
        $setting = Doc::find(1);
        if(!$setting){
            $setting = new Doc();
        }
        $setting->introd = $this->introd;
        $setting->link_introd = $this->link_introd;
        $setting->copy_right = $this->copy_right;
        $setting->copy_right_link = $this->copy_right_link;
        $setting->image_alt = $this->image_alt;
        $setting->doc_name = $this->doc_name;
        $setting->doc_title = $this->doc_title;
        $setting->doc_color = $this->doc_color;
        $setting->image_cover = $this->image_cover->store('cover','public');
        $setting->save();

        session()->flash('message','تم حفظ التعديلات بنجاح !');
        
        
    }
    public function render()
    {
        
        return view('livewire.create');
    }
}

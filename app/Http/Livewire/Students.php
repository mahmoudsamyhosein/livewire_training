<?php

namespace App\Http\Livewire;

use App\Models\Student;
use Livewire\Component;
use Livewire\WithPagination;

class Students extends Component
{
    use WithPagination;
	public $firstname;
	public $lastname;
	public $email;
	public $phone;
	public $sid;
	public $searchTerm;


	public function resetInputFields()
	{
		$this->firstname = '';
		$this->lastname = '';
		$this->email = '';
		$this->phone = '';        
	}

	public function store()
	{
		$validatedData = $this->validate([
			'firstname' => 'required',
			'lastname' => 'required',
			'email' => 'required|email',
			'phone' => 'required'
		]);

		Student::create($validatedData);
		session()->flash('message','تم أنشاء التلميذ بنجاح !');
		$this->resetInputFields();
		$this->emit('studentAdded');
	}
   
		public function edit($id)
	{
		$this->updateMode = true;
		$student = Student::find($id);
		$this->firstname = $student->firstname;
		$this->lastname = $student->lastname;
		$this->email = $student->email;
		$this->phone = $student->phone;   
		$this->sid = $student->id;     
	}

	public function update()
	{
		$this->validate([
			'firstname' => 'required',
			'lastname' => 'required',
			'email' => 'required|email',
			'phone' => 'required'
		]);
		if($this->sid){
			$student = Student::find($this->sid);
			$student->update([
				'firstname' => $this->firstname,
				'lastname' => $this->lastname,
				'email' => $this->email,
				'phone' => $this->phone
			]);
			$this->updateMode = false;
			session()->flash('message','تم تحديث بيانات التلميذ بنجاح !');
			$this->resetInputFields();
			$this->emit('studentUpdated');
		}
	}

	public function delete($id)
	{
		if($id)
		{
			Student::find($id)->delete();
			session()->flash('message','تم حذف التلميذ بنجاح !');
		}
	}
	public function render()
	{
		$search = '%' . $this->searchTerm. '%';
		$students  = Student::where('firstname','LIKE',$search)
					->orWhere('lastname','LIKE',$search)
					->orWhere('email','LIKE',$search)
					->orWhere('phone','LIKE',$search)
					->orderBy('id','DESC')->paginate(12);        
		return view('livewire.students',['students'=>$students]);
	}
}

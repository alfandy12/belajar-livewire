<?php

namespace App\Http\Livewire\Belajar;

use App\Models\Contact;
use Livewire\Component;
use Livewire\WithPagination;

class Input extends Component
{
    use WithPagination;

    public $name = '';
    public $no_handphone = '';
    public $kartu = '';
    public $search = '';

    public $kartu1 = 'axis';
    public $kartu2 = 'byu';
    public $kartu3 = 'three';

    protected $rules = [
        'name' => 'required',
        'no_handphone' => 'required|min:12|unique:contacts|numeric',
        'kartu' => 'required'
    ];

    public function submit()
    {
        $this->validate();

        Contact::create([
            'name' => $this->name,
            'no_handphone' => $this->no_handphone,
            'kartu' => $this->kartu,
        ]);
        session()->flash('message', 'contact successfully added.');
        $this->reset();
    }
    public function render()
    {
        $this->kartu = 
        $search = '%'.$this->search.'%';
        $contacts = Contact::where('name', 'like', $search)->orWhere('kartu', $this->kartu)->paginate(4);
        return view('livewire.belajar.input', compact('contacts'));
    }
}

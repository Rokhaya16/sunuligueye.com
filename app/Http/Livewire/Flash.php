<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Flash extends Component
{
	protected $listeners = ['flash-message' => 'setFlashMessage'];
	 public $message;
	 public $type='success';
	  public $styleByType = [
        'success' => 'bg-green-100 border-green-700 text-green-700',
        'info' => 'bg-blue-100 border-blue-700 text-blue-700',
        'warning' => 'bg-yellow-100 border-yellow-700 text-yellow-700',
        'error' => 'color:red',
    ];
     public function setFlashMessage($message, $type)
    {
        $this->message = $message;
        $this->type = $type;
        $this->dispatchBrowserEvent('flash');
    }
    public function render()
    {
        return view('livewire.flash');
    }
}

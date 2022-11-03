<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Callback;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Callbackform extends Component
{
    use LivewireAlert;

    public $phone;

    protected $rules = [
        'phone'                 => 'required|min:10|max:12',
    ];

    public function submit()
    {
        $this->validate();

        // Execution doesn't reach here if validation fails.

        $data = array(
            'phone'                 => $this->phone,
        );

        $customer = Callback::create($data);

        if($customer){
            $this->alert('success', 'Successfully Updated!', [
                'position' => 'center',
                'timer' => 3000,
                'toast' => true,
            ]);
            $this->phone  = "";
        }
    }

    public function render()
    {
        return view('livewire.callbackform');
    }
}

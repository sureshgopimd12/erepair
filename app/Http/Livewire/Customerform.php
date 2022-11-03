<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Customer;
use Livewire\WithFileUploads;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Customerform extends Component
{
    use WithFileUploads;
    use LivewireAlert;

    public $name;
    public $phone;
    public $address;
    public $electronic_appliance;
    public $problem_description;
    public $attach_image;
    public $pincode;

    protected $rules = [
        'name'                  => 'required|min:5|max:30',
        'phone'                 => 'required|min:10|max:12',
        'address'               => 'required',
        'electronic_appliance'  => 'required',
        'problem_description'   => 'required',
    ];

    public function submit()
    {
        $this->validate();

        // Execution doesn't reach here if validation fails.

        if ($this->attach_image) {
            $this->validate([
                'attach_image' => 'required|image|mimes:jpg,jpeg,png,svg,gif|max:2048',
            ]);
            $data = array(
                'name'                  => $this->name,
                'phone'                 => $this->phone,
                'address'               => $this->address,
                'electronic_appliance'  => $this->electronic_appliance,
                'problem_description'   => $this->problem_description,
                'attach_image'          => $this->attach_image->store('attach_image', 'public')
            );
        } else {
            $data = array(
                'name'                  => $this->name,
                'phone'                 => $this->phone,
                'address'               => $this->address,
                'electronic_appliance'  => $this->electronic_appliance,
                'problem_description'   => $this->problem_description,
            );
        }

        $customer = Customer::create($data);

        if ($customer) {
            $this->alert('success', 'Successfully Updated!', [
                'position' => 'center',
                'timer' => 3000,
                'toast' => true,
            ]);
            $this->name                 = "";
            $this->phone                = "";
            $this->address              = "";
            $this->electronic_appliance = "Freezers";
            $this->problem_description  = "";
        }
    }

    public function render()
    {
        return view('livewire.customerform');
    }
}

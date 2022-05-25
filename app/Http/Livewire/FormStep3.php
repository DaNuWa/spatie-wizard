<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Spatie\LivewireWizard\Components\StepComponent;

class FormStep3 extends StepComponent
{

    public function next(){
        $this->nextStep();
    }

    public function render()
    {
        return view('livewire.form-step3');
    }
}

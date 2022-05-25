<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Spatie\LivewireWizard\Components\WizardComponent;

class MainFormWizard extends WizardComponent
{

    public function steps() : array
    {
        return [
            FormStep1::class,
            FormStep2::class,
            FormStep3::class,
        ];
    }


}

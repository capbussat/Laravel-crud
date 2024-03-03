<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

/* this is the class matches the component <x-input /> */
class input extends Component
{

    public $placeholder;
    public $value;
    public $label;

    /**
     * Create a new component instance.
     */
    public function __construct($placeholder ='Escriu aqui', $value='', $label='Etiqueta')
    {
        $this->placeholder = $placeholder;
        $this->value = $value;
        $this->label = $label;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input');
    }
}

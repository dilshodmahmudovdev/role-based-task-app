<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{

    public $type;
    public $placeholder;
    public $id;
    public $class;
    /**
     * Create a new component instance.
     */
    public function __construct($type, $placeholder = '', $id = '', $class = '')
    {
        $this->type = $type;
        $this->placeholder = $placeholder;
        $this->id = $id;
        $this->class = $class;
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input');
    }
}

<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class status extends Component
{

    public $type;
    public $content;
    /**
     * Create a new component instance.
     */
    public function __construct($content, $type = 'default')
    {
        $this->content = $content;

        switch ($type){
            case 'warning':
                return $this->type = 'bg-warning text-warning border-warning';
                break;
            case 'danger':
                return $this->type = 'bg-danger text-danger border-danger';
                break;
            case 'success':
                return $this->type = 'bg-success text-success border-success';
                break;
            default:
                return $this->type = 'bg-white text-white border-white';
                break;
        }
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.status');
    }
}

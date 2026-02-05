<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Nette\Utils\Type;

class alertaLogica extends Component
{
    public $estilo;
    public $title;


    public function __construct($type = 'success', $title = '')
    {
        switch ($type) {
            case 'info':
                $this->estilo = 'text-blue-800 bg-blue-100';
                break;

            case 'danger':
                $this->estilo = 'text-red-800 bg-red-100';
                break;

            case 'success':
                $this->estilo = 'text-green-800 bg-green-100';
                break;

            case 'warning':
                $this->estilo = 'text-yellow-800 bg-yellow-100';
                break;

            case 'neutral':
                $this->estilo = 'text-gray-800 bg-gray-100';
                break;

            default:
                $this->estilo = 'text-blue-800 bg-blue-100';
                break;
        }
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alerta-logica');
    }
}

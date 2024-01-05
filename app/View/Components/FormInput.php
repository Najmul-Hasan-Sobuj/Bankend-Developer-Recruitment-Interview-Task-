<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FormInput extends Component
{
    /**
     * Create a new component instance.
     * @param string $label
     * @param string $name
     * @param string|null $value
     * @param bool $required
     * @param string $type
     * @param string $colWidth
     */
    public function __construct(
        public  $label,
        public  $name,
        public  $value    = null,
        public  $required = false,
        public  $type     = 'text',
        public  $colWidth = 'col-md-4'
    ) {
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|Closure|string
     */
    public function render(): View|Closure|string
    {
        return match ($this->type) {
            'select'   => view('components.select-input'),
            'textarea' => view('components.textarea-input'),
            default    => view('components.form-input')
        };
    }
}

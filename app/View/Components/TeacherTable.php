<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TeacherTable extends Component
{

    public $teachers;

    public function __construct($teachers)
    {
        $this->teachers = $teachers;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.teacher-table');
    }
}

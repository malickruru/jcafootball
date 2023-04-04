<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Social extends Component
{
    /**
     * Create a new component instance.
     */

    public $resaux = [
        [
            "icon" => "<i class='bx bxl-google'></i>",
            "url" => "mailto:jcafootball1932@gmail.com"
        ],[
            "icon" => "<i class='bx bxl-instagram'></i>",
            "url" => "https://www.instagram.com/jeunesse_club_abidjan/?igshid=YmMyMTA2M2Y="
        ]
        ];
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.social');
    }
}

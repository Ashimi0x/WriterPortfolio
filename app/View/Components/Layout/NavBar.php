<?php

namespace App\View\Components\Layout;

use Illuminate\View\Component;

class NavBar extends Component
{   
    Public array $navigationItems = [];

    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->navigationItems = [
            ['Label' =>'About', 'href' => '#about'],
            ['Label' =>'Strapi', 'href' => '#strapi'],
            ['Label' =>'Hashnode', 'href' => '#Hashnode'],
            ['Label' =>'Freecodecamp', 'href' => '#Freecodecamp'],
            ['Label' =>'Contact', 'href' => '#Contact'],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('layout.navbar');
    }
}

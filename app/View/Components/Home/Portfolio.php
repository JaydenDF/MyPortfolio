<?php

namespace App\View\Components\Home;

use Illuminate\Support\Arr;
use Illuminate\View\Component;

class Portfolio extends Component
{
    public array $items = [];
    public array $tabs = [];
    /**
     * Create a new component instance.
     *S
     * @return void
     */
    public function __construct()
    {
        $this->items = [
            [
                'category' => ['portfolio', 'laravel'],
                'title' => 'this portfolio',
                'image' => url('/images/portfolio_ss.jpg'),
                'github' => 'https://github.com/JaydenDF/MyPortfolio'
            ],
            [
                'category' => ['logo', 'image'],
                'title' => 'My Logo',
                'image' => url('/images/galaxy_logo.png'),
                'github' => 'https://github.com/JaydenDF/MyLogo'
            ],
            [
                'category' => ['school', 'groupProject', 'C#', '.netCore'],
                'title' => 'CCSB (A project from school)',
                'image' => url('/images/logo_ccsb.png'),
                'github' => 'https://github.com/NikkivB/CCSB_Groepje5'
            ],
            [
                'category' => ['python', 'learning', 'Advent of Code'],
                'title' => 'learning python (advent of code)',
                'image' => url('/images/521cd034-advent-of-code-2021.jpg'),
                'github' => 'https://github.com/JaydenDF/AoC_py_2021'
            ],
            [
                'category' => ['c++', 'learning', 'Advent of Code'],
                'title' => 'learning c++ (advent of code)',
                'image' => url('/images/521cd034-advent-of-code-2021.jpg'),
                'github' => 'https://github.com/JaydenDF/AoC-2020'
            ],
            [
                'category' => ['laravel', 'groupProject'],
                'title' => 'learning c++ (advent of code)',
                'image' => url('/images/an idea.png'),
                'github' => 'https://github.com/cedricfortuin/opendiscovery'
            ]
        ];

        $this->tabs = Arr::flatten(Arr::pluck($this->items, 'category'));
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.portfolio');
    }
}

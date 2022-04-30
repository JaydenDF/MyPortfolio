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
        //TODO: fill in with items im proud off :)
        $this->items = [
            [
                'category' => ['portfolio', 'laravel'],
                'title' => 'this portfolio',
                'image' => url('/images/galaxy_logo.png'),
                'github' => 'https://github.com/JaydenDF/MyPortfolio'
            ],
            [
                //2 and so on
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

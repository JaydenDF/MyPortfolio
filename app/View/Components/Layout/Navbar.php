<?php

namespace App\View\Components\Layout;

use Illuminate\View\Component;

class Navbar extends Component
{
    public array $navigationItems = [];
    public array $navigationProjects = [];

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->navigationItems = [
            [
                'label' => 'Home',
                'href' => route('home'),
            ],
            [
                'label' => 'About',
                'href' => route('home' ,'#about'),
            ],
            [
                'label' => 'Projects',
                'href' => route('home' ,'#portfolio'),
            ]
        ];

        $this->navigationProjects = [
            [
            'label' => 'Final Approach',
            'href' => route('project', 'finalapproach')
            ],
            [
                'label' => 'Stella Rush',
                'href' => route('project', 'stellarush')
            ],
            [
                'label' => 'Unity Platformer',
                'href' =>  route('project', 'unityplatformer')
            ],
            [
                'label' => 'Godot Wave Survival Game',
                'href' =>  route('project', 'godotWaveSurvivalGame')
            ],
            [
                'label' => 'Substances',
                'href' =>  route('project', 'Substances')
            ],
            [
                'label' => 'VFX',
                'href' =>  route('project', 'VFX')
            ]

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

<?php

use SleepingOwl\Admin\Navigation\Page;
return [
//    [
//        'title' => 'Dashboard',
//        'icon'  => 'fa fa-dashboard',
//        'url'   => route('admin.dashboard'),
//    ],
//
    [
        'title' => 'Главная страница',
        'icon' => 'fa fa-group',
        'priority' => '1',
        'pages' =>
            [
                (new Page(\App\Models\About::class))
                    ->setIcon('fa fa-user')
                    ->setPriority(1),

                (new Page(\App\Models\Slide::class))
                    ->setIcon('fa fa-user')
                    ->setPriority(2),
                (new Page(\App\Models\Team::class))
                    ->setIcon('fa fa-user')
                    ->setPriority(3),

            ]
    ],
    AdminSection::addMenuPage(\App\Models\Portfolio::class)->setIcon('fa fa-bullhorn')->setPriority(100),
    AdminSection::addMenuPage(\App\Models\Service::class)->setIcon('fa fa-newspaper-o')->setPriority(100),
    AdminSection::addMenuPage(\App\Models\Malls::class)->setIcon('fa fa-bank')->setPriority(100),
    AdminSection::addMenuPage(\App\Models\Floor::class)->setIcon('fa fa-bank')->setPriority(100),
    AdminSection::addMenuPage(\App\Models\Place::class)->setIcon('fa fa-bank')->setPriority(100),

];
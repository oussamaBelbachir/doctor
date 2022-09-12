<?php

namespace App\Main;

class SideMenu
{
    /**
     * List of side menu items.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public static function menu()
    {
        return [
            'dashboard' => [
                'icon' => 'home',
                'title' => 'Dashboard',
                'route_name' => 'dashboard'
            ],
            'Docteurs' => [
                'icon' => 'box',
                'title' => 'Docteurs',
                'sub_menu' => [
                    'side-menu1' => [
                        'icon' => 'box',
                        'route_name' => 'admin.doctors',
                        'title' => 'Liste des docteurs'
                    ],
                    'simple-menu1' => [
                        'icon' => '',
                        'route_name' => 'admin.addDoctor',
                        'title' => 'Ajouter un docteur'
                    ],
                ]
            ],
            'spécialités' => [
                'icon' => 'box',
                'title' => 'spécialités',
                'sub_menu' => [
                    'side-menu2' => [
                        'icon' => 'box',
                        'route_name' => 'admin.specialities',
                        'title' => 'Liste des spécialités'
                    ],
                    'simple-menu2' => [
                        'icon' => '',
                        'route_name' => 'test',
                        'title' => 'Ajouter une spécialité'
                    ],
                ]
            ],
            'médicaments' => [
                'icon' => 'home',
                'title' => 'Médicaments',
                'route_name' => 'test'
            ],
            'finances' => [
                'icon' => 'home',
                'title' => 'finances',
                'route_name' => 'test'
            ],
            'logout' => [
                'icon' => 'toggle-right',
                'title' => 'Déconnexion',
                'route_name' => 'test'
            ],
        ];
    }

    public static function menuDoctor()
    {
        return [
            'dashboard' => [
                'icon' => 'home',
                'title' => 'Dashboard',
                'route_name' => 'dashboard'
            ],
            'rendez-vous' => [
                'icon' => 'box',
                'title' => 'rendez-vous',
                'sub_menu' => [
                    'side-menu' => [
                        'icon' => 'box',
                        'route_name' => 'doctor.appointements',
                        'title' => 'Liste des rendez-vous'
                    ],
                    'simple-menu' => [
                        'icon' => '',
                        'route_name' => 'test',
                        'title' => 'Ajouter un rendez-vous'
                    ],
                ]
            ],
 

 
            'patients' => [
                'icon' => 'home',
                'title' => 'patients',
                'route_name' => 'test'
            ],
            'finances' => [
                'icon' => 'home',
                'title' => 'finances',
                'route_name' => 'test'
            ],
            'logout' => [
                'icon' => 'toggle-right',
                'title' => 'Déconnexion',
                'route_name' => 'test'
            ],
        ];
    }
}

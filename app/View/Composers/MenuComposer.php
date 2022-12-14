<?php

namespace App\View\Composers;

use App\Main\SideMenu;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class MenuComposer {
        /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */

    public function getSideMenu(){
        if(Auth::check()){
            $role = Auth::user()->role;
            if($role == "2"){
                return SideMenu::menuDoctor();
            }else{
                return SideMenu::menu();
            }           
        }else{
            return [];
        }

     }

     public function compose(View $view){
        $pageName = request()->route()->getName();
        $layout = $this->layout($view);
        //dd($layout);
        $activeMenu = $this->activeMenu($pageName, $layout);


        //if (!is_null(request()->route())) {
            $view->with('side_menu', $this->getSideMenu());
            $view->with('first_level_active_index', $activeMenu['first_level_active_index']);
            $view->with('second_level_active_index', $activeMenu['second_level_active_index']);
            $view->with('third_level_active_index', $activeMenu['third_level_active_index']);
        //}
     }


     public function layout($view)
     {
         if (isset($view->layout)) {
             return $view->layout;
         } else if (request()->has('layout')) {
             return request()->query('layout');
         }

         return 'side-menu';
     }

     /**
      * Determine active menu & submenu.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\Response
      */
     public function activeMenu($pageName, $layout)
     {
         $firstLevelActiveIndex = '';
         $secondLevelActiveIndex = '';
         $thirdLevelActiveIndex = '';
         $menu = $this->getSideMenu();

    
             foreach ($menu as $menuKey => $menu) {
                 if ($menu !== 'devider' && isset($menu['route_name']) && $menu['route_name'] == $pageName && empty($firstPageName)) {
                     $firstLevelActiveIndex = $menuKey;
                 }

                 if (isset($menu['sub_menu'])) {
                     foreach ($menu['sub_menu'] as $subMenuKey => $subMenu) {
                         if (isset($subMenu['route_name']) && $subMenu['route_name'] == $pageName && $menuKey != 'menu-layout' && empty($secondPageName)) {
                             $firstLevelActiveIndex = $menuKey;
                             $secondLevelActiveIndex = $subMenuKey;
                         }

                         if (isset($subMenu['sub_menu'])) {
                             foreach ($subMenu['sub_menu'] as $lastSubMenuKey => $lastSubMenu) {
                                 if (isset($lastSubMenu['route_name']) && $lastSubMenu['route_name'] == $pageName) {
                                     $firstLevelActiveIndex = $menuKey;
                                     $secondLevelActiveIndex = $subMenuKey;
                                     $thirdLevelActiveIndex = $lastSubMenuKey;
                                 }
                             }
                         }
                     }
                 }
             }            

         return [
             'first_level_active_index' => $firstLevelActiveIndex,
             'second_level_active_index' => $secondLevelActiveIndex,
             'third_level_active_index' => $thirdLevelActiveIndex
         ];
     }
}

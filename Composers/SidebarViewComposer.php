<?php namespace Modules\Place\Composers;

use Illuminate\Contracts\View\View;
use Modules\Core\Composers\BaseSidebarViewComposer;

class SidebarViewComposer extends BaseSidebarViewComposer
{
    public function compose(View $view)
    {
        $view->items->put('place', [
            'weight' => 10,
            'request' => "*/$view->prefix/place/places*",
            'route' => 'admin.place.place.index',
            'icon-class' => 'fa fa-map-marker',
            'title' => 'Places',
            'permission' => $this->auth->hasAccess('place.places.index')
        ]);
    }
}

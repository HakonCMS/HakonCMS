{{ Html::Hook("Core::Admin::Template::Menu::Item::Before", "dashboard") }}
<li class="active treeview">
    <a href="{{ URL::Route('hakon::dashboard') }}">
        <i class="fa fa-dashboard"></i> <span>Dashboard</span></i>
    </a>
</li>
{{ Html::Hook("Core::Admin::Template::Menu::Item::After", "dashboard") }}
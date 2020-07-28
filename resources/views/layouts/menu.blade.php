<li class="{{ Request::is('kolegijs*') ? 'active' : '' }}">
    <a href="{{ route('kolegijs.index') }}"><i class="fa fa-edit"></i><span>Kolegijs</span></a>
</li>

<li class="{{ Request::is('predavanjes*') ? 'active' : '' }}">
    <a href="{{ route('predavanjes.index') }}"><i class="fa fa-edit"></i><span>Predavanjes</span></a>
</li>


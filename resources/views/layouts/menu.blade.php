<li class="{{ Request::is('kolegijs*') ? 'active' : '' }}">
    <a href="{{ route('kolegijs.index') }}"><i class="fa fa-edit"></i><span>Kolegiji</span></a>
</li>

<li class="{{ Request::is('predavanjes*') ? 'active' : '' }}">
    <a href="{{ route('predavanjes.index') }}"><i class="fa fa-edit"></i><span>Predavanja</span></a>
</li>

<li class="{{ Request::is('students*') ? 'active' : '' }}">
    <a href="{{ route('students.index') }}"><i class="fa fa-edit"></i><span>Students</span></a>
</li>


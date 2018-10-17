<div class="col-md-2 nav-item">

    @role('admin')
    <strong>Пользователи</strong>
    <ul>
        <li><a href="{{ url('home') }}">- Пользователи</a></li>
        <li><a href="{{ url('roles') }}">- Роли</a></li>
    </ul>
    @endrole

    @role('admin|writer')
    <strong>Новости</strong>
    <ul>
        <li><a href="{{ url('news') }}">- Новости</a></li>
    </ul>
    @endrole
</div>
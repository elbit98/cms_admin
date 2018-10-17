<div class="container-fluid navbar">
    <div class="wrap-left-header">
        <div class="title-app">Test App</div>
        <div class="welcome-text">Добро пожаловать</div>
    </div>
    <div class="wrap-right-header">
        <div class="user-information">
            <div class="user-data">
                <div class="user-name">{{ Auth::user()->full_name }}</div>
                <div class="user-role">
                    @foreach (Auth::user()->getRoleNames() as $role)
                        {{ $role }}
                    @endforeach
                </div>
            </div>
            <div class="user-photo">
                <img src="{{ asset('img/doc.jpg') }}" alt="">
            </div>
        </div>
    </div>
</div>

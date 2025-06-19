<div>
    <main id="profile">
        <div class="container">
            <h1 class="page-name">Профиль</h1>
            <div class="user-data-container">
                <div class="user-data">
                    <h2 class="name">{{ Auth::user()->name }}</h2>
                    <h2 class="surname">{{ Auth::user()->surname }}</h2>
                    <hr>
                    <h2 class="role">{{ Auth::user()->role()->first()->name }}</h2>
                </div>
                <div class="user-actions">
                    @if (Auth::user()->role()->first()->name != "user")
                        <button class="btn" wire:click="toRegister">Добавить пользователя</button>
                    @endif
                    <button class="btn" wire:click="logout">Выйти</button>
                </div>
            </div>
        </div>
    </main>
</div>
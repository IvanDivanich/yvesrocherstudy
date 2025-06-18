<div>
    <main id="profile">
        <div class="container">
            <h1 class="page-name">Профиль</h1>
            <div class="user-data-container">
                <div class="user-data">
                    <h2 class="name">name</h2>
                    <h2 class="surname">surname</h2>
                    <hr>
                    <h2 class="role">role</h2>
                </div>
                <div class="user-actions">
                    @if ($role == "admin")
                        <button class="btn" wire:click="toRegister">Добавить пользователя</button>
                    @endif
                    <button class="btn">Выйти</button>
                </div>
            </div>
        </div>
    </main>
</div>
<div>
    <main id="login">
        <div class="container">
            <h1 class="page-name">Авторизация</h1>
            <div class="form">
                <div>
                    <label for="login" class="field-title">Логин</label>
                    <input wire:model="login" class="input" type="text" name="login" required>
                    @error('login') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div>
                    <label for="password" class="field-title">Пароль</label>
                    <input wire:model="password" class="input" type="password" name="password"  required>
                    @error('password') <span class="error">{{ $message }}</span> @enderror
                </div>
                
                <button class="btn" wire:click="authenticate">Войти</button>
            </div>
        </div>
    </main>
</div>
</div>
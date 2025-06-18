<div>
    <main id="register">
        <div class="container">
            <h1 class="page-name">Регистрация</h1>
            <div class="form">
                <div>
                    <label for="name" class="field-title">Имя</label>
                    <input wire:model="name" class="input" type="text" name="name" id="name" required>
                    @error('name') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div>
                    <label for="surname" class="field-title">Фамилия</label>
                    <input wire:model="surname" class="input" type="text" name="surname" id="surname" required>
                    @error('surname') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div>
                    <label for="email" class="field-title">Email</label>
                    <input wire:model="email" class="input" type="email" name="email" id="email" required>
                    @error('email') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div>
                    <label for="password" class="field-title">Пароль</label>
                    <input wire:model="password" class="input" type="password" name="password" id="password" required>
                    @error('password') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div>
                    <label for="phone" class="field-title">Телефон</label>
                    <input wire:model="phone" class="input" type="tel" name="phone" id="phone">
                    @error('phone') <span class="error">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label for="post" class="field-title">Должность</label>
                    <input wire:model="post" class="input" type="text" name="post" id="post">
                    @error('post') <span class="error">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label for="employmentDate" class="field-title">Дата приема на работу</label>
                    <input wire:model="employmentDate" class="input" type="date" name="employmentDate"
                        id="employmentDate">
                    @error('employmentDate') <span class="error">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label for="dateOfBirth" class="field-title">Дата рождения</label>
                    <input wire:model="dateOfBirth" class="input" type="date" name="dateOfBirth" id="dateOfBirth">
                    @error('dateOfBirth') <span class="error">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label for="role_id" class="field-title">Роль</label>
                    <select wire:model="role_id" class="input" name="role_id" id="role_id">
                        <option value="">Выберите роль</option>
                        @foreach ($roles as $role)
                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                        @endforeach
                    </select>
                    @error('role_id') <span class="error">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label for="shop_id" class="field-title">Магазин</label>
                    <select wire:model="shop_id" class="input" name="shop_id" id="shop_id">
                        <option value="">Выберите магазин</option>
                        @foreach ($shops as $shop)
                            <option value="{{ $shop->id }}">{{ $shop->name }}</option>
                        @endforeach
                    </select>
                    @error('shop_id') <span class="error">{{ $message }}</span> @enderror
                </div>

                <button class="btn" wire:click="createUser">Зарегистрировать</button>
            </div>
        </div>
    </main>
</div>
<div class="popup__auth @error('error') _open @enderror">
    <div class="popup__field auth__field"></div>
    <div class="popup__body">
        <div class="popup__content">
            <div class="popup__close auth__close"></div>
            <div class="popup__title">Вхід до особистого кабінету!</div>
            <form action="{{ route('login') }}" method="POST" class="popup__form form__auth">
                @csrf
                <div class="form__body">
                    <input type="text" name="login" required placeholder="Логін"/>

                    <input
                        type="password"
                        name="password"
                        required
                        placeholder="Пароль"
                    />

                    <label for="teacher">
                        <input type="checkbox" name="is_teacher" id="teacher" value="1"/>Я
                        вчитель</label>

                    <div class="form__message @error('error') _active @enderror">
                        @error('error')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <button class="button" name="auth">Увійти</button>
            </form>
        </div>
    </div>
</div>

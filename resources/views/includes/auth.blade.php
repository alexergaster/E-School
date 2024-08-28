<div class="popup__auth">
    <div class="popup__field auth__field"></div>
    <div class="popup__body">
        <div class="popup__content">
            <div class="popup__close auth__close"></div>
            <div class="popup__title">Вхід до особистого кабінету!</div>
            <form action="/" method="POST" class="popup__form form__auth">
                <div class="form__body">
                    <input type="text" name="login" required placeholder="Логін" />
                    <input
                        type="password"
                        name="password"
                        required
                        placeholder="Пароль"
                    />
{{--                    <label for="teacher"><input type="checkbox" name="teacher" id="teacher"/>Я вчитель</label>--}}

                    <div class="form__message"></div>
                </div>

                <button class="button" name="auth">Увійти</button>
            </form>
        </div>
    </div>
</div>

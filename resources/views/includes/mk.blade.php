<div class="popup popup__mk">
    <div class="popup__field"></div>
    <div class="popup__body">
        <div class="popup__content">
            {{--TODO: add preloader--}}
            {{--            <div class="loading _hidden">--}}
            {{--                <div class="loadingio-spinner-reload-2by998twmg8">--}}
            {{--                    <div class="ldio-yzaezf3dcmj">--}}
            {{--                        <div>--}}
            {{--                            <div></div>--}}
            {{--                            <div></div>--}}
            {{--                            <div></div>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            </div>--}}
            <div class="popup__close"></div>
            <div class="popup__title">Реєстрація на майстер клас!</div>
            <form action="/" method="POST" class="popup__form">
                <div class="form__body">
                    <input
                        type="text"
                        placeholder="Ваше ім'я та прізвище*"
                        name="name_parent"
                        class="form__input"
                        required
                    />
                    <input
                        type="text"
                        placeholder="Ваш номер телефону*"
                        name="phone_parent"
                        class="form__input"
                        required
                    />
                    <input
                        type="text"
                        placeholder="Ім'я дитини та прізвище*"
                        name="name_child"
                        class="form__input"
                        required
                    />
                    <input
                        type="number"
                        placeholder="Вік дитини*"
                        name="age_child"
                        class="form__input"
                        required
                    />

                    <p>На курс(и) по:</p>

                    @foreach($programs as $program)
                        <label>
                            <input type="checkbox" name="courses[]" value="{{ $program->id }}"/>
                            {{ $program->name }}
                        </label>
                    @endforeach

                    <div class="form__error"></div>
                </div>

                <button class="button">Записатись</button>
            </form>
        </div>
    </div>
</div>

<script>
    if (document.querySelector(".popup")) {
        const popup = document.querySelector(".popup");
        const openButtons = document.querySelectorAll(".master_class");
        const formError = document.querySelector(".popup__form .form__error");

        const popupCloses = [
            document.querySelector(".popup__field"),
            document.querySelector(".popup__close"),
        ];

        const buttonsPopup = [...openButtons, ...popupCloses];

        buttonsPopup.forEach((button) => {
            button.addEventListener("click", (e) => {
                e.preventDefault();
                formError.classList.remove("active");
                formError.textContent = "";
                document.body.classList.toggle("menu__active");
                popup.classList.toggle("_open");
            });
        });
    }
</script>

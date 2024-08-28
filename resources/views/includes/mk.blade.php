<div class="popup ">
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
            <form action="" method="POST" class="popup__form form__mk">
                <div class="form__body">
                    <input
                        type="text"
                        placeholder="Ваше ім'я*"
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
                        placeholder="Ім'я дитини*"
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

    if (document.querySelector(".form__mk")) {
        const form = document.querySelector(".form__mk");

        form.addEventListener("submit", (e) => {
            e.preventDefault();

            const data = {
                parent_name: document.getElementsByName('name_parent')[0].value,
                parent_phone: document.getElementsByName('phone_parent')[0].value,
                child_name: document.getElementsByName('phone_parent')[0].value,
                child_age: document.getElementsByName('age_child')[0].value
            }

            fetch('http://127.0.0.1:8000/api/master_class', {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                },
                body: JSON.stringify(data),
            })
                .then((response) => {
                    if (!response.ok) {
                        throw new Error("Network response was not ok");
                    }
                    return response.json();
                })
                .then((data) => {
                    console.log(data);
                })
                .catch((error) => {
                    console.error("Error:", error);
                });

        })




    }
</script>

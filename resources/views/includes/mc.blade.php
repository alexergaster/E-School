<div class="popup ">
    <div class="popup__field"></div>
    <div class="popup__body">
        <div class="popup__content">
            <div class="loading _hidden">
                <div class="loadingio-spinner-reload-2by998twmg8">
                    <div class="ldio-yzaezf3dcmj">
                        <div>
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                    </div>
                </div>
            </div>
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

                    <div class="form__message"></div>
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

        const popupCloses = [
            document.querySelector(".popup__field"),
            document.querySelector(".popup__close"),
        ];

        const buttonsPopup = [...openButtons, ...popupCloses];

        buttonsPopup.forEach((button) => {
            button.addEventListener("click", (e) => {
                e.preventDefault();
                document.body.classList.toggle("menu__active");
                popup.classList.toggle("_open");
            });
        });
    }

    if (document.querySelector(".form__mk")) {
        const form = document.querySelector(".form__mk");
        const formMessage = document.querySelector('.form__message')

        form.addEventListener("submit", (e) => {
            e.preventDefault();

            const preloader = document.querySelector(".loading");
            preloader.classList.remove("_hidden");

            const data = {
                parent_name: document.getElementsByName('name_parent')[0].value,
                parent_phone: document.getElementsByName('phone_parent')[0].value,
                child_name: document.getElementsByName('name_child')[0].value,
                child_age: document.getElementsByName('age_child')[0].value,
                programs: Array.from(document.querySelectorAll('input[name="courses[]"]:checked'))
                    .map(checkbox => checkbox.value),
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
                        return response.json().then((errorData) => {
                            throw errorData;
                        });
                    }
                    return response.json();
                })
                .then((response) => {
                    preloader.classList.add("_hidden");
                    if (response.data) {
                        formMessage.classList.add('_active');
                        formMessage.textContent = 'Ви успішно записались!'
                    }
                })
                .catch((error) => {
                    preloader.classList.add("_hidden");
                    if (error.errors) {
                        formMessage.classList.add('_active');
                        formMessage.innerHTML = Object.values(error.errors)[0];
                    } else {
                        console.error("Error:", error);
                    }
                });
        })
    }
</script>

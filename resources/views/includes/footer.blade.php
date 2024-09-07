<div class="footer__top">
    <div class="container">
        <div class="footer__body">
            <div class="footer__subtitle subtitle">Додатково для тебе</div>
            <div class="footer__title title">Залишились питання?</div>
            <div class="footer__text text">
                Задай їх нам, заповнишви форму або можеш знайти нас у соціальних
                мережах та задати питання там!
            </div>
            <div class="footer__row">
                <form action="/" class="footer__form">
                    <div class="preloader__form">
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
                    <input
                        type="text"
                        placeholder="Введіть номер телефону*"
                        required
                        name="phone"
                    />
                    <textarea
                        name="question"
                        required
                        placeholder="Ваше питання*"
                    ></textarea>
                    <div class="form__message"></div>
                    <button class="footer__button button">Відправити</button>
                </form>
                <div class="footer__contacts">
                    <div class="footer__message">Будемо на зв'язку!</div>
                    <div class="footer__lists">
                        <li>
                            <a href="tel:380991612471">
                                <img src="{{ asset('images/misc/phone.svg') }}" alt=""/>
                                +38(099)-161-24-71
                            </a>
                        </li>
                        <li>
                            <a href="https://www.google.com/maps/place/%D0%A1%D1%83%D0%BC%D1%81%D1%8C%D0%BA%D0%B8%D0%B9+%D0%B4%D0%B5%D1%80%D0%B6%D0%B0%D0%B2%D0%BD%D0%B8%D0%B9+%D1%83%D0%BD%D1%96%D0%B2%D0%B5%D1%80%D1%81%D0%B8%D1%82%D0%B5%D1%82/@50.8922487,34.8410892,18z/data=!4m6!3m5!1s0x4128fe0120892805:0xb837b8752f41a97e!8m2!3d50.8922644!4d34.8418104!16s%2Fm%2F0bmc741?entry=ttu"
                               target="_blank">
                                <img src="{{ asset('images/misc/location.svg') }}" alt=""/>
                                вул. Римського-Корсакова 2, м.Cуми
                            </a>
                        </li>
                        <li>
                            <a href="mailto:ewoodplay@gmail.com">
                                <img src="{{ asset('images/misc/mail.svg') }}" alt=""/>
                                ewoodplay@gmail.com
                            </a>
                        </li>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer__bottom">
    <div class="container">
        <div class="copyright__body">
            <div class="copyright__text">Всі права захищені! © E-School</div>
            <div class="copyright__social">
                <a href="https://www.facebook.com/ESchoolSumy/" target="_blank">
                    <img src="{{ asset('images/misc/facebook.svg') }}" alt=""/>
                </a>
                <a href="https://www.instagram.com/eschoolsumy/" target="_blank">
                    <img src="{{ asset('images/misc/instagram.svg') }}" alt=""/>
                </a>
            </div>
        </div>
    </div>
</div>

<script>
    if (document.querySelector(".footer__form")) {
        const form = document.querySelector('.footer__form');
        const formMessage = document.querySelector(".footer__form .form__message");

        form.addEventListener("submit", (e) => {
            e.preventDefault();

            form.classList.add("_active");

            const phone = form.querySelector("input[name='phone']").value.trim();
            const question = form.querySelector("textarea[name='question']").value.trim();

            const data = {
                phone: phone,
                text: question,
            }

            fetch("http://127.0.0.1:8000/api/contact", {
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
                    form.classList.remove("_active");
                    formMessage.classList.add("_active");
                    formMessage.textContent = data.message;
                })
                .catch((error) => {
                    form.classList.remove("_active");
                    formMessage.classList.add("_active");
                    formMessage.textContent = 'Введіть коректні дані';
                    console.error("Error:", error);
                });
        });
    }
</script>

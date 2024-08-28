if (document.querySelector(".questions__item")) {
    const questions = document.querySelectorAll(".questions__item");
    const questionsBody = document.querySelectorAll(".questions__body");
    const questionsLabel = document.querySelectorAll(".questions__label");

    resizeQuestions(questions, questionsLabel);

    window.addEventListener("resize", () => {
        resizeQuestions(questions, questionsLabel);
    });

    questions.forEach((question, index) => {
        question.addEventListener("click", () => {
            if (question.classList.contains("visible")) {
                question.classList.remove("visible");
                question.style.height = `${questionsLabel[index].offsetHeight}px`;
            } else {
                question.classList.add("visible");
                question.style.height = `${
                    questionsBody[index].offsetHeight + questionsLabel[index].offsetHeight
                }px`;
            }
        });
    });
}

function resizeQuestions(questions, questionsLabel) {
    questions.forEach((question, index) => {
        question.style.height = `${questionsLabel[index].offsetHeight}px`;
    });
}

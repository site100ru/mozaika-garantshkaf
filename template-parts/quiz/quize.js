// Глобальные переменные для ответов
var answer_1, answer_2, answer_3, answer_4, answer_5, answer_6;
var answer_7_1, answer_7_2, answer_7_3, answer_7_4;

// Ждем загрузки DOM
document.addEventListener('DOMContentLoaded', function () {

    // Кнопка "Далее" для вопроса 1
    var btnNext1 = document.getElementById('btn-next-question-1');
    if (btnNext1) {
        btnNext1.addEventListener('click', function (e) {
            e.preventDefault();

            // Проверяем что выбран ответ
            if (!document.getElementById('answer-1-1').checked &&
                !document.getElementById('answer-1-2').checked &&
                !document.getElementById('answer-1-3').checked &&
                !document.getElementById('answer-1-4').checked &&
                !document.getElementById('answer-1-5').checked &&
                !document.getElementById('answer-1-6').checked) {
                alert('Для продолжения выберите тип мебели.');
                return false;
            }

            // Записываем ответ
            answer_1 = document.querySelector('input[name="question-1"]:checked').value;
            document.getElementById('form-answer-1').value = answer_1;

            // Переключаем вопросы
            document.getElementById('question-1').style.display = 'none';
            document.getElementById('question-2').style.display = 'block';
        });
    }

    // Кнопка "Далее" для вопроса 2
    var btnNext2 = document.getElementById('btn-next-question-2');
    if (btnNext2) {
        btnNext2.addEventListener('click', function (e) {
            e.preventDefault();

            // Проверяем что выбран ответ
            if (!document.getElementById('answer-2-1').checked &&
                !document.getElementById('answer-2-2').checked &&
                !document.getElementById('answer-2-3').checked &&
                !document.getElementById('answer-2-4').checked &&
                !document.getElementById('answer-2-5').checked &&
                !document.getElementById('answer-2-6').checked) {
                alert('Для продолжения выберите тип конструкции.');
                return false;
            }

            // Записываем ответ
            answer_2 = document.querySelector('input[name="question-2"]:checked').value;
            document.getElementById('form-answer-2').value = answer_2;

            // Переключаем вопросы
            document.getElementById('question-2').style.display = 'none';
            document.getElementById('question-3').style.display = 'block';
        });
    }

    // Кнопка "Назад" для вопроса 2
    var btnPrev2 = document.querySelector('#question-2 input[value="Предыдущий"]');
    if (btnPrev2) {
        btnPrev2.addEventListener('click', function (e) {
            e.preventDefault();
            document.getElementById('question-2').style.display = 'none';
            document.getElementById('question-1').style.display = 'block';
        });
    }

    // Кнопка "Далее" для вопроса 3 (новый шаг - материал фасада)
    var btnNext3 = document.getElementById('btn-next-question-3');
    if (btnNext3) {
        btnNext3.addEventListener('click', function (e) {
            e.preventDefault();

            // Проверяем что выбран ответ
            if (!document.getElementById('answer-3-1').checked &&
                !document.getElementById('answer-3-2').checked &&
                !document.getElementById('answer-3-3').checked &&
                !document.getElementById('answer-3-4').checked &&
                !document.getElementById('answer-3-5').checked) {
                alert('Для продолжения выберите материал фасада.');
                return false;
            }

            // Записываем ответ
            answer_3 = document.querySelector('input[name="question-3"]:checked').value;
            var formAnswer3 = document.getElementById('form-answer-3');
            if (formAnswer3) {
                formAnswer3.value = answer_3;
            }

            // Переключаем вопросы
            document.getElementById('question-3').style.display = 'none';
            document.getElementById('question-4').style.display = 'block';
        });
    }

    // Кнопка "Назад" для вопроса 3
    var btnPrev3 = document.querySelector('#question-3 input[value="Предыдущий"]');
    if (btnPrev3) {
        btnPrev3.addEventListener('click', function (e) {
            e.preventDefault();
            document.getElementById('question-3').style.display = 'none';
            document.getElementById('question-2').style.display = 'block';
        });
    }

    // Кнопка "Далее" для вопроса 4 (ширина шкафа)
    var btnNext4 = document.getElementById('btn-next-question-4');
    if (btnNext4) {
        btnNext4.addEventListener('click', function (e) {
            e.preventDefault();

            // Проверяем что выбран хотя бы один ответ
            if (!document.getElementById('answer-4-1').checked &&
                !document.getElementById('answer-4-2').checked &&
                !document.getElementById('answer-4-3').checked &&
                !document.getElementById('answer-4-4').checked &&
                !document.getElementById('answer-4-5').checked &&
                !document.getElementById('answer-4-6').checked &&
                !document.getElementById('answer-4-7').checked &&
                !document.getElementById('answer-4-8').checked &&
                !document.getElementById('answer-4-9').checked &&
                !document.getElementById('answer-4-10').checked) {
                alert('Для продолжения выберите ширину шкафа.');
                return false;
            }

            // Собираем все выбранные ответы
            let answer_4_array = [];
            for (let i = 1; i <= 10; i++) {
                if (document.getElementById('answer-4-' + i).checked) {
                    answer_4_array.push(document.getElementById('answer-4-' + i).value);
                }
            }
            answer_4 = answer_4_array.join(', ');
            document.getElementById('form-answer-4').value = answer_4;

            // Переключаем вопросы
            document.getElementById('question-4').style.display = 'none';
            document.getElementById('question-5').style.display = 'block';
        });
    }

    // Кнопка "Назад" для вопроса 4
    var btnPrev4 = document.querySelector('#question-4 input[value="Предыдущий"]');
    if (btnPrev4) {
        btnPrev4.addEventListener('click', function (e) {
            e.preventDefault();
            document.getElementById('question-4').style.display = 'none';
            document.getElementById('question-3').style.display = 'block';
        });
    }

    // Кнопка "Далее" для вопроса 5 (количество дверей)
    var btnNext5 = document.getElementById('btn-next-question-5');
    if (btnNext5) {
        btnNext5.addEventListener('click', function (e) {
            e.preventDefault();

            // Проверяем что выбран ответ
            if (!document.getElementById('answer-5-1').checked &&
                !document.getElementById('answer-5-2').checked &&
                !document.getElementById('answer-5-3').checked &&
                !document.getElementById('answer-5-4').checked &&
                !document.getElementById('answer-5-5').checked &&
                !document.getElementById('answer-5-6').checked) {
                alert('Для продолжения выберите количество дверей.');
                return false;
            }

            // Записываем ответ
            answer_5 = document.querySelector('input[name="question-5"]:checked').value;
            document.getElementById('form-answer-5').value = answer_5;

            // Переключаем вопросы
            document.getElementById('question-5').style.display = 'none';
            document.getElementById('question-6').style.display = 'block';
        });
    }

    // Кнопка "Назад" для вопроса 5
    var btnPrev5 = document.querySelector('#question-5 input[value="Предыдущий"]');
    if (btnPrev5) {
        btnPrev5.addEventListener('click', function (e) {
            e.preventDefault();
            document.getElementById('question-5').style.display = 'none';
            document.getElementById('question-4').style.display = 'block';
        });
    }

    // Кнопка "Далее" для вопроса 6 (специальное предложение)
    var btnNext6 = document.getElementById('btn-next-question-6');
    if (btnNext6) {
        btnNext6.addEventListener('click', function (e) {
            e.preventDefault();

            // Проверяем что выбран ответ
            if (!document.getElementById('answer-6-1').checked &&
                !document.getElementById('answer-6-2').checked &&
                !document.getElementById('answer-6-3').checked &&
                !document.getElementById('answer-6-4').checked) {
                alert('Для продолжения выберите специальное предложение.');
                return false;
            }

            // Записываем ответ
            answer_6 = document.querySelector('input[name="question-6"]:checked').value;
            document.getElementById('form-answer-6').value = answer_6;

            // Переключаем вопросы
            document.getElementById('question-6').style.display = 'none';
            document.getElementById('question-7').style.display = 'block';
        });
    }

    // Кнопка "Назад" для вопроса 6
    var btnPrev6 = document.querySelector('#question-6 input[value="Предыдущий"]');
    if (btnPrev6) {
        btnPrev6.addEventListener('click', function (e) {
            e.preventDefault();
            document.getElementById('question-6').style.display = 'none';
            document.getElementById('question-5').style.display = 'block';
        });
    }

    // Кнопка "Назад" для вопроса 7 (финальный шаг)
    var btnPrev7 = document.querySelector('#question-7 input[value="Предыдущий"]');
    if (btnPrev7) {
        btnPrev7.addEventListener('click', function (e) {
            e.preventDefault();
            document.getElementById('question-7').style.display = 'none';
            document.getElementById('question-6').style.display = 'block';
        });
    }

    // Обработчики для чекбоксов финального шага (question-7)
    // answer-7-1, answer-7-2, answer-7-3, answer-7-4
    for (let i = 1; i <= 4; i++) {
        const checkbox = document.getElementById('answer-7-' + i);
        const hiddenField = document.getElementById('form-answer-7-' + i);

        if (checkbox && hiddenField) {
            // Обработчик изменения чекбокса
            checkbox.addEventListener('change', function () {
                if (this.checked) {
                    hiddenField.value = this.value;
                } else {
                    hiddenField.value = '';
                }
            });

            // Инициализация при загрузке (если чекбокс уже отмечен)
            if (checkbox.checked) {
                hiddenField.value = checkbox.value;
            }
        }
    }
});
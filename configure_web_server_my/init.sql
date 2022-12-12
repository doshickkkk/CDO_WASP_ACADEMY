CREATE TABLE IF NOT EXISTS grade
(
    grade_id SERIAL PRIMARY KEY,
    grade_name character varying(10) NOT NULL
);

INSERT INTO grade (grade_name)
VALUES 
('10 класс'), ('11 класс'), ('1 курс'), ('2 курс');

CREATE TABLE IF NOT EXISTS students
(
    student_id SERIAL PRIMARY KEY,
    surname character varying(50) NOT NULL,
    name character varying(50) NOT NULL,
    middle_name character varying(50) NOT NULL,
    study_place character varying(50) NOT NULL,
    grade_id INTEGER NOT NULL,
    education_direction character varying(50) NOT NULL,
    course_id integer NOT NULL,
    login character varying(50) NOT NULL,
    password character varying(50) NOT NULL,
    e_mail character varying(50) NOT NULL,
    telegram_id character varying(50) NOT NULL
);

CREATE TABLE IF NOT EXISTS course
(
    course_id SERIAL PRIMARY KEY,
    course_name character varying(50) NOT NULL
);

INSERT INTO course (course_name)
VALUES
('Разработка мобильных приложений на языке C#'), ('Программирование на языке Python');

UPDATE course
SET image = './IMG/c_sharp.png';


CREATE TABLE IF NOT EXISTS chapters
(
    chapter_id SERIAL PRIMARY KEY,
    course_id integer NOT NULL,
    chapter_name VARCHAR(300) NOT NULL
);

INSERT INTO chapters (course_id, chapter_name)
VALUES
(1, 'Глава 1. Введение в язык C#, среду разработки Visual Studio'), 
(1, 'Глава 2. Cистема контроля версий Git'), 
(1, 'Глава 3. Возвратные и невозвратные функции. Коллекции в C#'),
(2, 'Глава 1. Введение в Python'),
(2, 'Глава 2. Типы данных и операции'),
(2, 'Глава 3. Инструкции и синтаксис');

CREATE TABLE IF NOT EXISTS question
(
    question_id INTEGER PRIMARY KEY,
    question_text VARCHAR(700) NOT NULL,
    answer_1 VARCHAR(100) NOT NULL,
    answer_2 VARCHAR(100) NOT NULL,
    answer_3 VARCHAR(100) NOT NULL,
    answer_4 VARCHAR(100) NOT NULL,
    right_answer INTEGER NOT NULL,
    chapter_id INTEGER NOT NULL
);

INSERT INTO question (question_id, question_text, answer_1, answer_2, answer_3, answer_4, right_answer, chapter_id)
VALUES
(1, 'Какой тип переменной используется в коде: int a = 5 ?', 'Знаковое 8-бит целое', 'Знаковое 64-бит целое', 'Беззнаковое 8-бит целое', 'Знаковое 32-бит целое', 4, 1),
(2, 'Что делает оператор «%» ?', 'Возвращает процент от суммы', 'Возвращает остаток от деления', 'Возвращает тригонометрическую функцию', 'Ничего из выше перечисленного', 2, 1),
(3, 'Что сделает программа выполнив следующий код: Console.WriteLine(«Hello, World!») ?', 'Напишет на новой строчке Hello, World!', 'Напишет Hello, World!', 'Удалит все значения с Hello, World!', 'Вырежет слово Hello, World! из всего текста', 1, 1),
(4, 'Как сделать инкрементацию числа?', '++', '—', '%%', '!=', 1, 1),
(5, 'Как найти квадратный корень из числа x?', 'sqrt(x)', 'summ.Koren(x)', 'arifmetic.sqrt(x)', 'math.sqrt(x)', 4, 1),
(6, 'Обозначения оператора «НЕ»?', 'not', 'no', '!', '==', 3, 1),
(7, 'Обозначение оператора «ИЛИ»?', '!', '!=', '||', 'or', 3, 1),
(8, 'Обозначение оператора «И»?', 'and', '&&', '&', 'Все выше перечисленные', 2, 1),
(9, 'Для чего нужны условные операторы?', 'Чтобы устанавливать условия пользователю', 'Для ветвления программы', 'Для оптимизации программы', 'Чтобы были', 2, 1),
(10, 'Как называется оператор «?:» ?', 'Вопросительный', 'Прямой оператор', 'Тернарный оператор', 'Территориальный оператор', 3, 1),
(11, 'Что такое массив?', 'Набор однотипных данных, которые располагаются в памяти последовательно друг за другом', 'Набор текстовых значений в формате Unicode, которые расположены в случайном порядке', 'Набор данных типа int (32-бит целое)', 'Переменная', 1, 1),
(12, 'Что такое константа?', 'Переменная типа string', 'Переменная которая может быть изменена в любое время', 'Глобальная переменная', 'Переменная значение которой нельзя изменить', 4, 1);



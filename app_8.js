function Question_8(text, choices, answer){
	this.text = text;
	this.choices_8 = choices;
	this.answer_8 = answer;
}
Question_8.prototype.correctAnswer_8 = function(choice_8){
	return choice_8 === this.answer_8;
}
function Quiz_8(questions_8){
	this.score = 0;
	this.questions = questions_8;
	this.questionIndex = 0;
}
Quiz_8.prototype.getquestionIndex = function(){
	return this.questions[this.questionIndex];
}
Quiz_8.prototype.isEnded = function(){
	return this.questions.length === this.questionIndex;
}
Quiz_8.prototype.guess_8 = function(answer_8){
	
	if (this.getquestionIndex().correctAnswer_8(answer_8)){
		this.score++;
	}
	
	this.questionIndex++;
}

function populate_8(){
	if (quiz_8.isEnded()){
		showScores_8();
	} else {
		//show questions
		var element = document.getElementById("question_8");
		element.innerHTML = quiz_8.getquestionIndex().text;
		
		//show choices
		var choices_8 = quiz_8.getquestionIndex().choices_8;
		for (var i = 0; i < choices_8.length; i++){
			var element = document.getElementById("choice_8"+i);
			element.innerHTML = choices_8[i];
			guess_8("btn_8" + i, choices_8[i]);
		}
		showProsress_8();
	}
}

function guess_8 (id, guess){
	var button = document.getElementById(id);
	button.onclick = function() {
		quiz_8.guess_8 (guess);
		populate_8();
	}
}

function showProsress_8(){
	var currentQuestionNumber = quiz_8.questionIndex + 1;
	var element = document.getElementById("progress_8");
	element.innerHTML = "Вопрос " + currentQuestionNumber + " из " + quiz_8.questions.length;
}

function showScores_8(){
	$.ajax({
		url: "result.php",
		type: "POST",
		data: ({score: Math.ceil(12/questions_8.length*quiz_8.score), Test : 9}),
		dataType : "html",
		//success: funcSecsess
	}).done(function (msg) {console.log(msg);});
	var gameOverHtml = "<h1>Результат</h1>";
	gameOverHtml += "<h2 id = 'score'>Ваши балы:" + Math.ceil(12/questions_8.length*quiz_8.score) + "</h2>";
	var element = document.getElementById("quiz_8");
	element.innerHTML = gameOverHtml;
}

var questions_8 = [
	new Question_8("1. Какие устройства относятся к главным?", ["а) Системный блок, монитор, клавиатура, мышь", "б) Системный блок, монитор, клавиатура", "в) Системный блок, монитор, клавиатура, сканер"], "б) Системный блок, монитор, клавиатура"),
	new Question_8("2. Экран монитора называют", ["а) Окно Windows", "б) Рабочий стол Windows", "в) Панель Windows"], "б) Рабочий стол Windows"),
	new Question_8("3. Устройство для вывода информации из компьютера на бумагу?", ["а) Монитор", "б) Клавиатура", "в) Принтер"], "в) Принтер"),
	new Question_8("4. Windows – это:", ["а) Графическая программа", "б) Операционная система", "в) Текстовый редактор"], "б) Операционная система"),
	new Question_8("5. Какие устройства компьютера используются для ввода текста:", ["а) Монитор", "б) Клавиатура", "в) Колонки"], "б) Клавиатура"),
	new Question_8("6. Ярлык отличается от настоящих файлов тем, что: ", ["а) На его значке есть треугольник", "б) На его значке есть стрелочка", "в) На его значке есть буквы"], "б) На его значке есть стрелочка"),
	new Question_8("7. Панель задач:", ["а) Отображает значки файлов, имеющихся на диске", "б) Отображает значки открытых файлов", "в) Отображает значки закрытых файлов"], "б) Отображает значки открытых файлов"),
	new Question_8("8. Пункт меню «Программы» в меню «Пуск» содержит:", ["а) Диски и ярлыки", "б) Ярлыки и файлы", "в) Файлы и папки"], "в) Файлы и папки"),
	new Question_8("9. Корзина служит для:", ["а) Хранения и сортировки файлов", "б) Хранения удаленных файлов", "в) Хранения созданных документов"], "в) Хранения созданных документов"),
	new Question_8("10. Заголовок окна содержит:", ["а) Название панели окон", "б) Название программы", "в) Имя файла и название программы"], "в) Имя файла и название программы"),
	new Question_8("11. Как переместить окно?", ["а) Навести мышь на границу и перетащить", "б) Навести мышь на статус-строку и перетащить", "в) Навести мышь на заголовок окна и перетащить"], "в) Навести мышь на заголовок окна и перетащить"),
	new Question_8("12. Меню Пуск позволяет:", ["а) Найти нужные файлы", "б) Настроить Windows", "в) Получить справку по Windows"], "а) Найти нужные файлы"),
	new Question_8("13. Файлы могут иметь одинаковое название, если", ["а) имеют разный объем", "б) созданы в различные дни", "в) хранятся в разных папках"], "в) хранятся в разных папках"),
	new Question_8("14. Можно ли восстановить файл после очистки корзины", ["а) Да, всегда", "б) Да, если после удаления прошло не более 30 дней", "в) Нет"], "в) Нет"),
	new Question_8("15. Чтобы вызвать контекстное меню, надо", ["а) Щелкнуть два раза левой кнопкой мыши по объекту на экране.", "б) Щелкнуть по объекту на экране правой кнопкой мыши.", "в) Нажать на клавишу ввода"], "б) Щелкнуть по объекту на экране правой кнопкой мыши."),
	new Question_8("16. На Рабочем столе находятся", ["а) Диски.", "б) Пиктограммы папок и файлов.", "в) Тетради и книги"], "б) Пиктограммы папок и файлов."),
	new Question_8("17. При копировании папки копируется", ["а) Папка вместе с находящимися в ней файлами.", "б) Только содержимое папки (без папки).", "в) Только папка без содержимого"], "а) Папка вместе с находящимися в ней файлами."),
	new Question_8("18. Для того чтобы создать папку, надо", ["а) В контекстном меню выбрать Создать папку", "б) Щелкнуть два раза левой кнопкой мыши", "в) Нажать на клавишу ввода"], "а) В контекстном меню выбрать Создать папку")
];

var quiz_8 = new Quiz_8 (questions_8);
populate_8();


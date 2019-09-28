function Question_9(text, choices, answer){
	this.text = text;
	this.choices_9 = choices;
	this.answer_9 = answer;
}
Question_9.prototype.correctAnswer_9 = function(choice_9){
	return choice_9 === this.answer_9;
}
function Quiz_9(questions_9){
	this.score = 0;
	this.questions = questions_9;
	this.questionIndex = 0;
}
Quiz_9.prototype.getquestionIndex = function(){
	return this.questions[this.questionIndex];
}
Quiz_9.prototype.isEnded = function(){
	return this.questions.length === this.questionIndex;
}
Quiz_9.prototype.guess_9 = function(answer_9){
	
	if (this.getquestionIndex().correctAnswer_9(answer_9)){
		this.score++;
	}
	
	this.questionIndex++;
}

function populate_9(){
	if (quiz_9.isEnded()){
		showScores_9();
	} else {
		//show questions
		var element = document.getElementById("question_9");
		element.innerHTML = quiz_9.getquestionIndex().text;
		
		//show choices
		var choices_9 = quiz_9.getquestionIndex().choices_9;
		for (var i = 0; i < choices_9.length; i++){
			var element = document.getElementById("choice_9"+i);
			element.innerHTML = choices_9[i];
			guess_9("btn_9" + i, choices_9[i]);
		}
		showProsress_9();
	}
}

function guess_9 (id, guess){
	var button = document.getElementById(id);
	button.onclick = function() {
		quiz_9.guess_9 (guess);
		populate_9();
	}
}

function showProsress_9(){
	var currentQuestionNumber = quiz_9.questionIndex + 1;
	var element = document.getElementById("progress_9");
	element.innerHTML = "Вопрос " + currentQuestionNumber + " из " + quiz_9.questions.length;
}

function showScores_9(){
	$.ajax({
		url: "result.php",
		type: "POST",
		data: ({score: Math.ceil(12/questions_9.length*quiz_9.score), Test : 10}),
		dataType : "html",
		//success: funcSecsess
	}).done(function (msg) {console.log(msg);});
	var gameOverHtml = "<h1>Результат</h1>";
	gameOverHtml += "<h2 id = 'score'>Ваши балы:" + Math.ceil(12/questions_9.length*quiz_9.score) + "</h2>";
	var element = document.getElementById("quiz_9");
	element.innerHTML = gameOverHtml;
}

var questions_9 = [
	new Question_9("1. Графический редактор предназначен для обработки:", ["а) текстовой информации", "б) графической информации", "в) музыкальной информации","г) видеоинформации"], "б) графической информации"),
	new Question_9("2. Изображение в графическом редакторе Paint состоит из:", ["а) символов", "б) прямоугольников", "в) пикселей (точек экрана)","г) палитры цветов"], "в) пикселей (точек экрана)"),
	new Question_9("3. Для создания нового рисунка необходимо выбрать команду:", ["а) Файл/Открыть", "б) Рисунок/Отразить/Повернуть", "в) Файл/Сохранить","г) Файл/Создать"], "г) Файл/Создать"),
	new Question_9("4. Выберите верный порядок действий для создания копии фрагмента рисунка:", ["а) Выделить, Копировать, Вставить", "б) Выделить, Вырезать, Вставить", "в) Выделить, Вставить, Копировать","г) Копировать, Вставить"], "а) Выделить, Копировать, Вставить"),
	new Question_9("5. Для рисования квадрата, необходимо выбрать инструмент Прямоугольник и удерживать клавишу:", ["а) Insert", "б) Enter", "в) Shift","г) Caps Lock"], "в) Shift"),
	new Question_9("6. Каково назначение инструмента Надпись: ", ["а) Для рисования буквы", "б) Для ввода текста", "в) Для рисования прямоугольника","г) Для заливки замкнутой области"], "б) Для ввода текста"),
	new Question_9("7. Какое расширение имеют файлы, созданные в графическом редакторе Paint?", ["а) .txt", "б) .exe", "в) .bmp","г) .mp3"], "в) .bmp"),
	new Question_9("8. Панель инструментов, палитра цветов, рабочее поле, горизонтальное меню образуют:", ["а) полный набор графических примитивов графического редактора", "б) среду графического редактора", "в) перечень режимов работы графического редактора","г) набор команд, которыми можно воспользоваться при работе с графическим редактором"], "б) среду графического редактора"),
	new Question_9("9. Графика с представлением изображения в виде совокупностей точек называется:", ["а) фрактальной", "б) растровой", "в) векторной","г) прямолинейной"], "б) растровой"),
	new Question_9("10. Для первичного сохранения рисунка необходимо выбрать команду:", ["а) Файл/Создать", "б) Рисунок/Отразить", "в) Файл/Сохранить как ","г) Файл/Сохранить"], "в) Файл/Сохранить как ")
];

var quiz_9 = new Quiz_9 (questions_9);
populate_9();


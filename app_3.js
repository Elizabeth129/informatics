function Question_3(text, choices, answer){
	this.text = text;
	this.choices_3 = choices;
	this.answer_3 = answer;
}
Question_3.prototype.correctAnswer_3 = function(choice_3){
	return choice_3 === this.answer_3;
}
function Quiz_3(questions_3){
	this.score = 0;
	this.questions = questions_3;
	this.questionIndex = 0;
}
Quiz_3.prototype.getquestionIndex = function(){
	return this.questions[this.questionIndex];
}
Quiz_3.prototype.isEnded = function(){
	return this.questions.length === this.questionIndex;
}
Quiz_3.prototype.guess_3 = function(answer_3){
	
	if (this.getquestionIndex().correctAnswer_3(answer_3)){
		this.score++;
	}
	
	this.questionIndex++;
}

function populate_3(){
	if (quiz_3.isEnded()){
		showScores_3();
	} else {
		//show questions
		var element = document.getElementById("question_3");
		element.innerHTML = quiz_3.getquestionIndex().text;
		
		//show choices
		var choices_3 = quiz_3.getquestionIndex().choices_3;
		for (var i = 0; i < choices_3.length; i++){
			var element = document.getElementById("choice_3"+i);
			element.innerHTML = choices_3[i];
			guess_3("btn_3" + i, choices_3[i]);
		}
		showProsress_3();
	}
}

function guess_3 (id, guess){
	var button = document.getElementById(id);
	button.onclick = function() {
		quiz_3.guess_3 (guess);
		populate_3();
	}
}

function showProsress_3(){
	var currentQuestionNumber = quiz_3.questionIndex + 1;
	var element = document.getElementById("progress_3");
	element.innerHTML = "Вопрос " + currentQuestionNumber + " из " + quiz_3.questions.length;
}

function showScores_3(){
	$.ajax({
		url: "result.php",
		type: "POST",
		data: ({score: 12/questions_3.length*quiz_3.score, Test : 4}),
		dataType : "html",
		//success: funcSecsess
	}).done(function (msg) {console.log(msg);});
	var gameOverHtml = "<h1>Результат</h1>";
	gameOverHtml += "<h2 id = 'score'>Ваши балы:" + 12/questions_3.length*quiz_3.score + "</h2>";
	var element = document.getElementById("quiz_3");
	element.innerHTML = gameOverHtml;
}

var questions_3 = [
	new Question_3("1.	1.	Файлы шаблонов, созданные средствами Microsoft Word, могут иметь расширение", ["А ppt; pot", " Б doc; docx", " В htm; html", "Г dot; dotx"], " Б doc; docx"),
	new Question_3("2.	2.	Для ввода большой буквы в текстовых процессорах одновременно с алфавитной клавишей следует нажать клавишу ", ["A Alt", "б) Shift", "в) Enter", "г) Ctrl"], "б) Shift"),
	new Question_3("3.	Процесс внесения изменений в текст: исправление ошибок, удаление, перемещение,копирования, вставки фрагментов текста и других объектов, называется", ["а) редактированием текста ", "б)  форматированием текста", "в) защитой текста", "г) - ?"], "а) редактированием текста "),
	new Question_3("4.	Новый абзац можно создать с помощью клавиши ", ["а) Delete", "б) Enter", "в) Backspace", "г) Shift"], "б) Enter"),
	new Question_3("5. Какой объект в среде текстового процессора имеет такие параметры форматирования: отступление, выравнивание, интервал?", ["а) страница", "б) абзац", "в) символ", "г) список"], "б) абзац"),
	new Question_3("6. Организационные диаграммы используют для", [" а)  схематического представления связанных между собой данных", "б) настройки параметров форматирования изображения", "в) изменения положения изображения относительно текста", "г) - ?"], "а)  схематического представления связанных между собой данных"),
	new Question_3("7.	Вставить готовые рисунки из коллекции Microsoft Clip Gallery можно с помощью инструмента <img src = 'kr3_v2.png'>", ["А Рисунок ", " Б Графика", " В  Фигуры ", "Г Smart Art"], " А Рисунок "),
	new Question_3("8.	Текстовые процессоры не предназначены для обработки документов, содержащих:", ["A текст", "б) изображения", "в) схемы", "г) слайды"], "г) слайды"),
	new Question_3("9.	В режиме чтения в среде Microsoft Word можно:", ["а) читать документ на экране компьютера", "б)менять масштаб отображения текста", "в) вносить изменения в текст", "г)менять цвет текста"], "а) читать документ на экране компьютера"),
	new Question_3("10.	Создавать текстовые документы нельзя :", ["а) на основе шаблона", "б) редактируя существующий документ", "в)с пустого документа", "г) на основе презентации"], "г) на основе презентации"),
	new Question_3("11. К выделенному слову можно применить такие параметры форматирования: ", ["а) межстрочный интервал", "б)цвет текста", "в) ориентация страницы", "г) масштаб отображения текста"], "б)цвет текста"),
	new Question_3("12. В среде текстового процессора возможны такие параметры выравнивания абзацев:", [" а) по левой границей", "б) по центру", "в) по правой границе", "г) по нижней границе"], "г) по нижней границе")
];

var quiz_3 = new Quiz_3 (questions_3);
populate_3();


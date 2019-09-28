function Question_2(text, choices, answer){
	this.text = text;
	this.choices_2 = choices;
	this.answer_2 = answer;
}
Question_2.prototype.correctAnswer_2 = function(choice_2){
	return choice_2 === this.answer_2;
}
function Quiz_2(questions_2){
	this.score = 0;
	this.questions = questions_2;
	this.questionIndex = 0;
}
Quiz_2.prototype.getquestionIndex = function(){
	return this.questions[this.questionIndex];
}
Quiz_2.prototype.isEnded = function(){
	return this.questions.length === this.questionIndex;
}
Quiz_2.prototype.guess_2 = function(answer_2){
	
	if (this.getquestionIndex().correctAnswer_2(answer_2)){
		this.score++;
	}
	
	this.questionIndex++;
}

function populate_2(){
	if (quiz_2.isEnded()){
		showScores_2();
	} else {
		//show questions
		var element = document.getElementById("question_2");
		element.innerHTML = quiz_2.getquestionIndex().text;
		
		//show choices
		var choices_2 = quiz_2.getquestionIndex().choices_2;
		for (var i = 0; i < choices_2.length; i++){
			var element = document.getElementById("choice_2"+i);
			element.innerHTML = choices_2[i];
			guess_2("btn_2" + i, choices_2[i]);
		}
		showProsress_2();
	}
}

function guess_2 (id, guess){
	var button = document.getElementById(id);
	button.onclick = function() {
		quiz_2.guess_2 (guess);
		populate_2();
	}
}

function showProsress_2(){
	var currentQuestionNumber = quiz_2.questionIndex + 1;
	var element = document.getElementById("progress_2");
	element.innerHTML = "Вопрос " + currentQuestionNumber + " из " + quiz_2.questions.length;
}

function showScores_2(){
	$.ajax({
		url: "result.php",
		type: "POST",
		data: ({score: 12/questions_2.length*quiz_2.score, Test : 3}),
		dataType : "html",
		//success: funcSecsess
	}).done(function (msg) {console.log(msg);});
	var gameOverHtml = "<h1>Результат</h1>";
	gameOverHtml += "<h2 id = 'score'>Ваши балы:" + 12/questions_2.length*quiz_2.score + "</h2>";
	var element = document.getElementById("quiz_2");
	element.innerHTML = gameOverHtml;
}

var questions_2 = [
	new Question_2("1.	Шаблон документа  — это", ["А заготовка будущего документа, содержащего различные составляющие (текст, заголовки, изображения, примечания и т.д.) и подсказки по их заполнению", " Б заготовка заявления, содержащего только текст", " В обычный документ, который можно редактировать", "Г - ?"], " А заготовка будущего документа, содержащего различные составляющие (текст, заголовки, изображения, примечания и т.д.) и подсказки по их заполнению"),
	new Question_2("2.	Для включения и выключения режима прописных букв используют клавишу ", ["A Ctrl", "б) Esc", "в) Num. Lock", "г) Caps Lock"], "г) Caps Lock"),
	new Question_2("3.	Редактирование текста - это ", ["а) внесении изменений во внешний вид текста", "б) внесение изменений в текст", "в) сохранения текста на диске в виде текстового файла", "г) - ?"], "б) внесение изменений в текст"),
	new Question_2("4.	Символ слева от курсора (то есть перед ним) можно удалить с помощью клавиши ", ["а) Delete", "б) Enter", "в) Backspace", "г) Shift"], "в) Backspace"),
	new Question_2("5. Какой объект в среде текстового процессора имеет такие параметры форматирования: стиль начертания, размер, цвет текста? ", ["а) страница", "б) абзац", "в) символ", "г) список"], "в) символ"),
	new Question_2("6. Рисунок, фотография, схема, организационная диаграмма в текстовом документе - это", [" а) текстовые объекты", "б) графические объекты", "в) схематические объекты", "г) - ?"], "б) графические объекты"),
	new Question_2("7.	Представленный на рисунке объект текстового документа – это <img src = 'kr3_v1.png'>", ["А графическая фигура", " Б рисунок", " В организационная диаграмма", "Г текст"], " В организационная диаграмма"),
	new Question_2("8.	Для обработки текстовых документов предназначены программы: ", ["A Paint", "б) Microsoft Word", "в) LibreOfficeWriter", "г) PowerPoint"], "б) Microsoft Word"),
	new Question_2("9.	В режиме разметки страницы в среде Microsoft Word нельзя установить или изменить значения такого параметра страницы текстового документа:", ["а) значения полей", "б)вид ориентации страницы", "в) размер листа", "г)анимацию"], "б) внесение изменений в текст"),
	new Question_2("10.	Автоматически исправлять орфографические ошибки в документе можно с помощью:", ["а) в режиме рецензирования", "б) инструмента Правописание и грамматика", "в) справки текстового процессора", "г) - ?"], "б) инструмента Правописание и грамматика"),
	new Question_2("11. К выделенному абзацу нельзя применить такой параметр форматирования: ", ["а) межстрочный интервал", "б) интервал после абзаца", "в) отступ первой строки абзаца", "г) ориентация страницы"], "г) ориентация страницы"),
	new Question_2("12. На страницу можно применить такие параметры форматирования:", [" а) интервал после абзаца", "б) размеры левого, правого, верхнего и нижнего полей", "в) межстрочный интервал", "г) интервал между символами"], "б) размеры левого, правого, верхнего и нижнего полей")
];

var quiz_2 = new Quiz_2 (questions_2);
populate_2();


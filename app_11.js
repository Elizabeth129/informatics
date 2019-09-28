function Question_11(text, choices, answer){
	this.text = text;
	this.choices_11 = choices;
	this.answer_11 = answer;
}
Question_11.prototype.correctAnswer_11 = function(choice_11){
	return choice_11 === this.answer_11;
}
function Quiz_11(questions_11){
	this.score = 0;
	this.questions = questions_11;
	this.questionIndex = 0;
}
Quiz_11.prototype.getquestionIndex = function(){
	return this.questions[this.questionIndex];
}
Quiz_11.prototype.isEnded = function(){
	return this.questions.length === this.questionIndex;
}
Quiz_11.prototype.guess_11 = function(answer_11){
	
	if (this.getquestionIndex().correctAnswer_11(answer_11)){
		this.score++;
	}
	
	this.questionIndex++;
}

function populate_11(){
	if (quiz_11.isEnded()){
		showScores_11();
	} else {
		//show questions
		var element = document.getElementById("question_11");
		element.innerHTML = quiz_11.getquestionIndex().text;
		
		//show choices
		var choices_11 = quiz_11.getquestionIndex().choices_11;
		for (var i = 0; i < choices_11.length; i++){
			var element = document.getElementById("choice_11"+i);
			element.innerHTML = choices_11[i];
			guess_11("btn_11" + i, choices_11[i]);
		}
		showProsress_11();
	}
}

function guess_11 (id, guess){
	var button = document.getElementById(id);
	button.onclick = function() {
		quiz_11.guess_11 (guess);
		populate_11();
	}
}

function showProsress_11(){
	var currentQuestionNumber = quiz_11.questionIndex + 1;
	var element = document.getElementById("progress_11");
	element.innerHTML = "Вопрос " + currentQuestionNumber + " из " + quiz_11.questions.length;
}

function showScores_11(){
	$.ajax({
		url: "result.php",
		type: "POST",
		data: ({score: Math.ceil(12/questions_11.length*quiz_11.score), Test : 12}),
		dataType : "html",
		//success: funcSecsess
	}).done(function (msg) {console.log(msg);});
	var gameOverHtml = "<h1>Результат</h1>";
	gameOverHtml += "<h2 id = 'score'>Ваши балы:" + Math.ceil(12/questions_11.length*quiz_11.score) + "</h2>";
	var element = document.getElementById("quiz_11");
	element.innerHTML = gameOverHtml;
}

var questions_11 = [
	new Question_11("1. PowerPoint служит для:", ["а) передачи файлов;", "б) хранения программ;", "в) создания слайда;","г) дублирования ценных программ."], "в) создания слайда;"),
	new Question_11("2. Слайд – это:", ["а) устройство компьютера;", "б) лист бумаги информационной структуры, содержащей различные объекты;", "в) программа.","г) - ?"], "б) лист бумаги информационной структуры, содержащей различные объекты;"),
	new Question_11("3. PowerPoint не будет функционировать, если отключить:", ["а) дисковод;", "б) оперативную память;", "в) мышь;","г) сканер."], "б) оперативную память;"),
	new Question_11("4. Способы создания презентаций:", ["а) произвольно, по таблице, по шаблону;", "б) по принципу, по форме, по свойству;", "в) по шаблону, по мастеру, с чистого листа;","г) - ?"], "в) по шаблону, по мастеру, с чистого листа;"),
	new Question_11("5. Продолжите фразу: режимы просмотра…", ["а) – это скоростные установки;", "б) – виды действия;", "в) – характеристики компьютера;","г) – функции меню вид."], "г) – функции меню вид.")
];

var quiz_11 = new Quiz_11 (questions_11);
populate_11();


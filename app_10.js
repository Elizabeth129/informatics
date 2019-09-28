function Question_10(text, choices, answer){
	this.text = text;
	this.choices_10 = choices;
	this.answer_10 = answer;
}
Question_10.prototype.correctAnswer_10 = function(choice_10){
	return choice_10 === this.answer_10;
}
function Quiz_10(questions_10){
	this.score = 0;
	this.questions = questions_10;
	this.questionIndex = 0;
}
Quiz_10.prototype.getquestionIndex = function(){
	return this.questions[this.questionIndex];
}
Quiz_10.prototype.isEnded = function(){
	return this.questions.length === this.questionIndex;
}
Quiz_10.prototype.guess_10 = function(answer_10){
	
	if (this.getquestionIndex().correctAnswer_10(answer_10)){
		this.score++;
	}
	
	this.questionIndex++;
}

function populate_10(){
	if (quiz_10.isEnded()){
		showScores_10();
	} else {
		//show questions
		var element = document.getElementById("question_10");
		element.innerHTML = quiz_10.getquestionIndex().text;
		
		//show choices
		var choices_10 = quiz_10.getquestionIndex().choices_10;
		for (var i = 0; i < choices_10.length; i++){
			var element = document.getElementById("choice_10"+i);
			element.innerHTML = choices_10[i];
			guess_10("btn_10" + i, choices_10[i]);
		}
		showProsress_10();
	}
}

function guess_10 (id, guess){
	var button = document.getElementById(id);
	button.onclick = function() {
		quiz_10.guess_10 (guess);
		populate_10();
	}
}

function showProsress_10(){
	var currentQuestionNumber = quiz_10.questionIndex + 1;
	var element = document.getElementById("progress_10");
	element.innerHTML = "Вопрос " + currentQuestionNumber + " из " + quiz_10.questions.length;
}

function showScores_10(){
	$.ajax({
		url: "result.php",
		type: "POST",
		data: ({score: Math.ceil(12/questions_10.length*quiz_10.score), Test : 11}),
		dataType : "html",
		//success: funcSecsess
	}).done(function (msg) {console.log(msg);});
	var gameOverHtml = "<h1>Результат</h1>";
	gameOverHtml += "<h2 id = 'score'>Ваши балы:" + Math.ceil(12/questions_10.length*quiz_10.score) + "</h2>";
	var element = document.getElementById("quiz_10");
	element.innerHTML = gameOverHtml;
}

var questions_10 = [
	new Question_10("1. Для долговременного хранения презентации служит:", ["а) файл;", "б) внешняя память;", "в) процессор;","г) дисковод."], "а) файл;"),
	new Question_10("2. Окно программы PowerPoint, с которым процессор работает в текущий момент времени, называется:", ["а) внешним;", "б) блоком;", "в) синим;","г) активным."], "г) активным."),
	new Question_10("3. (.РРТ) – является:", ["а) заглавием строки;", "б) прикладной программой;", "в) устройством управления;","г) расширением файла."], "г) расширением файла."),
	new Question_10("4. Основное назначение PowerPoint:", ["а) обработка команд исполняемой программы;", "б) долговременное хранение видео;", "в) хранение файлов;","г) создание презентаций."], "г) создание презентаций."),
	new Question_10("5. Программа PowerPoint во время её выполнения находится:", ["а) в процессоре;", "б) в оперативной памяти;", "в) на жестком диске;","г) в видеопамяти."], "б) в оперативной памяти;")
];

var quiz_10 = new Quiz_10 (questions_10);
populate_10();


function Question_13(text, choices, answer){
	this.text = text;
	this.choices_13 = choices;
	this.answer_13 = answer;
}
Question_13.prototype.correctAnswer_13 = function(choice_13){
	return choice_13 === this.answer_13;
}
function Quiz_13(questions_13){
	this.score = 0;
	this.questions = questions_13;
	this.questionIndex = 0;
}
Quiz_13.prototype.getquestionIndex = function(){
	return this.questions[this.questionIndex];
}
Quiz_13.prototype.isEnded = function(){
	return this.questions.length === this.questionIndex;
}
Quiz_13.prototype.guess_13 = function(answer_13){
	
	if (this.getquestionIndex().correctAnswer_13(answer_13)){
		this.score++;
	}
	
	this.questionIndex++;
}

function populate_13(){
	if (quiz_13.isEnded()){
		showScores_13();
	} else {
		//show questions
		var element = document.getElementById("question_13");
		element.innerHTML = quiz_13.getquestionIndex().text;
		
		//show choices
		var choices_13 = quiz_13.getquestionIndex().choices_13;
		for (var i = 0; i < choices_13.length; i++){
			var element = document.getElementById("choice_13"+i);
			element.innerHTML = choices_13[i];
			guess_13("btn_13" + i, choices_13[i]);
		}
		showProsress_13();
	}
}

function guess_13 (id, guess){
	var button = document.getElementById(id);
	button.onclick = function() {
		quiz_13.guess_13 (guess);
		populate_13();
	}
}

function showProsress_13(){
	var currentQuestionNumber = quiz_13.questionIndex + 1;
	var element = document.getElementById("progress_13");
	element.innerHTML = "Вопрос " + currentQuestionNumber + " из " + quiz_13.questions.length;
}

function showScores_13(){
	$.ajax({
		url: "result.php",
		type: "POST",
		data: ({score: Math.ceil(12/questions_13.length*quiz_13.score), Test : 14}),
		dataType : "html",
		//success: funcSecsess
	}).done(function (msg) {console.log(msg);});
	var gameOverHtml = "<h1>Результат</h1>";
	gameOverHtml += "<h2 id = 'score'>Ваши балы:" + Math.ceil(12/questions_13.length*quiz_13.score) + "</h2>";
	var element = document.getElementById("quiz_13");
	element.innerHTML = gameOverHtml;
}

var questions_13 = [
	new Question_13("1. Любой элемент слайда, включая текст, графику и таблицы называют:", ["а) файлом;", "б) поля-заполнители;", "в) местом;","г) объектом."], "г) объектом."),
	new Question_13("2. К прикладным программам относятся:", ["а) Блокнот;", "б) PowerPoint;", "в) Калькулятор;","г) - ?"], "б) PowerPoint;"),
	new Question_13("3. Режимы работы PowerPoint – это:", ["а) обычный, страницы заметок, сортировщик, показ слайдов;", "б) система программирования;", "в) редактирование, создание, форматирования, сохранения;","г) - ?"], "а) обычный, страницы заметок, сортировщик, показ слайдов;"),
	new Question_13("4. Для хранения файлов PowerPoint, как правило, используют:", ["а) дискету;", "б) бумагу;", "в) грампластинку;","г) холст."], "а) дискету;"),
	new Question_13("5. Слайд – это:", ["а) устройство компьютера;", "б) программа;", "в) лист бумаги информационной структуры, содержащей различные объекты;","г) - ?"], "в) лист бумаги информационной структуры, содержащей различные объекты;")
];

var quiz_13 = new Quiz_13 (questions_13);
populate_13();


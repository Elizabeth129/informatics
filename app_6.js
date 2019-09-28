function Question_6(text, choices, answer){
	this.text = text;
	this.choices_6 = choices;
	this.answer_6 = answer;
}
Question_6.prototype.correctAnswer_6 = function(choice_6){
	return choice_6 === this.answer_6;
}
function Quiz_6(questions_6){
	this.score = 0;
	this.questions = questions_6;
	this.questionIndex = 0;
}
Quiz_6.prototype.getquestionIndex = function(){
	return this.questions[this.questionIndex];
}
Quiz_6.prototype.isEnded = function(){
	return this.questions.length === this.questionIndex;
}
Quiz_6.prototype.guess_6 = function(answer_6){
	
	if (this.getquestionIndex().correctAnswer_6(answer_6)){
		this.score++;
	}
	
	this.questionIndex++;
}

function populate_6(){
	if (quiz_6.isEnded()){
		showScores_6();
	} else {
		//show questions
		var element = document.getElementById("question_6");
		element.innerHTML = quiz_6.getquestionIndex().text;
		
		//show choices
		var choices_6 = quiz_6.getquestionIndex().choices_6;
		for (var i = 0; i < choices_6.length; i++){
			var element = document.getElementById("choice_6"+i);
			element.innerHTML = choices_6[i];
			guess_6("btn_6" + i, choices_6[i]);
		}
		showProsress_6();
	}
}

function guess_6 (id, guess){
	var button = document.getElementById(id);
	button.onclick = function() {
		quiz_6.guess_6 (guess);
		populate_6();
	}
}

function showProsress_6(){
	var currentQuestionNumber = quiz_6.questionIndex + 1;
	var element = document.getElementById("progress_6");
	element.innerHTML = "Вопрос " + currentQuestionNumber + " из " + quiz_6.questions.length;
}

function showScores_6(){
	$.ajax({
		url: "result.php",
		type: "POST",
		data: ({score: 12/questions_6.length*quiz_6.score, Test : 7}),
		dataType : "html",
		//success: funcSecsess
	}).done(function (msg) {console.log(msg);});
	var gameOverHtml = "<h1>Результат</h1>";
	gameOverHtml += "<h2 id = 'score'>Ваши балы:" + 12/questions_6.length*quiz_6.score + "</h2>";
	var element = document.getElementById("quiz_6");
	element.innerHTML = gameOverHtml;
}

var questions_6 = [
	new Question_6("Выберите к устройству действие, которое оно выполняет </br> 1. Прицессор", ["а) обрабатывает информацию", "б) хранит информацию", "в) выводит информацию"], "а) обрабатывает информацию"),
	new Question_6("Выберите к устройству действие, которое оно выполняет </br> 2. Сканер", ["а) выводит информацию", "б) вводит информацию", "в) обрабатывает информацию"], "б) вводит информацию"),
	new Question_6("Выберите к устройству действие, которое оно выполняет </br> 3. Клавиатура", ["а) хранит информацию", "б) выводит информацию", "в) вводит информацию"], "в) вводит информацию"),
	new Question_6("Выберите к устройству действие, которое оно выполняет </br> 4. Принтер", ["а) вводит информацию", "б) выводит информацию", "в) обрабатывает информацию"], "б) выводит информацию"),
	new Question_6("Выберите к устройству действие, которое оно выполняет </br> 5. Память", ["а) хранит информацию", " б) выводит информацию", "в) вводит информацию"], "а) хранит информацию"),
	new Question_6("Выберите к устройству действие, которое оно выполняет </br> 6. Дисплей", ["а) вводит информацию", "б) выводит информацию", "в) обрабатывает информацию"], "б) выводит информацию")
];

var quiz_6 = new Quiz_6 (questions_6);
populate_6();


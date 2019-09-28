function Question_5(text, choices, answer){
	this.text = text;
	this.choices_5 = choices;
	this.answer_5 = answer;
}
Question_5.prototype.correctAnswer_5 = function(choice_5){
	return choice_5 === this.answer_5;
}
function Quiz_5(questions_5){
	this.score = 0;
	this.questions = questions_5;
	this.questionIndex = 0;
}
Quiz_5.prototype.getquestionIndex = function(){
	return this.questions[this.questionIndex];
}
Quiz_5.prototype.isEnded = function(){
	return this.questions.length === this.questionIndex;
}
Quiz_5.prototype.guess_5 = function(answer_5){
	
	if (this.getquestionIndex().correctAnswer_5(answer_5)){
		this.score++;
	}
	
	this.questionIndex++;
}

function populate_5(){
	if (quiz_5.isEnded()){
		showScores_5();
	} else {
		//show questions
		var element = document.getElementById("question_5");
		element.innerHTML = quiz_5.getquestionIndex().text;
		
		//show choices
		var choices_5 = quiz_5.getquestionIndex().choices_5;
		for (var i = 0; i < choices_5.length; i++){
			var element = document.getElementById("choice_5"+i);
			element.innerHTML = choices_5[i];
			guess_5("btn_5" + i, choices_5[i]);
		}
		showProsress_5();
	}
}

function guess_5 (id, guess){
	var button = document.getElementById(id);
	button.onclick = function() {
		quiz_5.guess_5 (guess);
		populate_5();
	}
}

function showProsress_5(){
	var currentQuestionNumber = quiz_5.questionIndex + 1;
	var element = document.getElementById("progress_5");
	element.innerHTML = "Вопрос " + currentQuestionNumber + " из " + quiz_5.questions.length;
}

function showScores_5(){
	$.ajax({
		url: "result.php",
		type: "POST",
		data: ({score: 12/questions_5.length*quiz_5.score, Test : 6}),
		dataType : "html",
		//success: funcSecsess
	}).done(function (msg) {console.log(msg);});
	var gameOverHtml = "<h1>Результат</h1>";
	gameOverHtml += "<h2 id = 'score'>Ваши балы:" + 12/questions_5.length*quiz_5.score + "</h2>";
	var element = document.getElementById("quiz_5");
	element.innerHTML = gameOverHtml;
}

var questions_5 = [
	new Question_5("Продолжить предложение </br> 1. «Порция» информации, которую можно отделить от остальных, - это ….", ["а) сообщение", " б) данные", " в) информация"], "а) сообщение"),
	new Question_5("Продолжить предложение </br> 2. Сообщения, поданные в формальном виде – это", ["а) сообщение", " б) данные", " в) информация"], " б) данные"),
	new Question_5("Продолжить предложение </br> 3. Сведения о окружающем мире и процессы, что происходят в нём, - это", ["а) сообщение", " б) данные", " в) информация"], "в) информация"),
	new Question_5("Продолжить предложение </br> 4. Данные и сообщения, представленные в разных формах, - это", ["а) сообщение", " б) данные", " в) информация"], " а) сообщение"),
	new Question_5("Продолжить предложение </br> 5. Информация, зафиксированная на носителе, - это", ["а) сообщение", " б) данные", " в) информация"], " б) данные"),
	new Question_5("Продолжить предложение </br>5. Сообщения, которые зафиксированные в виде, удобном для их хранения, передачи и обработки, - это", ["а) сообщение", " б) данные", " в) информация"], " б) данные")
];

var quiz_5 = new Quiz_5 (questions_5);
populate_5();


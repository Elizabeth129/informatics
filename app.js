function Quiz(questions){
	this.score = 0;
	this.questions = questions;
	this.questionIndex = 0;
}
Quiz.prototype.getquestionIndex = function(){
	return this.questions[this.questionIndex];
}
Quiz.prototype.isEnded = function(){
	return this.questions.length === this.questionIndex;
}
Quiz.prototype.guess = function(answer){
	
	if (this.getquestionIndex().correctAnswer(answer)){
		this.score++;
	}
	
	this.questionIndex++;
}
function Question(text, choices, answer){
	this.text = text;
	this.choices = choices;
	this.answer = answer;
}
Question.prototype.correctAnswer = function(choice){
	return choice === this.answer;
}
function populate(){
	if (quiz.isEnded()){
		showScores();
	} else {
		//show questions
		var element = document.getElementById("question");
		element.innerHTML = quiz.getquestionIndex().text;
		
		//show choices
		var choices = quiz.getquestionIndex().choices;
		for (var i = 0; i < choices.length; i++){
			var element = document.getElementById("choice"+i);
			element.innerHTML = choices[i];
			guess("btn" + i, choices[i]);
		}
		showProsress();
	}
}

function guess (id, guess){
	var button = document.getElementById(id);
	button.onclick = function() {
		quiz.guess (guess);
		populate();
	}
}

function showProsress(){
	var currentQuestionNumber = quiz.questionIndex + 1;
	var element = document.getElementById("progress");
	element.innerHTML = "Вопрос " + currentQuestionNumber + " из " + quiz.questions.length;
}

function funcSecsess(score){
	//$(#score).text("YYYY");
	alert(score);
	console.log("11111111111");
}

function showScores(){
	$.ajax({
		url: "result.php",
		type: "POST",
		data: ({score: 12/quiz.questions.length*quiz.score, Test : 1}),
		dataType : "html",
		//success: funcSecsess
	}).done(function (msg) {console.log(msg);});
	var gameOverHtml = "<h1>Результат</h1>";
	gameOverHtml += "<h2 id = 'score'>Ваши балы:" + 12/quiz.questions.length*quiz.score + "</h2>";
	var element = document.getElementById("quiz");
	element.innerHTML = gameOverHtml;
	
	
}

var questions = [
	new Question("1.	Аудиальная информация воспринимается органами: ", ["а) обоняния", "б) вкуса", "в) зрения", "г) слуха"], "г) слуха"),
	new Question("2.	Отправка телеграммы - это процесс ", ["а) поиска", "б) передачи", "в) хранения", "г) обработки"], "б) передачи"),
	new Question("3.	Устройство для передачи звука на большие расстояния с помощью электрических сигналов: ", ["а) плеер", "б) телефон", "в) факс", "г) диктофон"], "б) телефон"),
	new Question("4.	Примеры звукового представления информации:", ["а) песня", "б) запах дыма", "в) рассказ", "г) вкус лимона"], "а) песня"),
	new Question("5.	Укажите устройства для передачи информации: ", ["а)принтер", "б) калькулятор", "в) факс", "г) игровые приставки"], "в) факс"),
	new Question("6.	Иформация - это ... ", ["а) сведения о предмете, который вас интересует", "б) данные и сведения, представленные в различных формах", "в) рисунок", "г) точного определения информации не существует"], "а) сведения о предмете, который вас интересует")
];

var quiz = new Quiz (questions);
populate();



/*function populate_1(){
	if (quiz_1.isEnded()){
		showScores_1();
	} else {
		//show questions
		var element = document.getElementById("question_1");
		element.innerHTML = quiz_1.getquestionIndex_1().text;
		
		//show choices
		var choices_1 = quiz_1.getquestionIndex_1().choices_1;
		for (var i = 0; i < choices_1.length; i++){
			var element = document.getElementById("choice"+i);
			element.innerHTML = choices_1[i];
			guess_1("btn" + i, choices_1[i]);
		}
		showProsress_1();
	}
}

function guess_1 (id, guess_1){
	var button = document.getElementById(id);
	button.onclick = function() {
		quiz_1.guess_1 (guess_1);
		populate_1();
	}
}

function showProsress_1(){
	var currentQuestionNumber = quiz_1.questionIndex_1 + 1;
	var element = document.getElementById("progress_1");
	element.innerHTML = "Вопрос " + currentQuestionNumber + "из " + quiz_1.questions_1.length;
}

function showScores_1(){
	var gameOverHtml = "<h1>Результат</h1>";
	gameOverHtml += "<h2 id = 'score'>Ваши балы:" + 12/questions_1.length*quiz_1.score + "</h2>";
	var element = document.getElementById("quiz_1");
	element.innerHTML = gameOverHtml;
}

var questions_1 = [
	new Question_1("1.	Аудиальная информация воспринимается органами: ", ["а) обоняния", "б) вкуса", "в) зрения", "г) слуха"], "г) слуха"),
	new Question_1("2.	Отправка телеграммы - это процесс ", ["а) поиска", "б) передачи", "в) хранения", "г) обработки"], "б) передачи"),
	new Question_1("3.	Устройство для передачи звука на большие расстояния с помощью электрических сигналов: ", ["а) плеер", "б) телефон", "в) факс", "г) диктофон"], "б) телефон"),
	new Question_1("4.	Примеры звукового представления информации:", ["а) песня", "б) запах дыма", "в) рассказ", "г) вкус лимона"], "а) песня"),
	new Question_1("5.	Укажите устройства для передачи информации: ", ["а)принтер", "б) калькулятор", "в) факс", "г) игровые приставки"], "в) факс"),
	new Question_1("6.	Иформация - это ... ", ["а) сведения о предмете, который вас интересует", "б) данные и сведения, представленные в различных формах", "в) рисунок", "г) точного определения информации не существует"], "а) сведения о предмете, который вас интересует")
];


var quiz_1 = new Quiz_1 (questions_1);

populate_1(); */
function Question_12(text, choices, answer){
	this.text = text;
	this.choices_12 = choices;
	this.answer_12 = answer;
}
Question_12.prototype.correctAnswer_12 = function(choice_12){
	return choice_12 === this.answer_12;
}
function Quiz_12(questions_12){
	this.score = 0;
	this.questions = questions_12;
	this.questionIndex = 0;
}
Quiz_12.prototype.getquestionIndex = function(){
	return this.questions[this.questionIndex];
}
Quiz_12.prototype.isEnded = function(){
	return this.questions.length === this.questionIndex;
}
Quiz_12.prototype.guess_12 = function(answer_12){
	
	if (this.getquestionIndex().correctAnswer_12(answer_12)){
		this.score++;
	}
	
	this.questionIndex++;
}

function populate_12(){
	if (quiz_12.isEnded()){
		showScores_12();
	} else {
		//show questions
		var element = document.getElementById("question_12");
		element.innerHTML = quiz_12.getquestionIndex().text;
		
		//show choices
		var choices_12 = quiz_12.getquestionIndex().choices_12;
		for (var i = 0; i < choices_12.length; i++){
			var element = document.getElementById("choice_12"+i);
			element.innerHTML = choices_12[i];
			guess_12("btn_12" + i, choices_12[i]);
		}
		showProsress_12();
	}
}

function guess_12 (id, guess){
	var button = document.getElementById(id);
	button.onclick = function() {
		quiz_12.guess_12 (guess);
		populate_12();
	}
}

function showProsress_12(){
	var currentQuestionNumber = quiz_12.questionIndex + 1;
	var element = document.getElementById("progress_12");
	element.innerHTML = "Вопрос " + currentQuestionNumber + " из " + quiz_12.questions.length;
}

function showScores_12(){
	$.ajax({
		url: "result.php",
		type: "POST",
		data: ({score: Math.ceil(12/questions_12.length*quiz_12.score), Test : 13}),
		dataType : "html",
		//success: funcSecsess
	}).done(function (msg) {console.log(msg);});
	var gameOverHtml = "<h1>Результат</h1>";
	gameOverHtml += "<h2 id = 'score'>Ваши балы:" + Math.ceil(12/questions_12.length*quiz_12.score) + "</h2>";
	var element = document.getElementById("quiz_12");
	element.innerHTML = gameOverHtml;
}

var questions_12 = [
	new Question_12("1. PowerPoint — это программный продукт, предназначенный для:", ["а) обработки таблиц;", "б) работы с текстовой информацией в процессе делопроизводства, редакционно-издательской деятельности и др.;", "в) работы с изображениями в процессе создания игровых программ;","г) - ?"], "б) работы с текстовой информацией в процессе делопроизводства, редакционно-издательской деятельности и др.;"),
	new Question_12("2. В программе PowerPoint СЛАЙДЫ можно:", ["а) создавать, редактировать, сохранять;", "б) только редактировать;", "в) только создавать;","г) только создавать и сохранять."], "а) создавать, редактировать, сохранять;"),
	new Question_12("3. Способы создания презентаций:", ["а) произвольно, по таблице, по шаблону;", "б) по шаблону, по мастеру, с чистого листа;", "в) по принципу, по форме, по свойству;","г) - ?"], "б) по шаблону, по мастеру, с чистого листа;"),
	new Question_12("4. Одной из основных функций PowerPoint является:", ["а) вывод изображений на печать;", "б) хранение кода изображения;", "в) создание анимации;","г) просмотр и вывод содержимого видеопамяти."], "в) создание анимации;"),
	new Question_12("5. PowerPoint может быть использована для:", ["а) написания сочинения;", "б) создания слайд-шоу;", "в) сочинения музыкального произведения;","г) совершения вычислительных операций."], "б) создания слайд-шоу;")
];

var quiz_12 = new Quiz_12 (questions_12);
populate_12();


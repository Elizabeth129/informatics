function Question_1(text, choices, answer){
	this.text = text;
	this.choices_1 = choices;
	this.answer_1 = answer;
}
Question_1.prototype.correctAnswer_1 = function(choice_1){
	return choice_1 === this.answer_1;
}
function Quiz_1(questions_1){
	this.score = 0;
	this.questions = questions_1;
	this.questionIndex = 0;
}
Quiz_1.prototype.getquestionIndex = function(){
	return this.questions[this.questionIndex];
}
Quiz_1.prototype.isEnded = function(){
	return this.questions.length === this.questionIndex;
}
Quiz_1.prototype.guess_1 = function(answer_1){
	
	if (this.getquestionIndex().correctAnswer_1(answer_1)){
		this.score++;
	}
	
	this.questionIndex++;
}

function populate_1(){
	if (quiz_1.isEnded()){
		showScores_1();
	} else {
		//show questions
		var element = document.getElementById("question_1");
		element.innerHTML = quiz_1.getquestionIndex().text;
		
		//show choices
		var choices_1 = quiz_1.getquestionIndex().choices_1;
		for (var i = 0; i < choices_1.length; i++){
			var element = document.getElementById("choice_1"+i);
			element.innerHTML = choices_1[i];
			guess_1("btn_1" + i, choices_1[i]);
		}
		showProsress_1();
	}
}

function guess_1 (id, guess){
	var button = document.getElementById(id);
	button.onclick = function() {
		quiz_1.guess_1 (guess);
		populate_1();
	}
}

function showProsress_1(){
	var currentQuestionNumber = quiz_1.questionIndex + 1;
	var element = document.getElementById("progress_1");
	element.innerHTML = "Вопрос " + currentQuestionNumber + " из " + quiz_1.questions.length;
}

function showScores_1(){
	$.ajax({
		url: "result.php",
		type: "POST",
		data: ({score: 12/questions_1.length*quiz_1.score, Test : 2}),
		dataType : "html",
		//success: funcSecsess
	}).done(function (msg) {console.log(msg);});
	var gameOverHtml = "<h1>Результат</h1>";
	gameOverHtml += "<h2 id = 'score'>Ваши балы:" + 12/questions_1.length*quiz_1.score + "</h2>";
	var element = document.getElementById("quiz_1");
	element.innerHTML = gameOverHtml;
}

var questions_1 = [
	new Question_1("1.	Тактильная информация воспринимается органами:", ["а) вкуса", " б) зрения", " в) осязания", "г) слуха"], " в) осязания"),
	new Question_1("2.	Решение задач по математике - это процесс: ", ["а) поиска", "б) передачи", "в) хранения", "г) обработки"], "г) обработки"),
	new Question_1("3.	Портативное устройство для воспроизведения звуковых и видеозаписей: ", ["а) диктофон", "б) игровые приставки", "в) плеер", "г) факс"], "б) игровые приставки"),
	new Question_1("4.	Примеры графического представления информации:", ["а) раскаты грома", "б) песня", "в) сказка", "г) фотография"], "г) фотография"),
	new Question_1("5.	Укажите устройства для поиска информации: ", ["а) фотокамера", "б) компьютер", "в) факс", "г) калькулятор"], "б) компьютер"),
	new Question_1("6.	Сообщение - это ... ", [" а) сведения о предмете, который вас интересует", "б) данные и сведения, представленные в различных формах", "в) различные формы представления информации", "г) информация, зафиксированная на носителе"], "в) различные формы представления информации")
];

var quiz_1 = new Quiz_1 (questions_1);
populate_1();


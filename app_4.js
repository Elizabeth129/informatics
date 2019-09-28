function Question_4(text, choices, answer){
	this.text = text;
	this.choices_4 = choices;
	this.answer_4 = answer;
}
Question_4.prototype.correctAnswer_4 = function(choice_4){
	return choice_4 === this.answer_4;
}
function Quiz_4(questions_4){
	this.score = 0;
	this.questions = questions_4;
	this.questionIndex = 0;
}
Quiz_4.prototype.getquestionIndex = function(){
	return this.questions[this.questionIndex];
}
Quiz_4.prototype.isEnded = function(){
	return this.questions.length === this.questionIndex;
}
Quiz_4.prototype.guess_4 = function(answer_4){
	
	if (this.getquestionIndex().correctAnswer_4(answer_4)){
		this.score++;
	}
	
	this.questionIndex++;
}

function populate_4(){
	if (quiz_4.isEnded()){
		showScores_4();
	} else {
		//show questions
		var element = document.getElementById("question_4");
		element.innerHTML = quiz_4.getquestionIndex().text;
		
		//show choices
		var choices_4 = quiz_4.getquestionIndex().choices_4;
		for (var i = 0; i < choices_4.length; i++){
			var element = document.getElementById("choice_4"+i);
			element.innerHTML = choices_4[i];
			guess_4("btn_4" + i, choices_4[i]);
		}
		showProsress_4();
	}
}

function guess_4 (id, guess){
	var button = document.getElementById(id);
	button.onclick = function() {
		quiz_4.guess_4 (guess);
		populate_4();
	}
}

function showProsress_4(){
	var currentQuestionNumber = quiz_4.questionIndex + 1;
	var element = document.getElementById("progress_4");
	element.innerHTML = "Вопрос " + currentQuestionNumber + " из " + quiz_4.questions.length;
}

function showScores_4(){
	$.ajax({
		url: "result.php",
		type: "POST",
		data: ({score: 12/questions_4.length*quiz_4.score, Test : 5}),
		dataType : "html",
		//success: funcSecsess
	}).done(function (msg) {console.log(msg);});
	var gameOverHtml = "<h1>Результат</h1>";
	gameOverHtml += "<h2 id = 'score'>Ваши балы:" + 12/questions_4.length*quiz_4.score + "</h2>";
	var element = document.getElementById("quiz_4");
	element.innerHTML = gameOverHtml;
}

var questions_4 = [
	new Question_4("Назвать примеры способов представления информации: </br> 1. Текстовый", ["а) рисунок", " б) смс-сообщение", " в) штрих-код на товаре", "г)сигнал светофора"], "б) смс-сообщение"),
	new Question_4("Назвать примеры способов представления информации: </br> 2. Графический", ["а) дорожные знаки", "б) реферат", "в) запах парфюмерии", "г) горячий чай"], "а) дорожные знаки"),
	new Question_4("Назвать примеры способов представления информации: </br> 3. Звуковой", ["а) мультфильм ", "б) сказка", "в) звонок на перемену", "г) сигналы семафорной азбуки на флоте"], "в) звонок на перемену"),
	new Question_4("Назвать примеры способов представления информации: </br> 4. Видео ", ["а) шум речки", "б) песня", "в) фрагмент немого кино", "г) штрих-код на товаре"], "в) фрагмент немого кино"),
	new Question_4("Назвать примеры способов представления информации: </br> 5. Условные сигналы", ["а) газетная статья", "б) иллюстрация к рассказу", "в) сигналы семафорной азбуки на флоте", "г) горячий чай"], "в) сигналы семафорной азбуки на флоте"),
	new Question_4("Назвать примеры способов представления информации: </br> 6. Комбинированный", ["а) видеоклип песни", "б) песня", "в) запах парфюмерии", "г) сигнал светофора"], "а) видеоклип песни")
];

var quiz_4 = new Quiz_4 (questions_4);
populate_4();


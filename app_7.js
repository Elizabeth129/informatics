function Question_7(text, choices, answer){
	this.text = text;
	this.choices_7 = choices;
	this.answer_7 = answer;
}
Question_7.prototype.correctAnswer_7 = function(choice_7){
	return choice_7 === this.answer_7;
}
function Quiz_7(questions_7){
	this.score = 0;
	this.questions = questions_7;
	this.questionIndex = 0;
}
Quiz_7.prototype.getquestionIndex = function(){
	return this.questions[this.questionIndex];
}
Quiz_7.prototype.isEnded = function(){
	return this.questions.length === this.questionIndex;
}
Quiz_7.prototype.guess_7 = function(answer_7){
	
	if (this.getquestionIndex().correctAnswer_7(answer_7)){
		this.score++;
	}
	
	this.questionIndex++;
}

function populate_7(){
	if (quiz_7.isEnded()){
		showScores_7();
	} else {
		//show questions
		var element = document.getElementById("question_7");
		element.innerHTML = quiz_7.getquestionIndex().text;
		
		//show choices
		var choices_7 = quiz_7.getquestionIndex().choices_7;
		for (var i = 0; i < choices_7.length; i++){
			var element = document.getElementById("choice_7"+i);
			element.innerHTML = choices_7[i];
			guess_7("btn_7" + i, choices_7[i]);
		}
		showProsress_7();
	}
}

function guess_7 (id, guess){
	var button = document.getElementById(id);
	button.onclick = function() {
		quiz_7.guess_7 (guess);
		populate_7();
	}
}

function showProsress_7(){
	var currentQuestionNumber = quiz_7.questionIndex + 1;
	var element = document.getElementById("progress_7");
	element.innerHTML = "Вопрос " + currentQuestionNumber + " из " + quiz_7.questions.length;
}

function showScores_7(){
	$.ajax({
		url: "result.php",
		type: "POST",
		data: ({score: Math.ceil(12/questions_7.length*quiz_7.score), Test : 8}),
		dataType : "html",
		//success: funcSecsess
	}).done(function (msg) {console.log(msg);});
	var gameOverHtml = "<h1>Результат</h1>";
	gameOverHtml += "<h2 id = 'score'>Ваши балы:" + Math.ceil(12/questions_7.length*quiz_7.score) + "</h2>";
	var element = document.getElementById("quiz_7");
	element.innerHTML = gameOverHtml;
}

var questions_7 = [
	new Question_7("1. Папка – это:", ["а) путь к файлу", "б) хранилище объектов, имеющее имя", "в) некоторая последовательность байтов, имеющая имя","г) ссылка на объект, облегчающая доступ к нему"], "б) хранилище объектов, имеющее имя"),
	new Question_7("2. Файл – это:", ["а) путь к файлу", "б) хранилище объектов, имеющее имя", "в) некоторая последовательность байтов, имеющая имя","г) ссылка на объект, облегчающая доступ к нему"], "в) некоторая последовательность байтов, имеющая имя"),
	new Question_7("3. Ярлык – это:", ["а) путь к файлу", "б) хранилище объектов, имеющее имя", "в) некоторая последовательность байтов, имеющая имя","г) ссылка на объект, облегчающая доступ к нему"], "г) ссылка на объект, облегчающая доступ к нему"),
	new Question_7("4. Папки делятся на:", ["а) сетевые и рабочие", "б) системные и рабочие", "в) системные и несистемные","г) сетевые, рабочие и простые"], "б) системные и рабочие"),
	new Question_7("5. Содержимое системных папок менять:", ["а) нельзя", "б) можно", "в) иногда разрешается","г) - ?"], "а) нельзя"),
	new Question_7("6. Содержимое рабочих папок менять:", ["а) нельзя", "б) можно", "в) иногда разрешается","г) - ?"], "б) можно"),
	new Question_7("7. Вложенные папки - это папки:", ["а) с файлами внутри", "б) внутри которых есть другие папки", "в) которые находятся внутри другой папки","г) пустые"], "в) которые находятся внутри другой папки"),
	new Question_7("8. Отличительная особенность ярлыка:", ["а) имя", "б) стрелочка в верхнем углу", "в) стрелочка в нижнем углу","г) расширение"], "в) стрелочка в нижнем углу"),
	new Question_7("9. Отличительная особенность файла:", ["а) имя", "б) стрелочка в верхнем углу", "в) стрелочка в нижнем углу","г) расширение"], "г) расширение"),
	new Question_7("10. Диски обозначаются:", ["а) номерами", "б) буквами английского алфавита", "в) буквами русского алфавита","г) именами"], "б) буквами английского алфавита"),
	new Question_7("11. При удалении ярлыка программа, на которую он ссылается:", ["а) удаляется", "б) не удаляется", "в) как получится"], "б) не удаляется"),
	new Question_7("12. Количество символов в имени файла:", ["а) 100", "б) 50", "в) 200","г) 255"], "г) 255"),
	new Question_7("13. Какой значок из перечисленных МОЖНО использовать в имени файла?", ["а) «", "б) !", "в) &lt;","г) ?"], "б) !"),
	new Question_7("14. Папки имеют:", ["а) расширение", "б) тип", "в) имя","г) номер"], "в) имя")
];

var quiz_7 = new Quiz_7 (questions_7);
populate_7();


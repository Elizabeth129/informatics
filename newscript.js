function Scroll(){
	window.scrollTo(0, 0);
}
var makeMenu = function () {
  var elems = document.querySelectorAll('article>div'),
      menu = document.querySelector('aside>menu'),
      elem_li = {};
  for(var i = elems.length; i--;) {
    elem_li = document.createElement('li');
    elem_li.innerHTML = elems[elems.length - i - 1].querySelector('h2').innerHTML;
    elem_li.dataset.number = elems.length - i - 1;
    elem_li.addEventListener('click', showContent);
    menu.appendChild(elem_li);
  }
  document.querySelector('menu>li').click();
};
var showContent = function () {
  var elems = document.querySelectorAll('article>div'),
      isActive = this.parentElement.querySelector('.active');
  for(var i = elems.length; i--;) {
    elems[i].style.display = 'none';
  }
  if(isActive) isActive.removeAttribute('class');
  this.className = 'active';
  elems[this.dataset.number].style.display = 'block';
  window.scrollTo(0, 0);
};
var makeTOC = function () {
	var headers = document.querySelectorAll('div>article>div>dl~h3, div>article>div>dl~h4'),
		toc = document.querySelector('div>article>div>dl'),
		elem = elem_a = {};
	for(var i = 0, h = headers.length; i < h; i++) {
		elem_a = document.createElement('a');
		elem_a.href = '#myId' + i;
		elem_a.innerHTML = headers[i].innerHTML;
		if(headers[i].nodeName.toUpperCase() === 'H4') {
			elem = document.createElement('dd');
		} else {
			elem = document.createElement('dt');
		}
		elem.appendChild(elem_a)
		toc.appendChild(elem);
		headers[i].id = 'myId' + i;
	}
};
var removeAnswers = function (elem) {
	var elem_dd = document.createElement('dd'),
		elem_dl = elem.parentElement,
		elems_dd = elem_dl.querySelectorAll('dd');
	elem_dd.innerHTML = elem.innerHTML;
	for(var i = elems_dd.length; i--;) {
		elem_dl.removeChild(elems_dd[i]);
	}
	elem_dl.appendChild(elem_dd);
};
var showResult = function (elem) {
	var res = elem.parentElement.parentElement.querySelector('h4.result'),
	    right = elem.parentElement.parentElement.querySelectorAll('dl.right'),
		wrong = elem.parentElement.parentElement.querySelectorAll('dl.wrong'),
		cases = [2, 0, 1, 1, 1, 2],
		maxPoints = 12;
	if(right.length+wrong.length == res.dataset.allQuestions) {
		res.dataset.result = Math.ceil(maxPoints / res.dataset.allQuestions * right.length);
		res.innerHTML = res.dataset.result + [' балл', ' балла', ' баллов'][ (res.dataset.result % 100 > 4 && res.dataset.result % 100 < 20) ? 2 : cases[ (res.dataset.result%10 < 5) ? res.dataset.result % 10 : 5 ] ];
	}
}
var checkTest = function () {
	if(this.dataset.myAnswer === this.parentElement.dataset.right) {
		this.parentElement.className = 'right';
	} else {
		this.parentElement.className = 'wrong';
	}
	showResult(this);
	removeAnswers(this);
}
var makeTests = function () {
	var tests = document.querySelectorAll('article>div>section'),
		elems = questions = {};
	for(var j = tests.length; j--;) { // общее количество тестовых заданий
		questions = tests[j].querySelectorAll('dl');
		tests[j].querySelector('h4.result').dataset.allQuestions = questions.length;
		for(var k = questions.length; k--;) { //  количество вопросов в текущем тестовом задании
			elems = questions[k].querySelectorAll('dd');
			for(var i = elems.length; i--;) { // количество ответов на каждый вопрос
				elems[i].addEventListener('click', checkTest);
				elems[i].dataset.myAnswer = i;
			}
		}
	}
};
var loading = false;
$(window).scroll(function(){
if((($(window).scrollTop()+$(window).height())+250)>=$(document).height()){
  if(loading == false){
  loading = true;
  $('#loadingbar').css("display","block");
  $.get("load.php?start="+$('#loaded_max').val(), function(loaded){
    $('body').append(loaded);
    $('#loaded_max').val(parseInt($('#loaded_max').val())+50);
    $('#loadingbar').css("display","none");
    loading = false;
  });
  }
}
});
$(document).ready(function() {
$('#loaded_max').val(50);
});
var pointer = 0
var TP = ["Q1.html","Q2.html","Q3.html"]
var questionN = ["q1","q2","q3","q4","q5","q6","q7","q8","q9","q10","q11","q12","q13","q14","q15"]
var answers = [];

function turnNextPage(){
        window.location.href = "Q1.html";
    }

function submitAnswers() {

    var  form = document.getElementById('quizForm')
    var A = form.elements[questionN[pointer]].value
    answers.push(A);
    pointer++;
    turnNextPage();
    console.log(answers);
}

function reSetPointer(){
    pointer =0;
}

function decrePointer(){
    pointer --;
}


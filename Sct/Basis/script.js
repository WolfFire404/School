const myProblem = document.getElementById('problem');

createProbem();

function createProblem(){
    let problem = getNumber + "*" + getNumber();
    myProblem.innerHTML = problem;
}

function getNumber(){
    return Math.floor(Math.random()*9)+1;
}
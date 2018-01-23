function rollDice1() {
    var rand = documenet.getElementById("button");
    var randomDice = Math.floor(6 * Math.random()) + 1;
    if (rand == randomDice) {
        result = 'Laimėjai';
    } else {
        result = 'Pralaimėjai';
    }


    document.getElementById("result").innerHTML = result;
    document.getElementById("result").innerHTML = randomDice + "+" + rand;



}
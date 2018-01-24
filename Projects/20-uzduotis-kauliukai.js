var array = [];

retrieveLocalStorage();//iskelia//jeigu neveikia uzkomentuoti, refresh site ir vel atkomentuoti//BUGAS

var wincounter = 0;
var loosecounter = 0;

var btn = document.getElementById("start");
btn.addEventListener("click", skait);

function skait(){
    var skaicius = document.getElementById("skaicius").value;
    var r = Math.floor(6*Math.random())+1;

    var result = "";

    console.log(array);
    if (skaicius == r){
        result = "Win";
        wincounter = wincounter +1;
    }else{
        result = "Lost";
        loosecounter++;
    }

    document.getElementById("result1").innerHTML = result;
    document.getElementById("result").innerHTML = r + "+" + skaicius;
    document.getElementById("result4").innerHTML = 1 + wincounter;
    document.getElementById("result3").innerHTML = 1 + loosecounter;

    array.push(result);

    printArray(array);

    localStorage.setItem("rezultatai", array.toString()); //issaugo sita funkcija
    localStorage.setItem("winai", wincounter.toString());
    localStorage.setItem("losai", loosecounter.toString());
}

function printArray(masyvas){
    var h = "";
    h = "<ul>";
    for(var i = 0;i < masyvas.length;i++){
        console.log(masyvas[i]);
        h = h + "<li>" +masyvas[i] +"</li>";
    }
    h = h + "</ul>";
    document.getElementById("result2").innerHTML = h;
}

function retrieveLocalStorage(){
    //TODO: get shoppinglist from local storage
    var localstorage_data = localStorage.getItem("rezultatai");
    var stored_wincounter = localStorage.getItem("winai");
    var stored_loosecounter = localStorage.getItem("losai");

    //console.log(localstorage_data);
    var _arr = localstorage_data.split(',');

    //Display shopping list
    printArray(_arr);
    document.getElementById("result4").innerHTML = stored_wincounter;
    document.getElementById("result3").innerHTML = stored_loosecounter;
}
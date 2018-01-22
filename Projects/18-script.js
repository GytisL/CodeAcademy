var btn_add = document.getElementById("add");

var array = [];

btn_add.addEventListener("click", addToList);
btn_add.addEventListener("click", say_Hello);

btn_remove.addEventListener("click", );


function say_hello(){

}

function addToList(){
    var product = document.getElementById("product").value;
    console.log('pridedam');
}


function removeFromList(){
    var product = document.getElementById("product").value;
    console.log('pridedam:' + product);
    var index = array.indexOf(product);

    if(index > -1){
        console.log("Product found: "+product +" because index:"+index);
        array.splice(index, 1);
        remove (index);
    }else {
        console.log("Can't remove:"+product+" because index:"+index);
    }
    renderArray(array);
}

function remove(index){
    array.splice(index, 1);
}

function renderArray(x){
    //console.log(x);
    var h =
}
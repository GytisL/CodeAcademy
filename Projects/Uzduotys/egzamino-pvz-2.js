/*$ (function() {

});

visiskai identiski

$(document).ready(function(){

});*/

*$ (function() {
    $("#btn_search").each(function(){
        if(!$("this").val()){
            var field_rel = $(this).attr("rel");
            var _val = $(this).val();//cia privalo buti numeris
            if(_val){
                console.log(field_rel);
                if(isNAN(_val)){
                   errors.push(field_rel +" turi but numeris.");
                }
            }else{
               $(this).addClassic("is-invalid");
               errors.push(field_rel+" yra privalomas");
            }
            //errors.push("Brand yra privalomas.");
            //alert('btn_search clicked!');
        });

        //atvaizduoti errorus jeigu tokiu yra
        if(error.legth > 0){
            showErrors(errors);
        }

        //find cars
        if(true){

        }

        //surinkti informacija is formos
        //patikrinti ar informacija yra teisinga
        //ieskoti masinos
    })
});

function showError(errors){
    var h = "";
    for(var i=0; i<errors.legth; i++){
        h = h + "<p class='error_msg'>"
    }
    $("#result").html(h);
}


function findCarsByBrand(){

}

function findCarsByHP(){

}

function findCarsByDate(){
    let h = "";
    for(var i = 0; i<array.length; i++){
        h = h + "<h2>"+array[i].brand + " " + array[i].model + "</h2>";
        h = h + "<img class='carImg' src='img/"+array[i].brand + ".png' " + alt='"+array[i].brand+"'/>";
        h = h + "<table>";
        h = h + "<tr><th>HP:</th><td>"array[i].power+"</td></tr>";

    }
}
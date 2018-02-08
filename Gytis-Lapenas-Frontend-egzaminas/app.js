function showResult() {

    var errors = [];

    var _name = document.getElementById("name").value;

    var _bday = document.getElementById("date").value;

    var res = "<h2>" + _name + "</h2><br><p>" + "Gimtadienis: " + _bday + "</p>";


    document.getElementById("result").innerHTML = res;


    $(document).ready(function () {

        $('#btn').click(function () {

            var name = $('#name').val();
            var date = $('#date').val();

            if (name == "") {
                name = "Neįvestas vardas";
            }else if (date == "") {
                date = "Neįvesta gimimo diena";
                var days = Date.parse(date) / (60 * 60 * 24 * 1000);
            }else

            days = "Nepasirinkote datos";

            display(name, date, days);

        });
    });

    function display(name, date, days) {
        var h = '';
        h += '<h1>' + name + '</h1><br/>';
        h += '<p>Gimimo data: ' + date + '</p><br/>';
        h += '<p>Amžius: 34 metai</p><br/>';
        h += '<p>Gimė prieš ' + days + '</p><br/>';

        $('#result').html(h);
    }

    onclick = showResult();
}


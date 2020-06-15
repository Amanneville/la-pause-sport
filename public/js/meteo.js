var callBackSucess = function(data) {
    console.log("donnes api", data)
    alert ("Meteo temp : " + data.main.temps);

    var element = document.getElementByID("zone_meteo");
    element.innerHTML = "La temperature aujourd'hui est de " + data.main.temp;

}

function buttonClickGET(){
    var queryloc = document.getElementById("queryLoc").value;

    var url = "http://api.openweathermap.org/data/2.5/weather?zip=33000,fr&appid=f0ee7cd8f45c9cdcafd9dffea5bb05d3&units=metric"

    $.get(url, callBackSucess).done(function() {
        //alert ("second sucess" );
    })
        .fail(function() {
            alert("error");
        })
        .always(function(){
            //alert( "finished" );
        })
}

var callBackSucess = function(data) {
    console.log("donnes api", data)

    var element = document.getElementById("zone_meteo");
    element.insertAdjacentHTML('beforeend', '<b>' + data.main.temp.toFixed(2) + 'C°</b>');

}

function buttonClickGET(){
    var codePostalUser = document.getElementById("code_postal_user").value;

    var url = "https://api.openweathermap.org/data/2.5/weather?zip="+codePostalUser+",fr&appid=f0ee7cd8f45c9cdcafd9dffea5bb05d3&units=metric"

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

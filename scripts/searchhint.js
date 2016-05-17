function searchHint(textboxId, dataController){

    var availableTags = [];


    $( "#localitate" ).autocomplete({
        source: availableTags
    });

    var data = [];

     $(document).ready(function(){              
         $('#localitate').keyup(function () {
            // alert('changed');
             if( $("#localitate").val().length > 1 ){

            //the ajax request
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    // gets the requested data from the server
                    window.data = xmlhttp.responseText;
                    // splits and puts into the variable
                    window.availableTags = window.data.split("/");
                }
            }

            // sends the requiest to the controller 
            var local = "http://localhost/anuntulmeu/index.php/adaugasos/localitati/" + $("#localitate").val();
             // alert(window.location.hostname);
            xmlhttp.open("GET", local , true);
            xmlhttp.send();





            $( "#localitate" ).autocomplete({
                source: availableTags
            });
             }

         });
     });
}


 searchHint("alma","korte");
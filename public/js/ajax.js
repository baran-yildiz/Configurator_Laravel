selectsLeft = document.getElementById("divLeft").querySelectorAll("select");
selectsRight = document.getElementById("divRight").querySelectorAll("select");

function showBreite( name )
{
    if (name == "isol"){
        selectsLeft[2].disabled = false;
        verbinder = $("#linke").val();
        isoliert = $("#isol").val();
        breite = 0;
        lange = 0;
        
    }else if (name == "isor"){
        selectsRight[2].disabled = false;
        verbinder = $("#rechte").val();
        isoliert = $("#isor").val();
        breite = 0;
        lange = 0;   
    }
    
    $.ajax({
         type: "POST",
         url: ajax_url,
         dataType : 'JSON',
         data: { 
                 verbinder : verbinder,
                 isoliert : isoliert,
                 breite : breite,
                 lange : lange,
                 name : name,
                 _token : token
         },
         success:function(response){
            response = JSON.parse(response);
            if (name == "isol"){
                selectsLeft[2].innerHTML = "<option value = 0>Bitte Auswaehlen</option>";
                response.forEach(item => selectsLeft[2].innerHTML += `<option value = ${item.widthl}>${item.widthl}</option>`);
   
            }else if(name == "isor"){
                selectsRight[2].innerHTML = "<option value = 0>Bitte Auswaehlen</option>";
                response.forEach(item => selectsRight[2].innerHTML += `<option value = ${item.widthr}>${item.widthr}</option>`);

            }
           }
         
    });
}

function showLange( name )
{
    if (name == "widthl"){
        selectsLeft[3].disabled = false;
        verbinder = $("#linke").val();
        isoliert = $("#isol").val();
        breite = $("#widthl").val();
        lange = 0;
        
    }else if (name == "widthr"){
        selectsRight[3].disabled = false;
        verbinder = $("#rechte").val();
        isoliert = $("#isor").val();
        breite = $("#widthr").val();
        lange = 0;  
    }
    
    $.ajax({
         type: "POST",
         url: ajax_url,
         dataType : 'JSON',
         data: { 
                 verbinder : verbinder,
                 isoliert : isoliert,
                 breite : breite,
                 lange : lange,
                 name : name,
                 _token : token
         },
         success:function(response){
            response = JSON.parse(response);
            console.log(response[0]);
            if (name == "widthl"){
                selectsLeft[3].innerHTML = "<option value = 0>Bitte Auswaehlen</option>";
                response.forEach(item => selectsLeft[3].innerHTML += `<option value = ${item.lenl}>${item.lenl}</option>`);
            }else if(name == "widthr"){
                selectsRight[3].innerHTML = "<option value = 0>Bitte Auswaehlen</option>";
                response.forEach(item => selectsRight[3].innerHTML += `<option value = ${item.lenr}>${item.lenr}</option>`);
            }
           }
         
    });
}

function showFarbe( name )
{
    if (name == "lenl"){
        selectsLeft[4].disabled = false;
        verbinder = $("#linke").val();
        isoliert = $("#isol").val();
        breite = $("#widthl").val();
        lange = $("#lenl").val();
        
    }else if (name == "lenr"){
        selectsRight[4].disabled = false;
        verbinder = $("#rechte").val();
        isoliert = $("#isor").val();
        breite = $("#widthr").val();
        lange = $("#lenr").val();   
    }
    
    $.ajax({
         type: "POST",
         url: ajax_url,
         dataType : 'JSON',
         data: { 
                 verbinder : verbinder,
                 isoliert : isoliert,
                 breite : breite,
                 lange : lange,
                 name : name,
                 _token: token
         },
         success:function(response){
            response = JSON.parse(response);
            if (name == "lenl"){
                selectsLeft[4].innerHTML = "<option value = 0>Bitte Auswaehlen</option>";
                response.forEach(item => selectsLeft[4].innerHTML += `<option value = ${item.farbel}>${item.farbel}</option>`);
            }else if(name == "lenr"){
                selectsRight[4].innerHTML = "<option value = 0>Bitte Auswaehlen</option>";
                response.forEach(item => selectsRight[4].innerHTML += `<option value = ${item.farber}>${item.farber}</option>`);
            }
           }
         
    });
}

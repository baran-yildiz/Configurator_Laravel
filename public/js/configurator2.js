/* Filtering AWG and UL sizes...
    * We change AWG select options according to the UL options.
    * Each UL options open or close the other AWG options.
    * AWG : cable thickness..
    * UL : Cable types..
*/

function filterSizeofCables(){
    const awgArr = [
        [1,0,0,0,0,0,0,0,0,0,0],
        [1,0,0,1,1,1,1,1,1,1,0],
        [1,1,1,1,1,1,1,1,1,0,0],
        [1,0,0,0,1,1,1,1,1,1,1],
        [1,0,0,0,0,0,0,1,0,0,0]
    ];
    let AWG = document.querySelector('#kabeldicke');
    let ulValue = document.form1.kabeltyp.value;
    let awgOpts = AWG.querySelectorAll('option');
    let i = 0;
    AWG.disabled = false;
    AWG.selectedIndex = 0;

    awgOpts.forEach(function(item){
        item.style.display = awgArr[ulValue][i] == 1 ? 'inline-block': 'none';
        i += 1;
    });

}
function changePhotoLeft(){

    selectsLeft = document.getElementById("divLeft").querySelectorAll("select");
    imageLeft = document.querySelector("#imgLeft");
    colorCable = document.querySelector('#farbek').value;

    if(selectsLeft[0].selectedIndex == 5){
        selectsLeft[1].disabled = false;
        selectsLeft[1].options[4].style.display = 'none'
        selectsLeft[1].options[5].style.display = 'none'
        selectsLeft[1].options[6].style.display = 'none'

        if(selectsLeft[4].disabled == true){
            imageLeft.src = `configurator photos/${selectsLeft[0].value}/blau.png`;
        }else{
            imageLeft.src = `configurator photos/${selectsLeft[0].value}/${selectsLeft[4].options[selectsLeft[4].selectedIndex].text}.png`;
        }
    }
    else if (selectsLeft[0].selectedIndex == 9) {
        for (let i = 0; i < 10; i++) {
            selectsLeft[4].options[i].style.display = 'inline-block';

        }
        selectsLeft[4].options[8].style.display = 'none';
        imageLeft.src = `configurator photos/${selectsLeft[0].value}/${selectsLeft[4].value}.png`;
        imageLeft.disabled = false;
        selectsLeft[1].disabled = false;
        // offenes Ende seciliyse renklerin hepsini kapat secili rengi de bosalt.
    }else if (selectsLeft[0].selectedIndex == 0) {
        imageLeft.src = "configurator photos/offenes Ende/offenes Ende.png";
        for(let i = 1; i<5; i++){
            selectsLeft[i].disabled = true; 
            selectsLeft[i].selectedIndex = 0;
        }
    }else if(selectsLeft[0].selectedIndex == 4){
        if(colorCable == "0"){
            colorCable = "Blau";
        }
        imageLeft.src = `configurator photos/Teilabzug/${colorCable}.png`;
        for(let i = 1; i<5; i++){
            selectsLeft[i].disabled = true; 
            selectsLeft[i].selectedIndex = 0;
        }

    }else if(selectsLeft[0].selectedIndex == 2){
        imageLeft.src = "configurator photos/Schnitt.png";
        for(let i = 1; i<5; i++){
            selectsLeft[i].disabled = true; 
            selectsLeft[i].selectedIndex = 0;
        }
    }else if(selectsLeft[0].selectedIndex == 3){
        imageLeft.src = "configurator photos/Verdrecht.png";
        for(let i = 1; i<5; i++){
            selectsLeft[i].disabled = true; 
            selectsLeft[i].selectedIndex = 0;
        }
    }else{
        imageLeft.src = `configurator photos/${selectsLeft[0].value}/${selectsLeft[4].value}.png`;
        selectsLeft[1].selectedIndex = 0;
        selectsLeft[1].disabled = true;
    }


    fotoyok = -1;
    //image1.onerror = function(){imgerrfncsol()};
}

function closeOpts(name){
   let selectsLeft = document.getElementById('divLeft').querySelectorAll('select');
   let selectsRight = document.getElementById('divRight').querySelectorAll('select');
    
    if(name == selectsLeft[2].name){
       selectsLeft[4].disabled = true;
       selectsLeft[4].selectedIndex = 0;
       selectsLeft[3].disabled = true;
       selectsLeft[3].selectedIndex = 0;
    }else if(name == selectsRight[2].name){
       selectsRight[4].disabled = true;
       selectsRight[4].selectedIndex = 0;
       selectsRight[3].disabled = true;
       selectsRight[3].selectedIndex = 0;
    }else if(name == selectsRight[1].name){
        for(let i=2; i<5; i++){
            selectsRight[i].disabled = true;
            selectsRight[i].selectedIndex = 0;
        }
    }else if(name == selectsLeft[1].name){
        for(let i=2; i<5; i++){
            selectsLeft[i].disabled = true;
            selectsLeft[i].selectedIndex = 0;
        }
    }else if(name == selectsLeft[3].name){
        selectsLeft[4].disabled = true;
        selectsLeft[4].selectedIndex = 0;

    }else if(name == selectsRight[3].name){
        selectsRight[4].disabled = true;
        selectsRight[4].selectedIndex = 0;
    }
}

function changePhotoLeft1(){
    imageLeft = document.querySelector("#imgLeft");
    let selectsLeft = document.getElementById('divLeft').querySelectorAll('select');

    if(selectsLeft[1].value == "ohne isolation" || selectsLeft[1].value == "ohne isolation(verzinnt)"){
        imageLeft.src = `configurator photos/Ohne iso/${selectsLeft[0]}.png`;
        selectsLeft[4].selectedIndex = 0;
        selectsLeft[4].disabled = true;
    }else {
        changePhotoLeft();
    }


    fotoyok = -1;
    //image1.onerror = function(){imgerrfncsol()};

}

function changePhotoRight1(){
    imageRight = document.querySelector("#imgRight");
    let selectsRight = document.getElementById('divRight').querySelectorAll('select');

    if(selectsRight[1].value == "ohne isolation" || selectsRight[1].value == "ohne isolation(verzinnt)"){
        imageRight.src = `configurator photos/Ohne iso/${selectsRight[0]}.png`;
        selectsRight[4].selectedIndex = 0;
        selectsRight[4].disabled = true;
    }else {
        changePhotoRight();
    }


    fotoyok = -1;
    //image1.onerror = function(){imgerrfncsol()};
}


function changePhotoRight(){
    selectsRight = document.getElementById("divRight").querySelectorAll("select");
    imageRight = document.querySelector("#imgRight");

    if(selectsRight[0].selectedIndex === 5){
        selectsRight[1].disabled = false;
        selectsRight[1].options[4].style.display = 'none'
        selectsRight[1].options[5].style.display = 'none'
        selectsRight[1].options[6].style.display = 'none'

        if(selectsRight[4].disabled === true){
            imageRight.src = `configurator photos/${selectsRight[0].value}/blau.png`;
        }else{
            imageLeft.src = `configurator photos/${selectsRight[0].value}/${selectsRight[4].options[selectsRight[4].selectedIndex].text}.png`;
        }
    }
    else if (selectsRight[0].selectedIndex === 9) {
        for (let i = 0; i < 10; i++) {
            selectsRight[4].options[i].style.display = 'inline-block';

        }
        selectsRight[4].options[8].style.display = 'none';
        imageRight.src = `configurator photos/${selectsRight[0].value}/${selectsRight[4].value}.png`;
        imageRight.disabled = false;
        selectsRight[1].disabled = false;
        // offenes Ende seciliyse renklerin hepsini kapat secili rengi de bosalt.
    }else if (selectsRight[0].selectedIndex == 0) {
        imageRight.src = "configurator photos/offenes Ende/offenes Ende.png";
        for(let i = 1; i<5; i++){
            selectsRight[i].disabled = true; 
            selectsRight[i].selectedIndex = 0;
        }
    }else if(selectsRight[0].selectedIndex == 4){
        colorCable = document.querySelector('#farbek').value;
        if(colorCable == "0"){
            colorCable = "Blau";
        }
        imageRight.src = `configurator photos/Teilabzug/${colorCable}.png`;
        for(let i = 1; i<5; i++){
            selectsRight[i].disabled = true; 
            selectsRight[i].selectedIndex = 0;
        }

    }else if(selectsRight[0].selectedIndex == 2){
        imageRight.src = "configurator photos/Schnitt.png";
        for(let i = 1; i<5; i++){
            selectsRight[i].disabled = true; 
            selectsRight[i].selectedIndex = 0;
        }
    }else if(selectsRight[0].selectedIndex == 3){
        imageRight.src = "configurator photos/Verdrecht.png";
        for(let i = 1; i<5; i++){
            selectsRight[i].disabled = true; 
            selectsRight[i].selectedIndex = 0;
        }
    }else{
        imageRight.src = `configurator photos/${selectsRight[0].value}/${selectsRight[4].value}.png`;
        selectsRight[1].selectedIndex = 0;
        selectsRight[1].disabled = true;
    }

    fotoyok = -1;
    //image1.onerror = function(){imgerrfncsag()};

}


function resdegorta(){
    let images = document.querySelectorAll('img');
    let color = document.form1.farbek.value;
    let selectsLeft = document.form1.linke.value;
    color.toString;

    if (selectsLeft == "Teilabzug"){
        images[0].src = `configurator photos/Teilabzug/${color}.png`;
    }

    images[1].src = `configurator photos/Litzen/${color}.png`;
    fotoyok = -1;
    //image1.onerror = function(){imgerrfnc()};
}

function imgerrfnc(){
    alert("Dieses Konfiguration ist nicht Verfugbar.");
    document.getElementById("imgCenter").src = "/configurator photos/offenes Ende/offenes Ende.png";
    fotoyok = 1;
}

function imgerrfncsol(){
    alert("Dieses Konfiguration ist nicht Verfugbar.");
    document.getElementById("imgLeft").src = "/configurator photos/offenes Ende/offenes Ende.png";
    fotoyok = 1;
}

function imgerrfncsag(){
    alert("Dieses Konfiguration ist nicht Verfugbar.");
    document.getElementById("imgRight").src = "/configurator photos/offenes Ende/offenes Ende.png";
    fotoyok = 1;
}
function touchLata() {
    var userName = prompt("Qual o nome da sua Lata ?","Nick");
    var btPlay = document.getElementById("bt_container");

    if (userName){
        alert("Prazer em conhecer você, " + userName + ".");
        document.getElementById("lataimg").src = "../img/latoso_smile.png";
        btPlay.classList.toggle("hide");
        //document.getElementById("nickP").textContent = userName;
        $('#nickP').val(userName);
    }
}

function play() {
    var btplay = document.getElementById("bt_container");
    var ctLata = document.getElementById("container_lata");

    document.getElementById("lataimg").src = "../img/latoso_play.png";

    btplay.classList.toggle("hide");
    ctLata.classList.toggle("move1");
}
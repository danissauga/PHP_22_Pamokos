function test_gamer_name(gname_1,gname_2){
    var zaisti_1 = false;
    var zaisti_2 = false;
    var z1 = gname_1.value;
    var z2 = gname_2.value;
    var start_game = Math.floor(Math.random() * 2) + 1;

    if ((z1) && (z1.length >= 3)) {
        document.getElementById("user_1_name").innerHTML = z1;
        gname_1.setAttribute("hidden", "");
        zaisti_1 = true;
    } else {
        alert ('Pertrumpas Pirmo žaidėjo vardas min 3 simboliai');
    }
     if ((z2) && (z2.length >= 3)) {
        document.getElementById("user_2_name").innerHTML = z2;
        gname_2.setAttribute("hidden", "");
        zaisti_2 = true;
    } else {
        alert ('Pertrumpas Antro žaidėjo vardas min 3 simboliai');
    }
    if ((zaisti_1) && (zaisti_2)) {
       document.getElementById('pradeti_zaidima').style.display = 'none';
       document.getElementById('allert').style.display = 'none';
       document.getElementById('mesti_kauliuka').style.display = 'inline';
       document.getElementById('end_game_information').style.display = 'inline';
    }
       var button_info = document.getElementById("push_ball");
       var button_value = button_info.value;
       button_info.innerHTML = 'Žaidimą pradeda ir kamuoliuką meta ' + document.getElementById('user_' + start_game).value + '!';
       document.getElementById('kas_meta').value = start_game;
}
function get_ball(){
       var bal = Math.floor(Math.random() * 6) + 1;
       return bal;
}
function pull_the_ball(who_pull) {
    var ball = get_ball();
    if (document.getElementById("start_pic")) {
       document.getElementById("start_pic").src = './img/countdown2.gif';
    }
   setTimeout(
  function()
  {
    if (document.getElementById("start_pic")) {
       document.getElementById("start_pic").src = './img/' + ball + '.jpg';
       let score = 0;
       let curent_score = parseInt(document.getElementById('user_'+ who_pull + '_score').value);
       score = curent_score + ball;
       document.getElementById('user_'+ who_pull + '_score').value = score;
       document.getElementById('display_'+ who_pull + '_score').innerHTML = score;
       if (score >= 30) {
        document.getElementById('restart').style.display = "inline";
        document.getElementById("push_ball").style.display = "none";
        let info_bar = document.getElementById("info_bar");
            info_bar.innerHTML = 'Žaidime laimėjo, surinkęs (-us) ' + score + ' taškų (-us) - ' + document.getElementById('user_' + who_pull).value;
    }
        else {
            if (who_pull == 1) { var next_pull = 2; } else { var next_pull = 1;}
            document.getElementById('kas_meta').value = next_pull;
            }
     var button_info = document.getElementById("push_ball");
     var button_value = button_info.value;
       button_info.innerHTML = 'Kamuoliuką meta: ' + document.getElementById('user_' + next_pull).value + '!';
    }
  }, 2600);




}
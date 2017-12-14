function daugyba(a, b){
    return a * b;
}

var auto = ['bmw', 'audi', 'honda', 'hyundai'];
var numeris = null;
for (var i=0; i<auto.length; i++){
    var masina = auto[i];
    if (masina == 'honda') numeris = i;
}

function surastiauto(masina){
    var rezultatas = null;
    var n = auto.length;
    var i = 0;
    while(rezultatas == null && i<n){
        if (auto[i] == masina) rezultatas = i;
        i++;
    }
    return rezultatas;
}

function surasti(arg){
    var rezultatas;
    switch (arg){
        case 'bmw': rezultatas = 'vokieciu'; break;
        case 'honda': rezultatas = 'japonu'; break;
        default: rezultatas = 'nezinomas';
    }
    return rezultatas;
}
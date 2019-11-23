var username = 'pend';
var password = '123-234FEND';


function validasi(username) {
    var kecil = username.toLowerCase();
    var angka = username.toNumeric();
    var simbol = username.toSymbol();
    if (username.length >= 3 && username.length <= 5 && username == kecil) {
        return true;
    } else if (username = angka && username = simbol){
        return false;
    } else {
        return false;
    }
}
console.log(validasi(username));

function validasiPass(password) {
    var angkaa = password.toNumeric(0, 3);
    var simboll = password.substr(4, 1);
    var angkaaa = password.toNumeric(5, 3);
    var besar = password.toUpperCase(8, 4)

    if (password == angkaa && simboll == '-' && password == angkaaa && password == besar) {
        return true;
    } else {
        return false;
    }
}

console.log(validasiPass(password));
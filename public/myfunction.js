function tambah() {
    var bil1 = document.getElementById("bil1"); //membaca object
    var bil2 = document.getElementById("bil2"); //membaca object
    var hasil = document.getElementById("hasil"); //membaca object

    hasil.innerHTML = parseInt(bil1.value) + parseInt(bil2.value);
}

function kali() {
    var bil1 = document.getElementById("bil1"); //membaca object
    var bil2 = document.getElementById("bil2"); //membaca object
    var hasil = document.getElementById("hasil"); //membaca object

    hasil.innerHTML = bil1.value * bil2.value;
}
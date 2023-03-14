//Menampilkan Harga Berdasakran jumlah Durasi Sewa
var inputDurasi = document.getElementById('durasi');
var harga = document.getElementById('harga');

inputDurasi.addEventListener('keyup', function(){
    harga.value = 60000 * inputDurasi.value;
});
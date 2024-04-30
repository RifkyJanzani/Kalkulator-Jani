<!-- Nama: Muhammad Rifky Janzani
NIM: 2201169
RPL 4A -->

<?php
function tambah($angka1, $angka2) {
    return $angka1 + $angka2;
}
function kurang($angka1, $angka2) {
    return $angka1 - $angka2;
}
function bagi($angka1, $angka2) {
    if($angka2 != 0) {
        return $angka1 / $angka2;
    } else {
        return "Tidak terdefinisi";
    }
}
function kali($angka1, $angka2) {
    return $angka1 * $angka2;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Muhammad Rifky Janzani 2201169 4A </title>
    <link rel="stylesheet" href="./style/style.css">
</head>
<body>
    <div class="calculator">
        <div class="wrapper">
            <div class="hasil">
                <?php
                
                if(isset($_POST['angka1']) && isset($_POST['angka2'])) {
                    $angka1 = $_POST['angka1'];
                    $angka2 = $_POST['angka2'];
                    $hasil = '';
        
                    if(isset($_POST['tambah'])){
                        $hasil = tambah($angka1, $angka2);
                    }
                    if(isset($_POST['kurang'])){
                        $hasil = kurang($angka1, $angka2);
                    }
                    if(isset($_POST['bagi'])){
                        $hasil = bagi($angka1, $angka2);
                    }
                    if(isset($_POST['kali'])){
                        $hasil = kali($angka1, $angka2);
                    }
        
                    echo '<div class="hasil-text">'.$hasil.'</div>';
                }
                ?>
            </div>
            <div class="box">
                <form method="post" action="" name="calculatorForm" onsubmit="return validateForm()">
                    <div class="field">
                        <input type="number" name="angka1" placeholder="Masukkan Angka Pertama" >
                        <input type="number" name="angka2" placeholder="Masukkan Angka Kedua" >
                    </div>
                    <div class="btn">
                        <input type="submit" name="tambah" value="+">
                        <input type="submit" name="kurang" value="-">
                        <input type="submit" name="kali" value="x">
                        <input type="submit" name="bagi" value="÷">
                    </div>
                </form>
            </div>
            <p>Muhammad Rifky Janzani</p>
            <p>2201169</p>
        </div>
    </div>
</body>
<script>
        function validateForm() {
            var angka1 = document.forms["calculatorForm"]["angka1"].value;
            var angka2 = document.forms["calculatorForm"]["angka2"].value;
            if (angka1 == "" || angka2 == "") {
                alert("Isi kedua angka terlebih dahulu..");
                return false;
            }
        }
</script>
</html>




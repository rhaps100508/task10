<html>
    <form action="" method="get">
        <input type="number" name="angka1" placeholder="Angka 1">
        <input type="number" name="angka2" placeholder="Angka 2">
        <button type="submit">jumlahkan</button>
    </form>
</html>
<h2>
<?php
    $no1 = $_GET['angka1'];
    $no2 = $_GET['angka2'];
    $hasil = $no1 + $no2;
    echo "Hasil dari $no1 + $no2 = $hasil";
?>
</h2>
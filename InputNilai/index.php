<form action="" method="POST">
    <form action="daftar.php" method="POST" class="">
    <fieldset>
        <p>
            <label for="nim">Nim <span> : </span></label>
            <input required type="text" name="nim" placeholder="17.11.1150">
        </p>
        <p>
            <label for="kehadiran">Jumlah Kehadiran <span> : </span></label>
            <input required type="number" min="0" max="14" name="kehadiran" placeholder="10">
        </p>
        <p>
            <label for="uts"> UTS <span> : </span></label>
            <input required type="number" min="0" max="100" name="uts" placeholder="10">
        </p>
        <p>
            <label for="uas"> UAS <span> : </span></label>
            <input required type="number" min="0" max="100" name="uas" placeholder="10">
        </p>
        <p>
            <label for="tugas"> Tugas <span> : </span></label>
            <input required type="number" min="0" max="100" name="tugas" placeholder="10">
        </p>
        <p>
            <label for="kuis"> Kuis <span> : </span></label>
            <input required type="number" min="0" max="100" name="kuis" placeholder="10">
        </p>
        <p>
            <input type="submit" value="Hitung Nilai" name="hitung">
        </p>
    </fieldset>
</form>

<?php

if (isset($_POST['hitung'])) {

    $nim = $_POST['nim'];
    $uts = $_POST['uts'];
    $kehadiran = $_POST['kehadiran'];
    $uas = $_POST['uas'];
    $tugas = $_POST['tugas'];
    $kuis = $_POST['kuis'];

    $presensi = (($kehadiran / 14) * 0.1) * 100;
    $nilai_uts = $uts * 0.3;
    $nilai_uas = $uas * 0.4;
    $nilai_tugas = ($tugas + $kuis) * 0.2;

    $nilai_akhir = round($presensi + $nilai_uts + $nilai_uas + $nilai_tugas);

    if ($nilai_akhir > 100) {
        $nilai_akhir = 100;
    }

    if ($nilai_akhir > 80) {
        echo "Nim " . $nim . " nilai akhir anda : " . $nilai_akhir . " dengan grade A";
    } else if ($nilai_akhir >= 60) {
        echo "Nim " . $nim . " nilai akhir anda : " . $nilai_akhir . " dengan grade B";

    } else if ($nilai_akhir >= 40) {
        echo "Nim " . $nim . " nilai akhir anda : " . $nilai_akhir . " dengan grade C";

    } elseif ($nilai_akhir >= 20) {
        echo "Nim " . $nim . " nilai akhir anda : " . $nilai_akhir . " dengan grade D";

    } else if ($nilai_akhir < 20) {
        echo "Nim " . $nim . " nilai akhir anda : " . $nilai_akhir . " dengan grade E";
    } else {
        echo "Inputkan nilai terlebih dahulu";
    }
} else {
    echo "Masukan Nilai Terlebih Dahulu";
}

<?php session_start();?>

<?php
$names = $_POST['nama_penumpang'];

if (isset($_POST['submit'])) {
    if ($_POST['nama_penumpang']) {
        ?>
            <fieldset>
                <legend>Ticket Online</legend>
                <?php
foreach ($names as $n => $key) {
            echo "Tujuan " . "<span> : </span>" . $_SESSION['tujuan'] . "<br>";
            echo "Jam " . "<span> : </span>" . $_SESSION['jam_keberangkatan'] . "<br>";
            echo "Nama Penumpang " . "<span> : </span>" . $key . "<br>";
            echo "==========================================================================" . "<br>";
        }
        ?>
            </fieldset>
        <?php
}
} else {
    header('Location:index.php');
}
?>
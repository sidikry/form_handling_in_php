<?php session_start();?>
<?php
if ($_POST) {
    $_SESSION['tujuan'] = $_POST['tujuan'];
    $_SESSION['jam_keberangkatan'] = $_POST['jam_keberangkatan'];
}
?>
<?php
if (isset($_POST['next'])) {
    ?>
    <form action="ticket.php" method="POST">
        <fieldset>
            <legend>Ticket Online</legend>
    <?php
$jumlah = $_POST['jumlah_penumpang'];
    for ($a = 1; $a <= $jumlah; $a++) {
        ?>
    <?php echo "<br><br>"; ?>
    <label for="nama_penumpang">Nama Penumpang <span> : </span></label>
    <input type="text" id="nama_penumpang" name="nama_penumpang[]" placeholder="nama_penumpang ke - <?php echo $a; ?>">
    <?php
}
} else {
    header('Location:index.php');
}
?>
<p>
    <input type="submit" name="submit" value="Submit">
    <input type="reset" name="submit" value="Reset">
</p>
</fieldset>
</form>
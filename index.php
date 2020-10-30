<?php session_start();?>
<?php
if ($_POST) {
    $_SESSION['tujuan'] = $_POST['tujuan'];
    $_SESSION['jam_keberangkatan'] = $_POST['jam_keberangkatan'];
}
?>
<form action="daftar.php" method="POST" class="">
    <fieldset>
        <legend>Ticket Online</legend>
        <p>
            <label for="tujuan">Tujuan <span> : </span></label>
            <select name="tujuan" id="tujuan" required>
                <option value="Jakarta - Semarang">Jakarta - Semarang</option>
                <option value="Jakarta - Bandung">Jakarta - Bandung</option>
                <option value="Jakarta - Surabaya">Jakarta - Surabaya</option>
            </select>
        </p>
        <p>
            <label for="jam_keberangkatan">Jam Keberangkatan <span>:</span></label>
            <input required type="radio" value="8.00" name="jam_keberangkatan" id="jam_keberangkatan"> 8.00
            <input required type="radio" value="9.00" name="jam_keberangkatan"id="jam_keberangkatan"> 9.00
            <input required type="radio" value="10.00" name="jam_keberangkatan"id="jam_keberangkatan"> 10.00
        </p>
        <p>
            <label for="jumlah_penumpang"> Jumlah Penumpang <span> : </span></label>
            <input type="number" min="1" name="jumlah_penumpang" required placeholder="Jumlah Penumpang" id="jumlah_penumpang">
        </p>
        <p>
            <input type="submit" value="Next" name="next">
            <input type="reset" value="Reset" name="reset">
        </p>
    </fieldset>
</form>

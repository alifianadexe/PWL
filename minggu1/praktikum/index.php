<html>

<form>
    <input name="nomor1" type="text">
    <input name="nomor2" type="text">
    <select name="operation">
        <option value="tambah">+</option>
        <option value="kurang">-</option>
        <option value="bagi">/</option>
        <option value="kali">*</option>
    </select>
    <input type="submit" value="Calculate">
</form>

<?php
    if(isset($_POST)){
        echo "hasil";
    }
?>


</html>

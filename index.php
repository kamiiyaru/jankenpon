<?php require("./part/header.php")?>
<form method="post" action="jankenpon.php" id="jkp">
    <select name="jankenpon">
        <option value='1'>Rock</option>
        <option value='2'>Paper</option>
        <option value='3'>Scissor</option>
    </select><br>
    <input type="hidden" id="intValue" name="Oppresult" value="">
    <input type="submit" name="submit">
</form>

<script>

    const OppResult = Math.floor(Math.random() * 3) + 1;

    document.getElementById('intValue').value = OppResult;
    document.getElementById('jkp').submit()
</script>
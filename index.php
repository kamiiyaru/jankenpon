<?php require("./part/header.php"); require_once("./part/footer.php");?>
<style>
    select{

        width: 30%;
        height: 50px;
        font-size: 20px;
        text-align: center;
        margin-bottom: 10px;
    }

    /* CSS */
    .button-31 {
    background-color: #222;
    border-radius: 4px;
    border-style: none;
    box-sizing: border-box;
    color: #fff;
    cursor: pointer;
    display: inline-block;
    font-family: "Farfetch Basis","Helvetica Neue",Arial,sans-serif;
    font-size: 16px;
    font-weight: 700;
    line-height: 1.5;
    margin: 0;
    max-width: none;
    min-height: 44px;
    min-width: 10px;
    outline: none;
    overflow: hidden;
    padding: 9px 20px 8px;
    position: relative;
    text-align: center;
    text-transform: none;
    user-select: none;
    -webkit-user-select: none;
    touch-action: manipulation;
    width: 15%;
    }

    .button-31:hover,
    .button-31:focus {
    opacity: .75;
    }
</style>

<form method="post" action="jankenpon.php" class="jkp">
    <select name="jankenpon">
        <option value='1'>Rock</option>
        <option value='2'>Paper</option>
        <option value='3'>Scissor</option>
    </select><br>
    <input type="submit" name="submit" class="button-31">
</form>

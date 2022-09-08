<form method="POST">
<input type="number" name="value1" value="1">
<input type="hidden" name="multiply" value="*" readonly>
<input type="text" name="value2" value="12" placeholder="Enter 2nd Value" required>
<input type="submit" name="submit" value="Calculate">
</form>
<?php
if(isset($_POST['submit'])){
    $value1 = $_POST['value1'];
    $multiply = $_POST['multiply'];
    $value2 = $_POST['value2'];

    if($multiply == "*"){
        echo $value1*$value2;
    }
}
?>

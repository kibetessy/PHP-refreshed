<?php
//can pass data thorugh urls and forms using the $_GET and $_POST

if(isset($_POST['submit'])) {
    echo $_POST['name'];
    echo $_POST['age'];
}
?>

<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=Essy & age=27">CLICK</a>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<div>
    <label for="name">Name: </label>
    <input type="text" name="name">
</div>
<br>
<div>
    <label for="age">Age: </label>
    <input type="text" name="age">
</div>
<input type="submit" value="Submit" name="submit">
</form>

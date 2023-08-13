<?php
//can pass data thorugh urls and forms using the $_GET and $_POST

if(isset($_POST['submit'])) {
//if the page requires maybe comment you need to protect against who sees
    
    //$name = htmlspecialchars($_POST['name']);
    //$age = htmlspecialchars($_POST['age']);

    // $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    // $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_SPECIAL_CHARS);

//filter_var  doesn't need to be used with inputs, used with anything or for validation
    $name = filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS);

    echo $name;
}
?>
 
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
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

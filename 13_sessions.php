<?php

/*way to store information(in variables) to be used across multiple pages.
unlike cookies(on client) they are store on the server
store users ID to get blog post or recipes or whats on the DB

Have a log in form that on submit the username get saved in the session on server 
and use session variable used on a separate page, dashboard page
*/

session_start();

if(isset($_POST['submit'])) {    
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
    
    $password = $_POST['password'];

    if($username == 'Essy' && $password == 'password'){
        $_SESSION['username'] = $username; 
        header('Location: php-refeshed/extras/dashboard.php');
    } else{
        echo 'Incorrect password or username';
    } 
}
?>
 
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
<div>
    <label for="username">Username: </label>
    <input type="text" name="username">
</div>
<br>
<div>
    <label for="password">Password: </label>
    <input type="password" name="password">
</div>
<input type="submit" value="Submit" name="submit">
</form>



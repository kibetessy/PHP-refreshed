<?php
/* They are a mechanism for storing data in the remote browser and thus tracking or identify return user. 
You can set specific data to be stored in the browser and retriev when user visits the site again 
Dont store sensitive data here,do it in sessions.

*/

//setcookie
//name then value, the time stamp is for when it will expire,

setcookie('name', 'Essy', time() + 86400 * 27);

if(isset($_COOKIE['name'])){
    echo $_COOKIE['name'];
}

setcookie('name', '', time() - 86400);
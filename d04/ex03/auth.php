<?php
function    auth($login, $passwd)
{
    $file = "../private/passwd";
    $passwd = hash("whirlpool", $passwd);
    $content = @file_get_contents($file);
    if ($content === false)
        return (0);
    $content = unserialize($content);
    foreach($content as $user)
    {
        if ($user["login"] == $login)
        {
            if ($user["passwd"] == $passwd)
                return (1);
            else
                return (0);
        }
    }
    return (0);
}
?>
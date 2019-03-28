<?php

function ft_set($name, $value)
{
    setcookie($name, $value, time() + (3600 * 24 * 30), 'ex03');
}
function ft_get($name)
{
    $value = $_COOKIE[$name];
    if (isset($value))
        echo $value . "\n";
}
function ft_del($name)
{
    setcookie($name, '', 0);
}

$array = array();
foreach($_GET as $key=>$value){
    $params[$key] = $value;
}
if (!isset($params["action"]) || !isset($params["name"]))
    return (0);
if ($params["action"] == "set")
    ft_set($params["name"], $params["value"]);
else if ($params["action"] == "get")
    ft_get($params["name"]);
else if ($params["action"] == "del")
    ft_del($params["name"]);
?>
<?php
if (!($_SERVER['PHP_AUTH_USER'] == 'zaz' && $_SERVER['PHP_AUTH_PW'] == 'jaimelespetitsponeys'))
{
    header("HTTP/1.0 401 Unauthorized");
    header("WWW-Authenticate: Basic realm=KABOOM");
    $content = "Cette zone est accessible uniquement aux membres du site";
    header("Content-Type: text/plain");
    echo "<html><body>" . $content . "</body></html>" . "\n";
    exit(0);
}
$content = "Bonjour Zaz<br />\n";
$content .= '<img src="data:image/png;base64,';
$content .= base64_encode(file_get_contents("../img/42.png"));
$content .= '" alt="42">';
echo "<html><body>\n" . $content . "\n</body></html>" . "\n";
?>
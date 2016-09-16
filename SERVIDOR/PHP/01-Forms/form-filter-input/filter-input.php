<?php
// http://php.net/manual/en/function.filter-input.php
// test using curl or postman or http://.../a=x&b=y

// Without filter_input function...
if (!isset($_GET['a'])) {
    $a = null;
} elseif (!is_string($_GET['a'])) {
    $a = false;
} else {
    $a = $_GET['a'];
}
$b = isset($_GET['b']) && is_string($_GET['b']) ? $_GET['b'] : '';


// With filter_input function...
$a = filter_input(INPUT_GET, 'a');
$b = (string)filter_input(INPUT_GET, 'b');

echo '$a:' . "$a <br>";
echo '$b:' . "$b";

?>
<?php
echo "<h1>Testing Restrictions</h1>";

// Test 1: Check open_basedir restriction
echo "<h2>open_basedir Restriction</h2>";
$test_dirs = ['/var/www/adv-graphics.com', '/var/www/advanced.graphics', '/etc', '/tmp'];
foreach ($test_dirs as $dir) {
    echo "Trying to access {$dir}: ";
    if (@scandir($dir)) {
        echo "Accessible<br>";
    } else {
        echo "Restricted<br>";
    }
}

// Test 2: Disabled PHP functions
echo "<h2>Disabled PHP Functions</h2>";
$disabled_functions = ['exec', 'system', 'passthru', 'shell_exec'];
foreach ($disabled_functions as $function) {
    echo "Trying {$function}: ";
    if (function_exists($function)) {
        echo "Enabled<br>";
    } else {
        echo "Disabled<br>";
    }
}

// Test 3: File access outside root
echo "<h2>File Access Test</h2>";
$file = '/etc/passwd';
echo "Trying to read {$file}: ";
if (@file_get_contents($file)) {
    echo "Accessible<br>";
} else {
    echo "Restricted<br>";
}
?>
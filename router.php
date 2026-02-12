<?php
// router.php
if (php_sapi_name() == 'cli-server') {
    $uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
    $root = $_SERVER['DOCUMENT_ROOT'];
    $file = $root . $uri;
    
    // If the file exists as is, let the server handle it
    if (file_exists($file) && !is_dir($file)) {
        return false;
    }
    
    // Check if the file exists with .php extension
    if (file_exists($file . '.php') && !is_dir($file . '.php')) {
        include $file . '.php';
        return true;
    }
    
    // If it's a directory, check for index.php
    if (is_dir($file)) {
        if (file_exists($file . '/index.php')) {
            include $file . '/index.php';
            return true;
        }
    }
}

// Fallback (404)
header("HTTP/1.0 404 Not Found");
echo "404 Not Found";
?>

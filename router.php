<?php
// router.php - Handle clean URLs for PHP built-in server
if (php_sapi_name() == 'cli-server') {
    $uri_parts = parse_url($_SERVER['REQUEST_URI']);
    $uri = $uri_parts['path'];
    
    // Static files (CSS, JS, images, etc.)
    if (preg_match('/\.(css|js|jpg|jpeg|png|gif|webp|svg|ico|woff|woff2|ttf|eot)$/i', $uri)) {
        return false; // Let PHP built-in server handle static files
    }
    
    // Route mapping for clean URLs
    $routes = [
        '/' => 'index.php',
        '/index' => 'index.php',
        '/about' => 'about.php',
        '/service' => 'service.php',
        '/services' => 'service.php',
        '/portfolio' => 'portfolio.php',
        '/contact' => 'contact.php',
        '/organisasi' => 'organisasi.php',
    ];
    
    // Remove trailing slash
    $cleanUri = rtrim($uri, '/');
    if ($cleanUri === '') {
        $cleanUri = '/';
    }
    
    // Check if route exists in mapping
    if (isset($routes[$cleanUri])) {
        $file = __DIR__ . '/' . $routes[$cleanUri];
        if (file_exists($file)) {
            // Necessary for $_SERVER['SCRIPT_NAME'] to be correct for included files
            $_SERVER['SCRIPT_NAME'] = '/' . $routes[$cleanUri];
            require $file;
            exit;
        }
    }
    
    // Try to find .php file directly
    $phpFile = __DIR__ . $uri . '.php';
    if (file_exists($phpFile) && !is_dir($phpFile)) {
        $_SERVER['SCRIPT_NAME'] = $uri . '.php';
        require $phpFile;
        exit;
    }
    
    // Check if it's a directory with index.php
    $dirIndex = __DIR__ . $uri . '/index.php';
    if (file_exists($dirIndex)) {
        $_SERVER['SCRIPT_NAME'] = $uri . '/index.php';
        require $dirIndex;
        exit;
    }
}

// Fallback (404)
http_response_code(404);
echo "404 Not Found";
?>
<?php

/**
 * Get the base path
 * 
 * @param $path
 * @return string
 */
function basePath($path = '') {
    return __DIR__ . '/' . $path;
}

/**
 * Load a view
 * 
 * @param $name
 * @return string
 */
function loadView($name) {
    $viewPath = basePath("App/views/${name}.view.php");

    if (file_exists($viewPath)) {
        require $viewPath;
    } else {
        echo "Path {$name} does not exist!"; 
    }
}

/**
 * Load a partial
 * 
 * @param string $name
 * @return string
 */
function loadPartial ($name) {
    $partialPath = basePath("App/views/partials/{$name}.php");

    if (file_exists($partialPath)) {
        require $partialPath;
    } else {
        echo "Partial {$name} does not exist!";
    }
}

/**
 * Inspect a value
 * 
 * @param $value
 * @return void
 */
function inspect($value) {
    echo "<br>";
    var_dump($value);
    echo "</br>";
}

/**
 * Inspect a value and die
 * 
 * @param $value
 * @return void
 */
function inspectAndDie($value) {
    die(var_dump($value));
}
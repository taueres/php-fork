<?php

echo "Main process started\n";

$running = array();

foreach (['first.php', 'second.php'] as $script) {
    $pid = pcntl_fork();
    if ($pid) {
        // main process
        echo "Main process: started child process $pid\n";
        $running[$pid] = true;
    } else {
        // child process
        pcntl_exec(__DIR__ . '/' . $script);
    }
}

echo "Main process starts waiting for child processes...\n";

do {
    // Locking wait! Kernel will wake us when needed!
    $pid = pcntl_wait($status);
    echo "Main process: child $pid exited with status $status\n";
    unset($running[$pid]);
} while (count($running) !== 0);

echo "Main process ended!\n";

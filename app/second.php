#!/usr/bin/env php
<?php

echo "Second script began!\n";

for ($i = 3; $i >= 0; --$i) {
    sleep(4);
    echo "Second script: $i\n";
}

echo "Second script ended!\n";

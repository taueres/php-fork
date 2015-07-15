#!/usr/bin/env php
<?php

echo "First script began!\n";

for ($i = 3; $i >= 0; --$i) {
    sleep(5);
    echo "First script: $i\n";
}

echo "First script ended!\n";

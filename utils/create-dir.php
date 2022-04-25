<?php

use Exception;

try {
    mkdir(__DIR__ . '/testdir', '755');
} catch (Exception $e) {
    // log
}
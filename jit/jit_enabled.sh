#!/bin/sh

# enable_cli is not the same as `enable`
php -dopcache.enable_cli=1 -dopcache.jit_buffer_size=100M -dopcache.jit=1255 benchmark.php



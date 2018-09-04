<?php

mkdir('tekstai');
copy('write.txt', 'tekstai/tekstas.txt');
copy('tekstai/tekstas.txt', 'tekstai/tekstas2.txt');
unlink('tekstai/tekstas.txt');
echo 'ok';
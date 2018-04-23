<?php
class a {
    const x = '123';
}

define ('y', '235');
echo a::x . ' ' . y;
<?php

namespace Mlssr\Crypto;

class Rot13
{
    public function encrypt($string)
    {
        // super complex logic here ;-)

        return str_rot13($string);
    }
}

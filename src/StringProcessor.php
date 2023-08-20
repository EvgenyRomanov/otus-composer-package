<?php

namespace EvgenyRomanov\OtusComposerPackage;

class StringProcessor
{
    /**
     * @param string $string
     * @return int
     */
    public function getLength(string $string): int
    {
        return mb_strlen($string);
    }
}

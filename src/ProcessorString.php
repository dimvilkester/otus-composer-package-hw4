<?php

declare(strict_types=1);

namespace Dimvilkester\OtusComposerPackageHw4;

class ProcessorString {
    /**
     * @param string $str
     * @return int
     */
    public function strLen(string $str): int {
        return mb_strlen($str);
    }
}

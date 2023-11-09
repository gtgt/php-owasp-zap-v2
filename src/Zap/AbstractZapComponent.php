<?php

namespace Zap;

class AbstractZapComponent
{
    protected Zapv2 $zap;

    public function __construct (Zapv2 $zap) {
        $this->zap = $zap;
    }
}

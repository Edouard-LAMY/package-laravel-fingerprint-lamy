<?php

namespace EdouardLamy\PackageLaravelFingerprintLamy\Facades;

use Illuminate\Support\Facades\Facade;

class Fingerprint extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \EdouardLamy\PackageLaravelFingerprintLamy\Classes\Fingerprint::class;
    }
}

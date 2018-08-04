<?php
namespace Webfront\DSD;

interface FlagsInterface
{
    public function isEnabled(int $flag): bool;
    public function isDisabled(int $flag): bool;
}

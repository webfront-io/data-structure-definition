<?php
namespace Webfront\DSD;

interface OptionSetInterface
{
    /**
     * @param string $name
     * @param mixed|false $default
     * @return mixed
     */
    public function value(string $name, $default = false);
    public function getDefaults() : array;
}

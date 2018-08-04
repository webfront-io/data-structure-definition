<?php
namespace Webfront\DSD;

interface TypeInterface extends FlagsInterface
{
    public function getName() : string;
    public function getFlags() : FlagsInterface;
    public function getOptions() : OptionSetInterface;
}

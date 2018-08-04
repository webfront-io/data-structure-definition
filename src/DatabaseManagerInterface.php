<?php
namespace Webfront\DSD;

interface DatabaseManagerInterface extends \Iterator
{
    public function getByName(string $name): DatabaseInterface;
    public function getDefault(): DatabaseInterface;
}

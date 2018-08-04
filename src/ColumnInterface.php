<?php
namespace Webfront\DSD;

interface ColumnInterface extends TypeInterface
{
    public function getType(): TypeInterface;
    public function getTable(): TableInterface;
}

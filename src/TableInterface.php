<?php
namespace Webfront\DSD;

interface TableInterface extends \Iterator
{
    public function getName(): string;
    public function getFieldByName(): string;

    public function getCharset(): string;
    public function getDatabase(): DatabaseInterface;
}

<?php
namespace Webfront\DSD;

interface CharsetInterface
{
    public function getCharset(): string;
    public function getCollation(): string;
}

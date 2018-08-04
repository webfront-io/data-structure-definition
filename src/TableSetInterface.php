<?php
namespace Webfront\DSD;

interface TableSetInterface extends \Iterator
{
    public function append(TableInterface $table): self;
    public function getAsArray(): array;
}

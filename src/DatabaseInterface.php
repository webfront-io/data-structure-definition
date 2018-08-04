<?php
namespace Webfront\DSD;

interface DatabaseInterface
{
    public function getName(): string;
    public function getOptions(): OptionSetInterface;
    public function getCharset(): CharsetInterface;

    /**
     * @return array|TableInterface[]
     */
    public function getTablesAsArray(): array;

    public function getTableSet(): TableSetInterface;
}

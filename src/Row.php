<?php


class Row
{
    protected $cell;
    public function __construct(Cell $cell)
    {
        $this->cell = $cell;
    }

    public function getRow($num)
    {
        $row = [];
        $cell = 1;
        for ($i = 0; $i < ($num + 1); $i++) {
            $cell = $this->cell->get($num, $i, $cell);
            $row[] = $cell;
        }

        return $row;
    }

}
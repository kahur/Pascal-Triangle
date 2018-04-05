<?php


class Triangle
{
    /**
     * @var Row
     */
    protected $row;

    public function __construct(Row $row)
    {
        $this->row = $row;
    }

    public function generate($size = 2)
    {
        if (!is_numeric($size) || $size < 1) {
            throw new \Exception('Invalid value');
        }

        $triangle = [];

        for ($i = 0; $i < $size; $i++) {
            $triangle[$i] = $this->row->getRow($i);
        }

        return $triangle;
    }
}
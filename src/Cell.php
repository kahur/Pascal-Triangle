<?php


class Cell
{
    public function get($rowNum, $cellNum, $previousNum = 1)
    {
        if ($cellNum === 0) {
            return 1;
        }

        if ($cellNum > $rowNum + 1) {
            throw new \Exception('Invalid number of cell for this row');
        }

        $value = $previousNum * (($rowNum + 1 - $cellNum) / $cellNum);

        return $value;
    }
}
<?php


class PrintView
{
    public function render($size, array $triangle)
    {
        foreach ($triangle as $i => $row) {
            for ($f = ($size - $i); $f > 0; $f--) {
                echo "  ";
            }

            foreach($row as $cell) {
                echo " ".$cell. " ";
            }

            echo "\n";
        }

    }
}
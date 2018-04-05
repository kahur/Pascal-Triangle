<?php


class CellTest extends \PHPUnit\Framework\TestCase
{
    public function testGet()
    {
        $cell = new Cell();

        $result = $cell->get(5, 1, 1);

        $this->assertEquals(5, $result);

        $result = $cell->get(6,3, 15);
        $this->assertEquals(20, $result);

        $result = $cell->get(6,2, 6);
        $this->assertEquals(15, $result);

        $result = $cell->get(6,4, 20);
        $this->assertEquals(15, $result);

    }

    public function testNonExistCellPosition()
    {
        $cell = new Cell();
        $this->expectException(\Exception::class);

        $cell->get(5,10);
    }
}
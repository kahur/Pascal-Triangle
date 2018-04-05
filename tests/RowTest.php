<?php


class RowTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \PHPUnit\Framework\MockObject\MockBuilder
     */
    protected $cell;

    public function setUp()
    {
        $cell = $this->getMockBuilder(Cell::class);
        $this->cell = $cell;
    }

    public function testGetRow()
    {
        $cell = $this->cell;
        $cell->setMethods([
            'get'
        ]);

        //test integration as triangle grows
        for ($i = 1; $i <= 5; $i++) {
            $c = $cell->getMock();

            $c->expects($this->exactly($i))
                ->method('get');

            $row = new Row($c);
            $row->getRow($i);
        }
    }
}
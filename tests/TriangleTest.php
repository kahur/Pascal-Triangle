<?php


class TriangleTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var Cell
     */
    protected $cell;

    protected $row;

    public function setUp()
    {
        $cell = $this->getMockBuilder(Cell::class);
        $row = $this->getMockBuilder(Row::class);
        $row->setConstructorArgs([$cell->getMock()]);

        $this->cell = $cell;
        $this->row = $row;
    }

    public function testGenerate()
    {
        /**
         * @var \PHPUnit\Framework\MockObject\MockBuilder $row
         */
        $row = $this->row;
        $row = $row->setMethods([
            'getRow'
        ])->getMock();

        $row->expects($this->exactly(1))
            ->method('getRow')
            ->with(0)
            ->willReturn([
                1
            ]);

        $triangle = new Triangle($row);

        $result = $triangle->generate(1);

        $this->assertEquals([0 => [1]], $result);

    }

    public function testInvalidLetterValue()
    {
        $row = $this->row;

        $triangle = new Triangle($row->getMock());

        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('Invalid value');

        $triangle->generate('a');
    }

    public function testInvalidNumericValue()
    {
        $row = $this->row;

        $triangle = new Triangle($row->getMock());

        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('Invalid value');

        $triangle->generate(-1);
    }
}
<?php

use Tests\TestCase;

class ScoreControllerIndexTest extends TestCase
{
    /** @dataProvider dataDoubles
     * @testdox Doubling $in results in $out
     */
    public function testReturnDoublePoints($in, $out): void
    {
        $score = $this->getJson(route('score.index', ['points' => $in]))->assertOk()->json('score');

        $this->assertEquals($out, $score);
    }

    public function testUnprocessableWhenPointsMissing(): void
    {
        $this->getJson(route('score.index'))->assertUnprocessable();
    }

    public function dataDoubles(): array
    {
        return [
            [0, 0],
            [1, 2],
            [2, 4],
            [32, 64],
            [-32, -64],
            [107, 300],
        ];
    }
}

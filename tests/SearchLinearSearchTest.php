<?php

use PHPUnit\Framework\TestCase;
use NangViet\Search\LinearSearch;

final class SearchLinearSearchTest extends TestCase
{
    public function testCanSearchIndexOfValue()
    {
        $searcher = new LinearSearch();
        $array = [5, 3, 6, 8, 9, 2];
        $value = 2;

        $expect = 5;
        $actual = $searcher->search($array, $value);

        $this->assertEquals($expect, $actual);
    }

    public function testCanGiveNotFoundIndexValue()
    {
        $searcher = new LinearSearch();
        $array = [5, 3, 6, 8, 9, 2];
        $value = 1;

        $expect = -1;
        $actual = $searcher->search($array, $value);
        $this->assertEquals($expect, $actual);
    }
}

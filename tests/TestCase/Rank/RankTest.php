<?php
declare(strict_types=1);

namespace App\Test\TestCase\Rank;

use App\Rank\Rank;
use Cake\TestSuite\TestCase;

/**
 * ApplicationTest class
 */
class RankTest extends TestCase
{
    /**
     * @return void
     */
    public function testSuccessEmptyPrevEmptyNext()
    {
        $rank = (new Rank('', ''))->get();
        $this->assertSame('U', $rank);
    }

    /**
     * @return void
     */
    public function testSuccessEmptyPrev()
    {
        $rank = (new Rank('', '2'))->get();
        $this->assertSame('1', $rank);
    }

    /**
     * @return void
     */
    public function testSuccessEmptyNext()
    {
        $rank = (new Rank('x', ''))->get();
        $this->assertSame('y', $rank);
    }

    /**
     * @return void
     */
    public function testSuccessNewDigit()
    {
        $rank = (new Rank('aaaa', 'aaab'))->get();
        $this->assertSame('aaaaU', $rank);
    }

    /**
     * @return void
     */
    public function testSuccessMidValue()
    {
        $rank = (new Rank('aaaa', 'aaac'))->get();
        $this->assertSame('aaab', $rank);
    }

    /**
     * @return void
     */
    public function testSuccessNewDigitMidValue()
    {
        $rank = (new Rank('az', 'b'))->get();
        $this->assertSame('azU', $rank);
    }

    /**
     * @return void
     */
    public function testSuccessNewDigitMidValueSpecialCase()
    {
        $rank = (new Rank('amz', 'ana'))->get();
        $this->assertSame('amzU', $rank);
    }
}

<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LexorankItemsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LexorankItemsTable Test Case
 */
class LexorankItemsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\LexorankItemsTable
     */
    protected $LexorankItems;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.LexorankItems',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('LexorankItems') ? [] : ['className' => LexorankItemsTable::class];
        $this->LexorankItems = $this->getTableLocator()->get('LexorankItems', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->LexorankItems);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\LexorankItemsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

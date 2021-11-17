<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\IntegerItemsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\IntegerItemsTable Test Case
 */
class IntegerItemsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\IntegerItemsTable
     */
    protected $IntegerItems;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.IntegerItems',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('IntegerItems') ? [] : ['className' => IntegerItemsTable::class];
        $this->IntegerItems = $this->getTableLocator()->get('IntegerItems', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->IntegerItems);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\IntegerItemsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

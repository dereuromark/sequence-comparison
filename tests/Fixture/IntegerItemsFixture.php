<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * IntegerItemsFixture
 */
class IntegerItemsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'name' => 'Lorem ipsum dolor sit amet',
                'position' => 1,
                'created' => '2021-11-16 02:58:18',
                'modified' => '2021-11-16 02:58:18',
            ],
        ];
        parent::init();
    }
}

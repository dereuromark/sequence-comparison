<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * LexorankItemsFixture
 */
class LexorankItemsFixture extends TestFixture
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
                'position' => 'Lorem ipsum dolor sit amet',
                'created' => '2021-11-16 02:58:25',
                'modified' => '2021-11-16 02:58:25',
            ],
        ];
        parent::init();
    }
}

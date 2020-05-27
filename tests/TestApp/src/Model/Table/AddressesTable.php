<?php
declare(strict_types=1);

namespace TestApp\Model\Table;

use Cake\ORM\Table;

class AddressesTable extends Table
{
    public function initialize(array $config): void
    {
        $this->addBehavior('Timestamp');

        $this->addAssociations([
            'hasMany' => [
                'Authors',
            ],
            'belongsTo' => [
                'City' => [
                    'className' => 'Cities'
                ]
            ],
        ]);

        parent::initialize($config);
    }
}

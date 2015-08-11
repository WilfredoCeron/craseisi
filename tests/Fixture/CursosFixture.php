<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CursosFixture
 *
 */
class CursosFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'codigo' => ['type' => 'string', 'length' => 6, 'null' => false, 'default' => '115', 'comment' => 'Codigo de la materia', 'precision' => null, 'fixed' => null],
        'nombre' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'comment' => 'Nombre de la materia', 'precision' => null, 'fixed' => null],
        'urlAcotada' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'descripcion' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'Descripcion de la materia', 'precision' => null],
        'nombreEscuela' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => 'Escuela', 'comment' => 'Nombre de la Escuela', 'precision' => null, 'fixed' => null],
        'codigoEscuela' => ['type' => 'string', 'length' => 10, 'null' => true, 'default' => 'cod', 'comment' => 'Codigo de la escuela', 'precision' => null, 'fixed' => null],
        '_options' => [
            'engine' => null,
            'collation' => null
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'codigo' => 'Lore',
            'nombre' => 'Lorem ipsum dolor sit amet',
            'urlAcotada' => 'Lorem ipsum dolor sit amet',
            'descripcion' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'nombreEscuela' => 'Lorem ipsum dolor sit amet',
            'codigoEscuela' => 'Lorem ip'
        ],
    ];
}

<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MateriasFixture
 *
 */
class MateriasFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'codigo' => ['type' => 'string', 'length' => 6, 'null' => false, 'default' => '115', 'comment' => 'Codigo de la materia', 'precision' => null, 'fixed' => null],
        'nombre' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'comment' => 'Nombre de la materia', 'precision' => null, 'fixed' => null],
        'id_escuela' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'urlCompleta' => ['type' => 'string', 'length' => 200, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'urlAcotada' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'descripcion' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'Descripcion de la materia', 'precision' => null],
        '_indexes' => [
            'id_escuela' => ['type' => 'index', 'columns' => ['id_escuela'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'codMateria' => ['type' => 'unique', 'columns' => ['codigo'], 'length' => []],
            'id_escuela' => ['type' => 'foreign', 'columns' => ['id_escuela'], 'references' => ['escuelas', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_spanish2_ci'
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
            'id_escuela' => 1,
            'urlCompleta' => 'Lorem ipsum dolor sit amet',
            'urlAcotada' => 'Lorem ipsum dolor sit amet',
            'descripcion' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
        ],
    ];
}

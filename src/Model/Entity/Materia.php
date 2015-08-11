<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Materia Entity.
 */
class Materia extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'codigo' => true,
        'nombre' => true,
        'id_escuela' => true,
        'urlCompleta' => true,
        'urlAcotada' => true,
        'descripcion' => true,
    ];
}

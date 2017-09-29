<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Theme Entity
 *
 * @property int $id
 * @property string $job
 * @property string $age
 * @property string $sex
 * @property string $body
 * @property int $opinion
 * @property \Cake\I18n\FrozenTime $created
 */
class Theme extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'job' => true,
        'age' => true,
        'sex' => true,
        'body' => true,
        'opinion' => true,
        'created' => true
    ];
}

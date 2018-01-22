<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Attendee Entity
 *
 * @property int $id
 * @property int $participant_id
 * @property string $date
 * @property string $time
 * @property bool $status
 * @property \Cake\I18n\FrozenTime $created
 *
 * @property \App\Model\Entity\Participant $participant
 */
class Attendee extends Entity
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
        'participant_id' => true,
        'date' => true,
        'time' => true,
        'status' => true,
        'created' => true,
        'participant' => true
    ];
}

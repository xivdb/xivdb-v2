<?php

/**
 * BuddyAction
 *
 * @version 1.0
 * @author
 */

namespace XIVDB\Apps\GameData\ExtractClasses;

class BuddyAction extends \XIVDB\Apps\GameData\GameData
{
    const TABLE = 'xiv_buddy_action';

    protected $real =
    [
        3 => 'icon',
        4 => 'icon_status',
    ];

    protected function json($line)
    {
        return
        [
            'name_ja' => $line['name']['ja'],
            'name_en' => ucwords($line['name']['en']),
            'name_fr' => ucwords($line['name']['fr']),
            'name_de' => ucwords($line['name']['de']),

            'help_ja' => $line['help']['ja'],
            'help_en' => ($line['help']['en']),
            'help_fr' => ($line['help']['fr']),
            'help_de' => ($line['help']['de']),
        ];
    }
}

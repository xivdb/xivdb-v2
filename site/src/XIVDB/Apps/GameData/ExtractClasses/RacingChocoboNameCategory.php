<?php

/**
 * RacingChocoboNameCategory
 *
 * @version 1.0
 * @author
 */

namespace XIVDB\Apps\GameData\ExtractClasses;

class RacingChocoboNameCategory extends \XIVDB\Apps\GameData\GameData 
{
    const TABLE = 'xiv_racing_chocobo_name_category';

    protected $real =
    [
        1 => 'sort_key',
    ];

    protected function json($line)
    {
        return
        [
            'name_ja' => $line['name']['ja'],
            'name_en' => ucwords($line['name']['en']),
            'name_fr' => ucwords($line['name']['fr']),
            'name_de' => ucwords($line['name']['de']),
        ];
    }
}

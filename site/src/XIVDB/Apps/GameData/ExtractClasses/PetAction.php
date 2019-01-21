<?php

/**
 * PetAction
 *
 * @version 1.0
 * @author
 */

namespace XIVDB\Apps\GameData\ExtractClasses;

class PetAction extends \XIVDB\Apps\GameData\GameData 
{
    const TABLE = 'xiv_pets_action';

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
            'help_cns' => null,
        ];
    }
}

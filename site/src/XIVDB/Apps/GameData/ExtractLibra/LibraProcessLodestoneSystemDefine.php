<?php

/**
 * LibraProcessLodestoneSystemDefine
 *
 * @version 1.0
 * @author 
 */

namespace XIVDB\Apps\GameData\ExtractLibra;

use XIVDB\Apps\GameData\ExtractLibra\CoreLibra;

class LibraProcessLodestoneSystemDefine extends CoreLibra
{
    protected function handle()
    {
        $table = 'db_libra_defines';

        $insert = [];
        foreach($this->data as $i => $d)
        {
            $id = $d['Key'];

            $new = [
                'define' => $d['DefineName'],
                'value' => $d['DefineValue'],
            ];

            $new = array_merge($new, ['id' => $id, 'patch' => $this->patch]);
            $insert[] = $new;

            if (count($insert) == 500)
            {
                $this->insert($table, $insert);
                $insert = [];
            }
        }

        $this->insert($table, $insert);

        return true;
    }
}

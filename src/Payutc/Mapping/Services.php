<?php

namespace Payutc\Mapping;

class Services {
    public static function get(){
        return array(
            'POSS' => 'services/POSS.service.php',
            'POSS2' => 'services/POSS2.service.php',
            'POSS2WithExceptions' => 'services/POSS2-with-exceptions.service.php',
            'AADMIN' => 'services/AADMIN.service.php',
            'MADMIN' => 'services/MADMIN.service.php',
            'STATS' => 'services/STATS.service.php',
            'KEY' => 'services/KEY.service.php',
            'ADMINRIGHT' => 'services/ADMINRIGHT.service.php'
        );
    }
}

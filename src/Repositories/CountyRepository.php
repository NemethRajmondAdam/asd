<?php

namespace App\Repositories;
use App\Repositories\BaseRepository;

class CountyRepository extends BaseRepository
{
    function __construct(
        $host = self::HOST,
        $user = self::USER,
        $password = self::PASSWORD,
        $database = self::DATABASE)
    {
        parent::__construct($host, $user, $password, $database);
        $this->tableName = "counties";
    }

    
}

?>
<?php
namespace App\Controllers;

use App\Database;
use App\View;

class Test
{
    public function show():View
    {
        $connection = Database::connect();
        $results = $connection
            ->createQueryBuilder()
            ->select('*')
            ->from('apartments')
            ->executeQuery()
            ->fetchAllAssociative();



        return new View("show.html");
    }
}
<?php


namespace App\Welcome;


use System\Repository;

class WelcomeRepository extends Repository
{
    public function getWelcomeMessage()
    {
        /*
         * $sql = "Sql Query to get message";
         * $sqlQuery = $this->GetDbConnection()->prepare($sql)
         * $sqlQuery->execute()
         *
         * return $sqlQuery->fetchAll(PDO::FETCH_ASSOC)
         * */

        return "Welcome to PHP Custom Framework";

    }
}
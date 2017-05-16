<?php

require '../Classes/DatabaseHelper.php';

class Ratings
{
    /**
     * @param $beerId
     */
    function updateRatings($beerId)
    {
        $database = new DatabaseHelper();

        $avgRatings = $database->getValues("
                                      SELECT beerid, AVG(rating) 
                                      FROM ratings 
                                      WHERE beerid = ('" . $beerId . "')
                                      ");
        foreach ($avgRatings as $avgRating) {
            //
            var_dump($avgRating);
        }
    }
}

$shell = new Ratings();
$shell->updateRatings('17uR4');
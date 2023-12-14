<?php
// include __DIR__ . '/../server/settings.php';
include __DIR__ . '/../Traits/DrawCard.php';
abstract class Model
{

    use DrawCard;
    public function __construct()
    {

    }

}

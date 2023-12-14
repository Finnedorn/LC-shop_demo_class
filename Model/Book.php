<?php

include __DIR__ . "/Model.php";

class Book extends Model
{


    public int $id;

    public string $title;

    public string $plot;
    public string $cover_image;


    public function __construct()
    {

    }


    public function formatCard()
    {
        $itemCard = [
            'id' => $this->id,
            'image' => $this->cover_image,
            'title' => strlen($this->title) > 28 ? substr($this->title, 0, 28) . '...' : $this->title,
            'content' => substr($this->plot, 0, 100) . '...',

        ];
        return $itemCard;

    }

}

?>
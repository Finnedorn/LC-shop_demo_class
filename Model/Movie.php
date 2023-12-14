<?php

include __DIR__ . '/Model.php';

class Movie extends Model
{

    public int $id;
    public string $title;
    public string $original_title;
    public string $language;
    public string $date;
    public float $vote;
    public string $image;


    function __construct()
    {

    }

    private function getVote()
    {
        $voteINT = ceil($this->vote / 2);
        $template = "<p>";
        for ($n = 1; $n <= 5; $n++) {
            $template .= $n <= $voteINT ? '<i class="fa-solid fa-star"></i>' : '<i class="fa-regular fa-star"></i>';
        }
        $template .= "</p>";
        return $template;
    }

    public function formatCard()
    {

        $cardItem = [
            'id' => $this->id,
            'image' => $this->image,
            'title' => strlen($this->title) > 28 ? substr($this->title, 0, 28) . '...' : $this->title,
            'custom' => $this->getVote(),
            'language' => $this->language
        ];
        return $cardItem;

    }

}


?>
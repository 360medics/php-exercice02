<?php

namespace App;

use Exception;

class TreeBuilderInfinite
{
    private $flatData = [];
    private $tree = [];

    public function __construct($flatData = [])
    {
        $this->flatData = $flatData;
    }

    public function build()
    {
        /*      tri du tableau initial afin de respecter l'ordre des chapitres.
               le tableau en sortie sera ainsi trié dans l'ordre des chapitres et
               on cela évitera de compléter ce tableau de facon aléatoire */
        sort($this->flatData);

        $nestedTable = [];

        //            Tests pour une nombre infini hierarchique
        $this->test();
        die();

        $this->tree = $nestedTable;

        return $this->tree;
    }

    public function test(){

//        $result = array_merge_recursive($ar1, $ar2);

        $maxSize = 0;
        $chapterMax = [];

        foreach ($this->flatData as $title) {
            preg_match_all('~\d{1,3}.~', $title, $chapterNumbers);
            $indexSize = count($chapterNumbers[0]);

            if($indexSize > $maxSize){
                $maxSize = $indexSize;
                $chapterMax = $chapterNumbers[0];
            }
        }

        var_dump($maxSize);
        var_dump($chapterMax);
        $arrayInitial =[
            'index' => "",
            'title' => "",
            'children' => "level1",
        ];

//        l'idée du code est de créer completement le tableau de sortie avec des valeurs vides
        // puis de créer autant de fois que nécessaires par niveau et de le remplir dasn un second temps
        // voir meme de mettre directement les niveau numerotation et de n'ajouter que les titres


        for($i=0;$i<8;$i++){
            $arrayInitial['children'] = $arrayInitial;
        }

        var_dump($arrayInitial);
        die();
    }

    public function getTree()
    {
        return $this->tree;
    }

}

<?php


namespace Buzz\Core;


class TopicRepository
{
    private static  $topics=[
            'ani'=>'animaux',
            'b'=>'',
            'cui' =>'cuisine',
            'div' => 'divertissements',
            'eco' =>'économie',
            'fmt'=>'films, musique & télé',
            'g'=>'',
            'his'=>'histoire',
            'isl'=>'islam',
            'jeu'=>'jeux',
            'k'=>'',
            'l'=>'',
            'mod'=>'mode & beauté',
            'new'=>'news',
            'o'=>'',
            'pol'=>'politique',
            'q'=>'',
            'reg'=>'régions, pays & voyages',
            'spo'=>'sports',
            'tec'=>'technologie',
            'u'=>'',
            'voi'=>'voitures',
            'w'=>'',
            'x'=>'',
            'y'=>'',
            'z'=>'',

        ];

    public function __construct()
    {
    }
    public static function getAll()
    {
        $topics=[];
        foreach (self::$topics as $key=>$name) {
            if(strlen($name)!=0){
                $topics[]=new Topic($key, $name);
            }

        }
        return $topics;
    }
}
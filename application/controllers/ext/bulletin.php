<?php

class Ext_Bulletin_Controller extends Ext_Controller
{
    
    public function action_list()
    {
        $rows = array();
        
        $adverts = Advert::take(20)->get();
        
        if (count($adverts) > 0) {
            foreach ($adverts AS $advert) {
                $rows[] = array(
                    'id'      => $advert->uid,
                    'title'   => $advert->atitle,
                    'created' => $advert->time_added,
                    'price'   => $advert->price,
                );
            }
        }
        
        return json_encode(array(
            'success' => true,
            'rows' => $rows
        ));
    }
    
}
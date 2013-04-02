<?php

class Ext_Bulletin_Controller extends Ext_Controller
{
    
    public function action_list()
    {
        
        $page  = Input::get('page', 1);
        $start = Input::get('start', 0);
        $limit = Input::get('limit', 50);
        
        
        $rows = array();
        
        $total   = Advert::count();
        
        $adverts = Advert::take($limit)->skip($start)->get(); 
        
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
            'rows'    => $rows,
            'total'   => $total
        ));
    }
    
}
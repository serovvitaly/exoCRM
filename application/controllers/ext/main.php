<?php

class Ext_Main_Controller extends Ext_Controller
{
    
    public function action_mainpanel_gettabs()
    {
        $data = array();
        
        $data[] = array('id' => 'solo-tb-1', 'title' => 'Администрирование', 'html' => 'Это вам не куча');
        $data[] = array('id' => 'solo-tb-2', 'title' => 'Объявления');
        $data[] = array('id' => 'solo-tb-3', 'title' => 'Карта');
        
        return json_encode(array(
            'success' => true,
            'tabs' => $data
        ));
    }
    
}
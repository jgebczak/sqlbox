<?php

class SQL {

//----------------------------------------------------------------------------------------------------------------------
// custom query, editing view

    static function actionIndex()
    {
        $data = array();

        Box::$title = 'Custom Query';
        Box::$action = 'sql';

        Box::render('sql', $data);
    }


//----------------------------------------------------------------------------------------------------------------------
}

?>
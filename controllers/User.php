<?php

namespace Controller;

class User extends \Core\Controller{

    public function foo($http){
        // $http->render('user/foo',['array'=>['Item 1','Item 2','Item 3']]);
        $r = Model::get('user')->all();
        \Core\debug($r->first()->name());
    }

    function show($http){
        //   $soneto = $GLOBALS[Soneto];
        //   $http = $soneto->get('HTTP');
        echo $http->params['id'];
    }

}

?>

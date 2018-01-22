<?php
namespace vendor\tsx;

use NoahBuscher\Macaw\Macaw;


class Aplication {

    public $Router;

    public function __construct()
    {

    }

    public function run()
    {
        $this->loadRoute();

        Macaw::dispatch();
    }

    /**
     * load Route
     */
    public function loadRoute(){

        foreach ($this->Router as $key=>$val){
            if(strtolower($key) == "post"){
                foreach($val as $rute=>$contr){
                    Macaw::post($rute,$contr);
                }
            }elseif(strtolower($key) == "get"){
                foreach ($val as $rute=>$contr){
                    Macaw::get($rute,$contr);
                }
            }else{
                Macaw::put($key,$val);
            }
        }
    }
}
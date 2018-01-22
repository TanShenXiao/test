<?php
namespace app\models;

use common\models\Goods;

class Index {


    public function Demo()
    {
        echo "<pre>";
      $user= Goods::find(["id"=>100])->first();
      if($user->store_num > 0) {
          $user->store_num -= 1;
          $user->save();
      }else{
          echo "hsss";
      }
    }
}



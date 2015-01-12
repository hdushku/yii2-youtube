<?php

namespace app\components;
use yii\base\Widget;

class YoutubeWidget extends Widget
{
  public $code;
    public function run(){
      
        return $this->render("youtube",["code"=>$this->code]);
    }
}

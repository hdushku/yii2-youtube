<?php
namespace app\components;
use yii\base\Widget;

class YoutubeWidget extends Widget
{
  public $code; // exemple if your url is https://www.youtube.com/watch?v=wLiBcpMWXRU  then your code is wLiBcpMWXRU
  public $h; // height default=250px;
  public $w ; // width default=300px;
  
  public function init(){
      parent::init();
      
            if(is_null( $this->code)|| !is_string($this->code)){
           $this->code = "wLiBcpMWXRU"; 
            }
           if(is_null( $this->h)|| !is_string($this->h)){
           $this->h = "250px"; 
           }
           if(is_null(  $this->w)|| !is_string($this->w)){
            $this->w =  "300px";
           }
  }
  
    public function run(){
        
        return $this->render("youtube",
                            [
                                "code"=>$this->code,
                                "w"=>$this->w,
                                "h"=>$this->h,
                             ]);
    }
}

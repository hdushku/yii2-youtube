# yii2-youtube

 Widget to Embed video youtube for Yii2 

# Installation : 
1. in your path, create new folder "components" if not existe .
2. copy the file "YoutubeWidget.php" and the folder "views"  in your "components" folder.
3. in your views file, like "About.php" or what you want past this code :

        <?php  use app\components\YoutubeWidget; ?>
        <?= YoutubeWidget::widget([
            "code"=>"65J8okZMfR8",
            "w"=>"400px",
            "h"=>"500px",
            ]) ?>

# You can change : 
    code; // exemple if your url is [https://www.youtube.com/watch?v=wLiBcpMWXRU] then your code is [wLiBcpMWXRU] .
    h; // height default=250px .
    w ; // width default=300px .
  
that's all.

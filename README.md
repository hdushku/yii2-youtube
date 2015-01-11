# yii2-youtube
================
 Widget to Embed video youtube for Yii2  [En francais : Widget yii2 pour insérer vidéo youtube]

Installation : 
=============
1. in your path, create new folder "components" if not existe .
2. copy past the file "YoutubeWidget.php" and the folder "views"  in "components" folder.
3. in your views file, like About.php or what you want past this code :
     <?php  use app\components\YoutubeWidget; ?>
     <?= YoutubeWidget::widget(["code"=>"1vthXB-7Hdc"]) ?>
that's all.

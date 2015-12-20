<?php /*
<h1>hellow world</h1>
<?php
	use yii\helpers\Html;
	use yii\helpers\HtmlPurifier;
?>
<h1><?=Html::encode($view_hello_str);?></h1>
<h1><?=$view_test_arr[0]?></h1>
<h1><?=HtmlPurifier::process($view_hello_str);?></h1>
<?php echo $this->render('about', array('v_hello_str'=>'hello about'));?>
*/
?>
<h1>hello index</h1>
<?php $this->beginBlock('block1');?>
<h1>this block 1</h1>
<?php $this->endBlock();?>
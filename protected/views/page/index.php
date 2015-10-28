<?php


$this->pageTitle=Yii::app()->name;
?>

<h2 class="wsd-postheader">Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h2>
<div class="wsd-postcontent clearfix">
<div class="wsd-layout-cell layout-item-1" style="width: 50%">
<br />
<?php
echo CHtml::image(Yii::app()->request->baseUrl."/images/me.jpg","image",array("width"=>400));
?>
</div>

<div class="wsd-layout-cell layout-item-1" style="width: 50%">

<blockquote><samp >People who never make mistakes are those who never try new things. <br /> 
<p class="clearfix" style="text-align: right;">- Albert Einstein</p></samp></blockquote>
<br />
<p style="text-align: justify;">
People live their lives bound by what they accept as correct and true. That's how they define "reality". 
But what does it mean to be "correct" or "true"? Merely vague concepts ... their "reality" may all be a mirage. 
Can we consider them to simply be living in their own world, shaped by their beliefs?
<p class="clearfix" style="text-align: right;">- Uchiha Itachi</p>
<br /><br />
You are too concerned about what was and what will be. 
There is a saying: yesterday is history, tomorrow is a mystery, but today is a gift. 
That is why it is called the present.
<p class="clearfix" style="text-align: right;">- Master Oogway</p>
</p>
</div>
</div>
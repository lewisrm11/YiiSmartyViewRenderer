#YiiSmartyViewRenderer
##Basic renderer for Yii and Smarty.
## Requirements
`Smarty 3`
`Yii 1.x`
`Php >= 5.2`
##Clone the renderer and smarty
#####1.- Clone Smarty in your vendor directory. In mi proyect was in webroot/src/protected/vendors
```
webroot/src/protected/vendors/Smarty/...
```

#####2.- Clone the repository in your vendor directory. In my current proyect create a `vendors` directory in webroot/src/protected/vendors
```
webroot/src/protected/vendors/YiiSmartyViewRenderer/...
```

## Config main.php
##### Install a viewRenderer application component
##### Reference: [Yii 1.x Alternative Template Syntax](https://www.yiiframework.com/doc/guide/1.1/es/topics.prado) 
```
'components' => array(
    'viewRenderer'=>array(
                'class'=>'application.vendors.YiiSmartyViewRenderer.YiiSmartyViewRenderer',
    ),
    ...
)
```
##Create the template
#####test.tpl for example in a partials directory `views/partials`
```
<?php
{$prop}
{Yii::app()->user->id}
```

##Invoke the view template with render or renderPartial
##### renderPartial() for example in the a create view `views/create.php`
##### Note: this create.php is a yii view not a smarty tpl, that is possible!!! :)
```
<!--views/create.php-->
<div class="panel-body">
<?php $this->renderPartial('partials/test', compact('prop'));?>
</div>
```

Yii 1.x work with php 5 and Smarty 3 work from php 5.2 to 7, so, for this reason, smarty is a good option for yii 1.x.

I hoppe this work for you. :)


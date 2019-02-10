# value_separator: widget for yii2 

# What does it do
changes the value from 1000 to 1,000.00 
if there are errors in the value, like words or characters. He's get only numbers

## Installation
The preferred way to install this extension is through [composer](http://getcomposer.org/download/). Remember to refer to the [composer.json](https://github.com/kartik-v/yii2-widgets/blob/master/composer.json) for 
this extension's requirements and dependencies. 

### Install

Either run

```
$ php composer.phar require Eskadra/value_separator "*"
```

or add

```
"Eskadra/value_separator": "*"
```

to the ```require``` section of your `composer.json` file.

### how it works
```php
use Eskadra\value_separator;

echo rpn_converter::widget(['number'=>'1000']); //Output 1,000.00 
OR
echo rpn_converter::widget(['number'=>'1asda0gasg0фывфы0']); //Output 1,000.00 
```

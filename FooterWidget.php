<?php
/**
 * Created by Navatech.
 * @project nava-footer
 * @author  LocPX
 * @email   loc.xuanphama1t1[at]gmail.com
 * @date    2/19/2016
 * @time    10:10 AM
 */
namespace phamxuanloc\footer;

use yii\base\Widget;

class FooterWidget extends Widget {

	public $author;

	public function init() {
		// TODO: Change the auto generated stub
		parent::init();
	}

	public function run() {
		echo "Powered by Nava";
		echo "edit by " .$this->author;
	}
}
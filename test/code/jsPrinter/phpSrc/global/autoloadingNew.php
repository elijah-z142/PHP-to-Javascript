<?php
/**
 * Created by PhpStorm.
 * User: mostkaj
 * Date: 16.6.2016
 * Time: 14:24
 */
namespace autoloading\new_;

use autoloading\int\IntClass;

class NewClass implements IntClass{
	public function testIntFunc(){
		return "intFunc";
	}
}
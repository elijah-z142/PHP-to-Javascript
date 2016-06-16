<?php
/**
 * Created by PhpStorm.
 * User: mostkaj
 * Date: 16.6.2016
 * Time: 14:23
 */
namespace autoloading\root;

use autoloading\int\IntClass;
use autoloading\new_\NewClass;
use autoloading\parent\ParentClass;

class ChildClass extends ParentClass implements IntClass{

	public function testIntFunc(){
		return "intFunc";
	}

	public function testParentFunc(){
		return "override parentFunc";
	}

	public function testSuperParentFunc(){
		return parent::testParentFunc();
	}
}

$newClass = new NewClass();
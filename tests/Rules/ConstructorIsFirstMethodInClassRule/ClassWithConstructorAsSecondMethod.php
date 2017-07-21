<?php
declare(strict_types = 1);

namespace Mhujer\PHPStanRules\Rules\ConstructorIsFirstMethodInClassRule;

class ClassWithConstructorAsSecondMethod
{

	public function foo()
	{

	}

	public function __construct()
	{

	}

	public function bar()
	{

	}

}

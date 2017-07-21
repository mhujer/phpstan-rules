<?php
declare(strict_types = 1);

namespace Mhujer\PHPStanRules\Rules\ConstructorIsFirstMethodInClassRule;

class ClassWithConstructorAsFirstMethod
{

	public function __construct()
	{

	}

	public function bar()
	{
		
	}

}

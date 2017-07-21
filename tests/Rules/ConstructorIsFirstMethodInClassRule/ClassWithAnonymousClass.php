<?php
declare(strict_types = 1);

namespace Mhujer\PHPStanRules\Rules\ConstructorIsFirstMethodInClassRule;

class ClassWithAnonymousClass
{
	public function bar()
	{
		$a = new class {
			protected function mySpecialMethod(): string
			{
			}

			public function __construct()
			{
			}
		};
	}

}

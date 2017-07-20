<?php
declare(strict_types = 1);

namespace Test;

class ClassWithAnonymouseClassFromTrait
{
	public function bar()
	{
		$a = new class {
			use Foo;

			public function __construct()
			{
			}

			protected function mySpecialMethod(): string
			{
			}

		};
	}

}

trait Foo
{

	abstract protected function mySpecialMethod(): string;
}

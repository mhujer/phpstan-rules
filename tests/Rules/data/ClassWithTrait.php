<?php
declare(strict_types = 1);

namespace Test;

class ClassWithAnonymouseClassFromTrait
{

	use Foo;

	public function __construct()
	{
	}

	protected function mySpecialMethod(): string
	{
	}

}

trait Foo
{
	abstract protected function mySpecialMethod(): string;
}

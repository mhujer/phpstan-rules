<?php
declare(strict_types = 1);

namespace Mhujer\PHPStanRules\Rules\ConstructorIsFirstMethodInClassRule;

class ClassWithTrait
{

	use FooBar;

	public function __construct()
	{
	}

	protected function mySpecialMethod(): string
	{
	}

}

trait FooBar
{
	abstract protected function mySpecialMethod(): string;
}

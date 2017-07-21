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

class ClassWithTraitAndIncorrectlySortedConstructor
{

	use FooBar;

	protected function mySpecialMethod(): string
	{
	}

	public function __construct()
	{
	}

}

trait FooBar
{
	abstract protected function mySpecialMethod(): string;
}

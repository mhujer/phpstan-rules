<?php declare(strict_types = 1);

namespace ConstructorIsFirstMethodInClassRule;

class ClassWithConstructorAsFirstMethod
{

	public function __construct()
	{
	}

	public function bar(): void
	{
	}

}

class ClassWithConstructorAsSecondMethod
{

	public function foo(): void
	{
	}

	public function __construct()
	{
	}

	public function bar(): void
	{
	}

}

class ClassWithAnonymousClass
{

	public function bar(): void
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

class ClassWithoutMethodsIsOK
{

}

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

	protected function mySpecialTraitMethod(): string
	{
		return '';
	}

}

<?php declare(strict_types = 1);

namespace ClassUsesObjectPrototype;

use Consistence\ObjectPrototype;
use Consistence\Type\ObjectMixinTrait;

class ClassThatDoesNotExtendAnything
{

}

// class that extends something else and uses ObjectMixinTrait
class Bar
{

}

class FooClassUsesObjectMixinTrait extends Bar
{
	use \Consistence\Type\ObjectMixinTrait;
}

// class that extends something else, but does not use ObjectMixinTrait
class FooClassThatDoesNotUseAnyTrait extends Bar
{

}

// Ok
class ClassThatExtendsObjectPrototype extends ObjectPrototype
{

}

// class with anonymous class is not analyzed
class FooWithAnonymousClass extends ObjectPrototype
{

	public function getInst()
	{
		return new class
		{
		};
	}
}

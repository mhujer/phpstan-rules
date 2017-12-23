<?php declare(strict_types = 1);

namespace ClassUsesObjectPrototype;

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

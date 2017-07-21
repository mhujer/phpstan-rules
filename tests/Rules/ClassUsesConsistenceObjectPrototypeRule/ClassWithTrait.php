<?php
declare(strict_types = 1);

namespace Mhujer\PHPStanRules\Rules\ClassUsesConsistenceObjectPrototypeRule;

use Consistence\Type\ObjectMixinTrait;

class Foo extends Bar
{
	use ObjectMixinTrait;
}

class Bar
{

}


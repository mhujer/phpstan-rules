<?php

declare(strict_types = 1);

namespace Mhujer\PHPStanRules\Rules;

class ClassUsesConsistenceObjectPrototypeRuleTest extends \PHPStan\Rules\AbstractRuleTest
{

	protected function getRule(): \PHPStan\Rules\Rule
	{
		return new ClassUsesConsistenceObjectPrototypeRule($this->createBroker());
	}

	public function testClassThatDoesNotExtendAnythingShouldExtendObjectPrototype()
	{
		$this->analyse([__DIR__ . '/ClassUsesConsistenceObjectPrototypeRule/ClassThatDoesNotExtendAnything.php'], [
			[
				'Class should extend ObjectPrototype',
				6,
			],
		]);
	}

	public function testClassThatUsesObjectMixinTrait()
	{
		$this->analyse([__DIR__ . '/ClassUsesConsistenceObjectPrototypeRule/ClassWithTrait.php'], [
			[
				'Class should extend ObjectPrototype', // Bar class
				13,
			],
		]);
	}

	public function testClassThatDoesNotUseObjectMixinTrait()
	{
		$this->analyse([__DIR__ . '/ClassUsesConsistenceObjectPrototypeRule/ClassWithoutTrait.php'], [
			[
				'Class should use Consistence\Type\ObjectMixinTrait',
				6,
			],
			[
				'Class should extend ObjectPrototype', // Bar class
				11,
			],
		]);
	}

}

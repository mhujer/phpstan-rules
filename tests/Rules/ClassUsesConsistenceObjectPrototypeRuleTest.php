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

}

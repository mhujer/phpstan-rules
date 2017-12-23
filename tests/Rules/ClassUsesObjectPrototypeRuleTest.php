<?php declare(strict_types = 1);

namespace Mhujer\PHPStanRules\Rules;

class ClassUsesObjectPrototypeRuleTest extends \PHPStan\Testing\RuleTestCase
{

	protected function getRule(): \PHPStan\Rules\Rule
	{
		return new ClassUsesObjectPrototypeRule($this->createBroker());
	}

	public function testClassUsesObjectPrototype(): void
	{
		$this->analyse([__DIR__ . '/data/class-uses-object-prototype.php'], [
			[
				'Class should extend ObjectPrototype',
				5,
			],
			[
				'Class should extend ObjectPrototype', // Bar class
				11,
			],
			[
				'Class should use Consistence\Type\ObjectMixinTrait',
				22,
			],
		]);
	}

}

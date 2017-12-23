<?php declare(strict_types = 1);

namespace Mhujer\PHPStanRules\Rules;

class ConstructorIsFirstMethodInClassRuleTest extends \PHPStan\Testing\RuleTestCase
{

	protected function getRule(): \PHPStan\Rules\Rule
	{
		return new ConstructorIsFirstMethodInClassRule();
	}

	public function testConstructorIsFirstMethodInClass(): void
	{
		$this->analyse([__DIR__ . '/data/constructor-is-first-method-in-class.php'], [
			[
				'__construct() should be first method in the class (first method is "foo()")',
				18,
			],
			[
				'__construct() should be first method in the class (first method is "mySpecialMethod()")',
				40,
			],
			[
				'__construct() should be first method in the class (first method is "mySpecialMethod()")',
				73,
			],
		]);
	}

}

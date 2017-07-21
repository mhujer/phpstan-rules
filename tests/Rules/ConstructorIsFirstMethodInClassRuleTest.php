<?php

declare(strict_types = 1);

namespace Mhujer\PHPStanRules\Rules;

class ConstructorIsFirstMethodInClassRuleTest extends \PHPStan\Rules\AbstractRuleTest
{

	protected function getRule(): \PHPStan\Rules\Rule
	{
		return new ConstructorIsFirstMethodInClassRule($this->createBroker());
	}

	public function testConstructorIsFirstMethodInClassRule()
	{
		$this->analyse([__DIR__ . '/ConstructorIsFirstMethodInClassRule/ClassWithConstructorAsSecondMethod.php'], [
			[
				'__construct should be first method in the class "ClassWithConstructorAsSecondMethod" (first method is "foo")',
				6,
			],
		]);
	}

	public function testConstructorIsFirstMethodInClassRuleX()
	{
		$this->analyse([__DIR__ . '/ConstructorIsFirstMethodInClassRule/ClassWithConstructorAsFirstMethod.php'], []);
	}

	public function testConstructorIsFirstMethodInClassRuleXX()
	{
		$this->analyse([__DIR__ . '/ConstructorIsFirstMethodInClassRule/ClassWithAnonymousClass.php'], []);
	}

	public function testConstructorIsFirstMethodInClassRuleXXX()
	{
		$this->analyse([__DIR__ . '/ConstructorIsFirstMethodInClassRule/ClassWithTrait.php'], []);
	}

	public function testConstructorIsFirstMethodInClassRuleXXXX()
	{
		$this->analyse([__DIR__ . '/ConstructorIsFirstMethodInClassRule/ClassWithoutMethods.php'], []);
	}

}

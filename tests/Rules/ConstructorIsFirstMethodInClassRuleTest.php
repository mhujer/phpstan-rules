<?php

declare(strict_types = 1);

namespace Mhujer\PHPStanRules\Rules;

class ConstructorIsFirstMethodInClassRuleTest extends \PHPStan\Testing\RuleTestCase
{

	protected function getRule(): \PHPStan\Rules\Rule
	{
		return new ConstructorIsFirstMethodInClassRule($this->createBroker());
	}

	public function testConstructorIsFirstMethodInClassRuleX()
	{
		$this->analyse([__DIR__ . '/ConstructorIsFirstMethodInClassRule/ClassWithConstructorAsFirstMethod.php'], []);
	}

	public function testConstructorIsSecondMethodIsError()
	{
		$this->analyse([__DIR__ . '/ConstructorIsFirstMethodInClassRule/ClassWithConstructorAsSecondMethod.php'], [
			[
				'__construct() should be first method in the class (first method is "foo()")',
				6,
			],
		]);
	}

	public function testIncorrectlySortedConstructorInTheAnonymousClassIsIgnored()
	{
		$this->analyse([__DIR__ . '/ConstructorIsFirstMethodInClassRule/ClassWithAnonymousClass.php'], [
			[
				'__construct() should be first method in the class (first method is "mySpecialMethod()")',
				10,
			],
		]);
	}

	public function testConstructorSortIsCheckedForClassesThatUseTraits()
	{
		$this->analyse([__DIR__ . '/ConstructorIsFirstMethodInClassRule/ClassWithTrait.php'], [
			[
				'__construct() should be first method in the class (first method is "mySpecialMethod()")',
				21,
			],
		]);
	}

	public function testConstructorIsFirstMethodInClassRuleXXXX()
	{
		$this->analyse([__DIR__ . '/ConstructorIsFirstMethodInClassRule/ClassWithoutMethods.php'], []);
	}

}

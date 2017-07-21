<?php

declare(strict_types = 1);

namespace Mhujer\PHPStanRules\Rules;

class ConstructorIsFirstMethodInClassRuleTest extends \PHPStan\Rules\AbstractRuleTest
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
				'__construct should be first method in the class "ClassWithConstructorAsSecondMethod" (first method is "foo")',
				6,
			],
		]);
	}

	public function testIncorrectlySortedConstructorInTheAnonymousClassIsIgnored()
	{
		$this->analyse([__DIR__ . '/ConstructorIsFirstMethodInClassRule/ClassWithAnonymousClass.php'], []);
	}

	public function testConstructorSortIsCheckedForClassesThatUseTraits()
	{
		$this->analyse([__DIR__ . '/ConstructorIsFirstMethodInClassRule/ClassWithTrait.php'], [
			[
				'__construct should be first method in the class "ClassWithTraitAndIncorrectlySortedConstructor" (first method is "mySpecialMethod")',
				21,
			],
		]);
	}

	public function testConstructorIsFirstMethodInClassRuleXXXX()
	{
		$this->analyse([__DIR__ . '/ConstructorIsFirstMethodInClassRule/ClassWithoutMethods.php'], []);
	}

}

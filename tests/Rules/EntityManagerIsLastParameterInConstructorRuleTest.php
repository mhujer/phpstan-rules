<?php declare(strict_types = 1);

namespace Mhujer\PHPStanRules\Rules;

class EntityManagerIsLastParameterInConstructorRuleTest extends \PHPStan\Testing\RuleTestCase
{

	protected function getRule(): \PHPStan\Rules\Rule
	{
		return new EntityManagerIsLastParameterInConstructorRule();
	}

	public function testConstructorIsFirstMethodInClass(): void
	{
		$this->analyse([__DIR__ . '/data/entity-manager-is-last-parameter-in-constructor.php'], [
			[
				'Constructor parameter EntityManagerInterface $entityManager in class EntityManagerIsLastParameterInConstructorRule\ConstructorWithEntityManagerNotLast should be last in the method.',
				49,
			],
		]);
	}

}

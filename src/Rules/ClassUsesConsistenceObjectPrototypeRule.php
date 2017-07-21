<?php

declare(strict_types = 1);

namespace Mhujer\PHPStanRules\Rules;

use Consistence\ObjectPrototype;
use Consistence\Type\ObjectMixinTrait;
use PhpParser\Node;
use PhpParser\Node\Stmt\Class_;
use PhpParser\Node\Stmt\ClassMethod;
use PHPStan\Analyser\Scope;
use PHPStan\Broker\Broker;

class ClassUsesConsistenceObjectPrototypeRule implements \PHPStan\Rules\Rule
{

	/**
	 * @var \PHPStan\Broker\Broker
	 */
	private $broker;

	public function __construct(
		Broker $broker
	)
	{
		$this->broker = $broker;
	}

	public function getNodeType(): string
	{
		return Class_::class;
	}

	/**
	 * @param \PhpParser\Node\Stmt\Class_ $node
	 * @param \PHPStan\Analyser\Scope $scope
	 * @return string[]
	 */
	public function processNode(Node $node, Scope $scope): array
	{
		$classReflection = $this->broker->getClass($scope->getNamespace() . '\\' . $node->name);

		$parentClass = $classReflection->getParentClass();
		if ($parentClass === false) { // does not extend anything
			return [
					'Class should extend ObjectPrototype'
			];
		}

		if (!$classReflection->hasTraitUse(ObjectMixinTrait::class)) {
			return [
				sprintf(
					'Class should use %s',
					ObjectMixinTrait::class
				)
			];
		}

		return [];
	}

}

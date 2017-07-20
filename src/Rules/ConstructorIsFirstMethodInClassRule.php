<?php

declare(strict_types = 1);

namespace Mhujer\PHPStanRules\Rules;

use PhpParser\Node;
use PhpParser\Node\Stmt\Class_;
use PhpParser\Node\Stmt\ClassMethod;
use PHPStan\Analyser\Scope;
use PHPStan\Broker\Broker;

class ConstructorIsFirstMethodInClassRule implements \PHPStan\Rules\Rule
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
		$classMethods = $node->getMethods();
		//d($classMethods);
		if (count($classMethods) === 0) {
			return [];
		}

		$firstMethodName = null;

		foreach ($classMethods as $method) {
			if ($firstMethodName === null) {
				$firstMethodName = $method->name;
				continue;
			}

			if ($method->name === '__construct') {
				return [
					sprintf(
						'__construct should be first method in the class "%s" (first method is "%s")',
						$node->name,
						$firstMethodName
					)
				];
			}
		}
		return [];
	}

}
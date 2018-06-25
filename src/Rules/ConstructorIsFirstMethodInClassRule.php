<?php declare(strict_types = 1);

namespace Mhujer\PHPStanRules\Rules;

use PhpParser\Node;
use PhpParser\Node\Stmt\Class_;
use PHPStan\Analyser\Scope;

class ConstructorIsFirstMethodInClassRule implements \PHPStan\Rules\Rule
{

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
		if (count($classMethods) === 0) {
			return [];
		}

		$firstMethodName = null;

		foreach ($classMethods as $method) {
			if ($firstMethodName === null) {
				$firstMethodName = $method->name;
				continue;
			}

			if ($method->name->toString() === '__construct') {
				return [
					sprintf(
						'__construct() should be first method in the class (first method is "%s()")',
						$firstMethodName->toString()
					),
				];
			}
		}
		return [];
	}

}

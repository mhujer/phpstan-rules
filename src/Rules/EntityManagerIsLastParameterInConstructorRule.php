<?php declare(strict_types = 1);

namespace Mhujer\PHPStanRules\Rules;

use PhpParser\Node;
use PhpParser\Node\Expr\Variable;
use PhpParser\Node\NullableType;
use PhpParser\Node\Stmt\ClassMethod;
use PHPStan\Analyser\Scope;

/**
 * @implements \PHPStan\Rules\Rule<\PhpParser\Node\Stmt\ClassMethod>
 */
class EntityManagerIsLastParameterInConstructorRule implements \PHPStan\Rules\Rule
{

	public function getNodeType(): string
	{
		return ClassMethod::class;
	}

	/**
	 * @param \PhpParser\Node\Stmt\ClassMethod $node
	 * @param \PHPStan\Analyser\Scope $scope
	 * @return string[]
	 */
	public function processNode(Node $node, Scope $scope): array
	{
		$methodName = $node->name->name;

		if ($methodName !== '__construct') {
			return [];
		}

		/** @var \PhpParser\Node\Param[] $params */
		$params = $node->getParams();

		// no parameters, no need to sort anything
		if (count($params) === 0) {
			return [];
		}

		// single parameter is always correctly sorted
		if (count($params) === 1) {
			return [];
		}

		foreach ($params as $key => $param) {
			if ($param->type === null) {
				continue;
			}

			if ($param->type instanceof Node\UnionType) {
				continue;
			}

			$typeName = $param->type instanceof NullableType
				? (string) $param->type->type
				: (string) $param->type;

			if ($typeName !== 'Doctrine\ORM\EntityManagerInterface') {
				continue;
			}

			// is last parameter -> OK
			if ($key === (count($params) - 1)) {
				break;
			}

			if (!$param->var instanceof Variable || !is_string($param->var->name)) {
				throw new \PHPStan\ShouldNotHappenException();
			}

			$currentClassReflection = $scope->getClassReflection();
			if ($currentClassReflection === null) {
				throw new \PHPStan\ShouldNotHappenException();
			}

			return [
				sprintf(
					'Constructor parameter EntityManagerInterface $%s in class %s should be last in the method.',
					$param->var->name,
					$currentClassReflection->getDisplayName()
				),
			];

		}

		return [];
	}

}

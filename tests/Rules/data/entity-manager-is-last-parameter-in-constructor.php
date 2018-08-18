<?php declare(strict_types = 1);

namespace EntityManagerIsLastParameterInConstructorRule;

use Doctrine\ORM\EntityManagerInterface;

class ClassWithoutConstructor
{

	public function bar(): void
	{
	}

}

class ConstructorWithoutEntityManager
{

	public function __construct(
		string $foo,
		int $bar
	)
	{
	}

}

class ConstructorWithEntityManagerLast
{
	/** @var \Doctrine\ORM\EntityManagerInterface */
	private $entityManager;

	public function __construct(
		string $foo,
		?int $bar,
		EntityManagerInterface $entityManager
	)
	{
		$this->entityManager = $entityManager;
	}

}

class ConstructorWithEntityManagerNotLast
{
	/** @var \Doctrine\ORM\EntityManagerInterface */
	private $entityManager;

	public function __construct(
		string $foo,
		EntityManagerInterface $entityManager,
		int $bar
	)
	{
		$this->entityManager = $entityManager;
	}

}


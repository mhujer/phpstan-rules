<?php
// source: C:\devweb\htdocs\phpstan-rules\tests/../vendor/phpstan/phpstan/conf/config.neon 
// source: C:\devweb\htdocs\phpstan-rules\tests/../vendor/phpstan/phpstan/conf/config.level5.neon 

class Container_dde900aef8 extends Nette\DI\Container
{
	protected $meta = [
		'types' => [
			'PHPStan\Analyser\TypeSpecifier' => [1 => ['1']],
			'PHPStan\Broker\BrokerFactory' => [1 => ['2']],
			'PHPStan\Command\ErrorFormatter\ErrorFormatter' => [
				1 => [
					'errorFormatter.checkstyle',
					'errorFormatter.raw',
					'errorFormatter.table',
				],
			],
			'PHPStan\Command\ErrorFormatter\CheckstyleErrorFormatter' => [1 => ['errorFormatter.checkstyle']],
			'PHPStan\Command\ErrorFormatter\RawErrorFormatter' => [1 => ['errorFormatter.raw']],
			'PHPStan\Command\ErrorFormatter\TableErrorFormatter' => [1 => ['errorFormatter.table']],
			'PHPStan\Parser\FunctionCallStatementFinder' => [1 => ['6']],
			'PHPStan\Reflection\MethodsClassReflectionExtension' => [1 => ['7', '10']],
			'PHPStan\Reflection\Annotations\AnnotationsMethodsClassReflectionExtension' => [1 => ['7']],
			'PHPStan\Reflection\PropertiesClassReflectionExtension' => [1 => ['8', '9', '10', '71']],
			'PHPStan\Reflection\Annotations\AnnotationsPropertiesClassReflectionExtension' => [1 => ['8']],
			'PHPStan\Reflection\PhpDefect\PhpDefectClassReflectionExtension' => [1 => ['9']],
			'PHPStan\Reflection\BrokerAwareClassReflectionExtension' => [1 => ['10']],
			'PHPStan\Reflection\Php\PhpClassReflectionExtension' => [1 => ['10']],
			'PHPStan\Rules\FunctionDefinitionCheck' => [1 => ['11']],
			'PHPStan\Rules\FunctionReturnTypeCheck' => [1 => ['12']],
			'PHPStan\Rules\Properties\PropertyDescriptor' => [1 => ['13']],
			'PHPStan\Rules\Properties\PropertyReflectionFinder' => [1 => ['14']],
			'PHPStan\Reflection\FunctionReflectionFactory' => [1 => ['15']],
			'PHPStan\Reflection\Php\PhpMethodReflectionFactory' => [1 => ['16']],
			'PHPStan\Rules\RegistryFactory' => [1 => ['17']],
			'PHPStan\Rules\UnusedFunctionParametersCheck' => [1 => ['18']],
			'PHPStan\Type\FileTypeMapper' => [1 => ['19']],
			'PhpParser\BuilderFactory' => [1 => ['20']],
			'PhpParser\Lexer' => [1 => ['21']],
			'PhpParser\NodeVisitorAbstract' => [1 => ['22']],
			'PhpParser\NodeVisitor' => [1 => ['22']],
			'PhpParser\NodeVisitor\NameResolver' => [1 => ['22']],
			'PhpParser\ParserAbstract' => [1 => ['23']],
			'PhpParser\Parser' => [1 => ['23']],
			'PhpParser\Parser\Php7' => [1 => ['23']],
			'PhpParser\PrettyPrinterAbstract' => [1 => ['24']],
			'PhpParser\PrettyPrinter\Standard' => [1 => ['24']],
			'Nette\Caching\Cache' => [1 => ['25']],
			'PHPStan\Analyser\Analyser' => [1 => ['26']],
			'PHPStan\Analyser\NodeScopeResolver' => [1 => ['27']],
			'PHPStan\Broker\Broker' => [1 => ['broker']],
			'PHPStan\Command\AnalyseApplication' => [1 => ['29']],
			'PHPStan\File\FileExcluder' => [1 => ['30']],
			'PHPStan\File\FileHelper' => [1 => ['31']],
			'PHPStan\Parser\Parser' => [1 => ['32'], 0 => ['directParser']],
			'PHPStan\Parser\CachedParser' => [1 => ['32']],
			'PHPStan\Parser\DirectParser' => [['directParser']],
			'PHPStan\Rules\Rule' => [
				1 => [
					'34',
					'35',
					'36',
					'37',
					'38',
					'39',
					'40',
					'41',
					'42',
					'43',
					'44',
					'45',
					'47',
					'48',
					'49',
					'50',
					'51',
					'52',
					'53',
					'54',
					'55',
					'56',
					'57',
					'58',
					'59',
					'60',
					'61',
					'62',
					'63',
					'66',
					'67',
					'68',
					'72',
					'73',
					'74',
					'75',
					'76',
					'77',
					'78',
				],
			],
			'PHPStan\Rules\Arrays\AppendedArrayItemTypeRule' => [1 => ['34']],
			'PHPStan\Rules\Arrays\DuplicateKeysInLiteralArraysRule' => [1 => ['35']],
			'PHPStan\Rules\Arrays\InvalidKeyInArrayDimFetchRule' => [1 => ['36']],
			'PHPStan\Rules\Arrays\InvalidKeyInArrayItemRule' => [1 => ['37']],
			'PHPStan\Rules\Cast\UselessCastRule' => [1 => ['38']],
			'PHPStan\Rules\Classes\ClassConstantRule' => [1 => ['39']],
			'PHPStan\Rules\Classes\ExistingClassInInstanceOfRule' => [1 => ['40']],
			'PHPStan\Rules\Classes\InstantiationRule' => [1 => ['41']],
			'PHPStan\Rules\Classes\RequireParentConstructCallRule' => [1 => ['42']],
			'PHPStan\Rules\Classes\UnusedConstructorParametersRule' => [1 => ['43']],
			'PHPStan\Rules\Constants\ConstantRule' => [1 => ['44']],
			'PHPStan\Rules\Exceptions\CaughtExceptionExistenceRule' => [1 => ['45']],
			'PHPStan\Rules\FunctionCallParametersCheck' => [1 => ['46']],
			'PHPStan\Rules\Functions\CallToCountOnlyWithArrayOrCountableRule' => [1 => ['47']],
			'PHPStan\Rules\Functions\CallToFunctionParametersRule' => [1 => ['48']],
			'PHPStan\Rules\Functions\CallToNonExistentFunctionRule' => [1 => ['49']],
			'PHPStan\Rules\Functions\ClosureReturnTypeRule' => [1 => ['50']],
			'PHPStan\Rules\Functions\ExistingClassesInClosureTypehintsRule' => [1 => ['51']],
			'PHPStan\Rules\Functions\ExistingClassesInTypehintsRule' => [1 => ['52']],
			'PHPStan\Rules\Functions\InnerFunctionRule' => [1 => ['53']],
			'PHPStan\Rules\Functions\NonExistentDefinedFunctionRule' => [1 => ['54']],
			'PHPStan\Rules\Functions\PrintfParametersRule' => [1 => ['55']],
			'PHPStan\Rules\Functions\ReturnTypeRule' => [1 => ['56']],
			'PHPStan\Rules\Functions\UnusedClosureUsesRule' => [1 => ['57']],
			'PHPStan\Rules\Methods\ExistingClassesInTypehintsRule' => [1 => ['58']],
			'PHPStan\Rules\Methods\ReturnTypeRule' => [1 => ['59']],
			'PHPStan\Rules\Properties\AccessStaticPropertiesRule' => [1 => ['60']],
			'PHPStan\Rules\Properties\DefaultValueTypesAssignedToPropertiesRule' => [1 => ['61']],
			'PHPStan\Rules\Properties\ExistingClassesInPropertiesRule' => [1 => ['62']],
			'PHPStan\Rules\Properties\TypesAssignedToPropertiesRule' => [1 => ['63']],
			'PHPStan\Rules\Registry' => [1 => ['registry']],
			'PHPStan\Rules\RuleLevelHelper' => [1 => ['65']],
			'PHPStan\Rules\Variables\DefinedVariableInAnonymousFunctionUseRule' => [1 => ['66']],
			'PHPStan\Rules\Variables\ThisVariableRule' => [1 => ['67']],
			'PHPStan\Rules\Variables\VariableCloningRule' => [1 => ['68']],
			'PhpParser\NodeTraverserInterface' => [1 => ['69']],
			'PhpParser\NodeTraverser' => [1 => ['69']],
			'Nette\Caching\IStorage' => [['cachingStorage']],
			'Nette\Caching\Storages\FileStorage' => [['cachingStorage']],
			'PHPStan\Reflection\Php\UniversalObjectCratesClassReflectionExtension' => [1 => ['71']],
			'PHPStan\Rules\Comparison\StrictComparisonOfDifferentTypesRule' => [1 => ['72']],
			'PHPStan\Rules\Methods\CallMethodsRule' => [1 => ['73']],
			'PHPStan\Rules\Methods\CallStaticMethodsRule' => [1 => ['74']],
			'PHPStan\Rules\Properties\AccessPropertiesRule' => [1 => ['75']],
			'PHPStan\Rules\Properties\ReadingWriteOnlyPropertiesRule' => [1 => ['76']],
			'PHPStan\Rules\Properties\WritingToReadOnlyPropertiesRule' => [1 => ['77']],
			'PHPStan\Rules\Variables\DefinedVariableRule' => [1 => ['78']],
			'Nette\DI\Container' => [1 => ['container']],
		],
		'services' => [
			'broker' => 'PHPStan\Broker\Broker',
			'cachingStorage' => 'Nette\Caching\Storages\FileStorage',
			'container' => 'Nette\DI\Container',
			'directParser' => 'PHPStan\Parser\DirectParser',
			'errorFormatter.checkstyle' => 'PHPStan\Command\ErrorFormatter\CheckstyleErrorFormatter',
			'errorFormatter.raw' => 'PHPStan\Command\ErrorFormatter\RawErrorFormatter',
			'errorFormatter.table' => 'PHPStan\Command\ErrorFormatter\TableErrorFormatter',
			'registry' => 'PHPStan\Rules\Registry',
			1 => 'PHPStan\Analyser\TypeSpecifier',
			'PHPStan\Broker\BrokerFactory',
			6 => 'PHPStan\Parser\FunctionCallStatementFinder',
			'PHPStan\Reflection\Annotations\AnnotationsMethodsClassReflectionExtension',
			'PHPStan\Reflection\Annotations\AnnotationsPropertiesClassReflectionExtension',
			'PHPStan\Reflection\PhpDefect\PhpDefectClassReflectionExtension',
			'PHPStan\Reflection\Php\PhpClassReflectionExtension',
			'PHPStan\Rules\FunctionDefinitionCheck',
			'PHPStan\Rules\FunctionReturnTypeCheck',
			'PHPStan\Rules\Properties\PropertyDescriptor',
			'PHPStan\Rules\Properties\PropertyReflectionFinder',
			'PHPStan\Reflection\FunctionReflection',
			'PHPStan\Reflection\Php\PhpMethodReflection',
			'PHPStan\Rules\RegistryFactory',
			'PHPStan\Rules\UnusedFunctionParametersCheck',
			'PHPStan\Type\FileTypeMapper',
			'PhpParser\BuilderFactory',
			'PhpParser\Lexer',
			'PhpParser\NodeVisitor\NameResolver',
			'PhpParser\Parser\Php7',
			'PhpParser\PrettyPrinter\Standard',
			'Nette\Caching\Cache',
			'PHPStan\Analyser\Analyser',
			'PHPStan\Analyser\NodeScopeResolver',
			29 => 'PHPStan\Command\AnalyseApplication',
			'PHPStan\File\FileExcluder',
			'PHPStan\File\FileHelper',
			'PHPStan\Parser\CachedParser',
			34 => 'PHPStan\Rules\Arrays\AppendedArrayItemTypeRule',
			'PHPStan\Rules\Arrays\DuplicateKeysInLiteralArraysRule',
			'PHPStan\Rules\Arrays\InvalidKeyInArrayDimFetchRule',
			'PHPStan\Rules\Arrays\InvalidKeyInArrayItemRule',
			'PHPStan\Rules\Cast\UselessCastRule',
			'PHPStan\Rules\Classes\ClassConstantRule',
			'PHPStan\Rules\Classes\ExistingClassInInstanceOfRule',
			'PHPStan\Rules\Classes\InstantiationRule',
			'PHPStan\Rules\Classes\RequireParentConstructCallRule',
			'PHPStan\Rules\Classes\UnusedConstructorParametersRule',
			'PHPStan\Rules\Constants\ConstantRule',
			'PHPStan\Rules\Exceptions\CaughtExceptionExistenceRule',
			'PHPStan\Rules\FunctionCallParametersCheck',
			'PHPStan\Rules\Functions\CallToCountOnlyWithArrayOrCountableRule',
			'PHPStan\Rules\Functions\CallToFunctionParametersRule',
			'PHPStan\Rules\Functions\CallToNonExistentFunctionRule',
			'PHPStan\Rules\Functions\ClosureReturnTypeRule',
			'PHPStan\Rules\Functions\ExistingClassesInClosureTypehintsRule',
			'PHPStan\Rules\Functions\ExistingClassesInTypehintsRule',
			'PHPStan\Rules\Functions\InnerFunctionRule',
			'PHPStan\Rules\Functions\NonExistentDefinedFunctionRule',
			'PHPStan\Rules\Functions\PrintfParametersRule',
			'PHPStan\Rules\Functions\ReturnTypeRule',
			'PHPStan\Rules\Functions\UnusedClosureUsesRule',
			'PHPStan\Rules\Methods\ExistingClassesInTypehintsRule',
			'PHPStan\Rules\Methods\ReturnTypeRule',
			'PHPStan\Rules\Properties\AccessStaticPropertiesRule',
			'PHPStan\Rules\Properties\DefaultValueTypesAssignedToPropertiesRule',
			'PHPStan\Rules\Properties\ExistingClassesInPropertiesRule',
			'PHPStan\Rules\Properties\TypesAssignedToPropertiesRule',
			65 => 'PHPStan\Rules\RuleLevelHelper',
			'PHPStan\Rules\Variables\DefinedVariableInAnonymousFunctionUseRule',
			'PHPStan\Rules\Variables\ThisVariableRule',
			'PHPStan\Rules\Variables\VariableCloningRule',
			'PhpParser\NodeTraverser',
			71 => 'PHPStan\Reflection\Php\UniversalObjectCratesClassReflectionExtension',
			'PHPStan\Rules\Comparison\StrictComparisonOfDifferentTypesRule',
			'PHPStan\Rules\Methods\CallMethodsRule',
			'PHPStan\Rules\Methods\CallStaticMethodsRule',
			'PHPStan\Rules\Properties\AccessPropertiesRule',
			'PHPStan\Rules\Properties\ReadingWriteOnlyPropertiesRule',
			'PHPStan\Rules\Properties\WritingToReadOnlyPropertiesRule',
			'PHPStan\Rules\Variables\DefinedVariableRule',
		],
		'tags' => [
			'phpstan.rules.rule' => [
				34 => true,
				true,
				true,
				true,
				true,
				true,
				true,
				true,
				true,
				true,
				true,
				true,
				47 => true,
				true,
				true,
				true,
				true,
				true,
				true,
				true,
				true,
				true,
				true,
				true,
				true,
				true,
				true,
				true,
				true,
				66 => true,
				true,
				true,
				72 => true,
				true,
				true,
				true,
				true,
				true,
				true,
			],
			'phpstan.broker.propertiesClassReflectionExtension' => [71 => true],
		],
		'aliases' => [],
	];


	public function __construct(array $params = [])
	{
		$this->parameters = $params;
		$this->parameters += [
			'appDir' => 'C:\devweb\htdocs\phpstan-rules\tests',
			'wwwDir' => 'C:\devweb\htdocs\phpstan-rules\vendor\phpunit\phpunit',
			'debugMode' => true,
			'productionMode' => false,
			'consoleMode' => true,
			'tempDir' => 'C:\devweb\htdocs\phpstan-rules\tests/../tmp',
			'rootDir' => 'C:\devweb\htdocs\phpstan-rules\tests/..',
			'tmpDir' => 'C:\devweb\htdocs\phpstan-rules\tests/../tmp',
			'currentWorkingDirectory' => 'C:\devweb\htdocs\phpstan-rules\tests/..',
			'cliArgumentsVariablesRegistered' => false,
			'bootstrap' => null,
			'excludes_analyse' => [],
			'autoload_directories' => [],
			'autoload_files' => [],
			'fileExtensions' => ['php'],
			'checkFunctionArgumentTypes' => true,
			'checkArgumentsPassedByReference' => true,
			'checkNullables' => false,
			'checkUnionTypes' => false,
			'polluteScopeWithLoopInitialAssignments' => false,
			'polluteCatchScopeWithTryAssignments' => false,
			'ignoreErrors' => [],
			'reportUnmatchedIgnoredErrors' => true,
			'universalObjectCratesClasses' => ['stdClass', 'SimpleXMLElement'],
			'earlyTerminatingMethodCalls' => [],
			'memoryLimitFile' => 'C:\devweb\htdocs\phpstan-rules\tests/../tmp/.memory_limit',
			'customRulesetUsed' => false,
			'checkThisOnly' => false,
		];
	}


	public function createServiceBroker(): PHPStan\Broker\Broker
	{
		$service = $this->getService('2')->create();
		return $service;
	}


	public function createServiceCachingStorage(): Nette\Caching\Storages\FileStorage
	{
		$service = new Nette\Caching\Storages\FileStorage('C:\devweb\htdocs\phpstan-rules\tests/../tmp/cache');
		return $service;
	}


	public function createServiceContainer(): Nette\DI\Container
	{
		return $this;
	}


	public function createServiceDirectParser(): PHPStan\Parser\DirectParser
	{
		$service = new PHPStan\Parser\DirectParser($this->getService('23'), $this->getService('69'));
		return $service;
	}


	public function createServiceErrorFormatter__checkstyle(): PHPStan\Command\ErrorFormatter\CheckstyleErrorFormatter
	{
		$service = new PHPStan\Command\ErrorFormatter\CheckstyleErrorFormatter;
		return $service;
	}


	public function createServiceErrorFormatter__raw(): PHPStan\Command\ErrorFormatter\RawErrorFormatter
	{
		$service = new PHPStan\Command\ErrorFormatter\RawErrorFormatter;
		return $service;
	}


	public function createServiceErrorFormatter__table(): PHPStan\Command\ErrorFormatter\TableErrorFormatter
	{
		$service = new PHPStan\Command\ErrorFormatter\TableErrorFormatter;
		return $service;
	}


	public function createServiceRegistry(): PHPStan\Rules\Registry
	{
		$service = $this->getService('17')->create();
		return $service;
	}


	public function createService__1(): PHPStan\Analyser\TypeSpecifier
	{
		$service = new PHPStan\Analyser\TypeSpecifier($this->getService('24'));
		return $service;
	}


	public function createService__2(): PHPStan\Broker\BrokerFactory
	{
		$service = new PHPStan\Broker\BrokerFactory($this);
		return $service;
	}


	public function createService__6(): PHPStan\Parser\FunctionCallStatementFinder
	{
		$service = new PHPStan\Parser\FunctionCallStatementFinder;
		return $service;
	}


	public function createService__7(): PHPStan\Reflection\Annotations\AnnotationsMethodsClassReflectionExtension
	{
		$service = new PHPStan\Reflection\Annotations\AnnotationsMethodsClassReflectionExtension($this->getService('19'));
		return $service;
	}


	public function createService__8(): PHPStan\Reflection\Annotations\AnnotationsPropertiesClassReflectionExtension
	{
		$service = new PHPStan\Reflection\Annotations\AnnotationsPropertiesClassReflectionExtension($this->getService('19'));
		return $service;
	}


	public function createService__9(): PHPStan\Reflection\PhpDefect\PhpDefectClassReflectionExtension
	{
		$service = new PHPStan\Reflection\PhpDefect\PhpDefectClassReflectionExtension;
		return $service;
	}


	public function createService__10(): PHPStan\Reflection\Php\PhpClassReflectionExtension
	{
		$service = new PHPStan\Reflection\Php\PhpClassReflectionExtension($this->getService('16'),
			$this->getService('19'));
		return $service;
	}


	public function createService__11(): PHPStan\Rules\FunctionDefinitionCheck
	{
		$service = new PHPStan\Rules\FunctionDefinitionCheck($this->getService('broker'));
		return $service;
	}


	public function createService__12(): PHPStan\Rules\FunctionReturnTypeCheck
	{
		$service = new PHPStan\Rules\FunctionReturnTypeCheck($this->getService('24'), $this->getService('65'));
		return $service;
	}


	public function createService__13(): PHPStan\Rules\Properties\PropertyDescriptor
	{
		$service = new PHPStan\Rules\Properties\PropertyDescriptor;
		return $service;
	}


	public function createService__14(): PHPStan\Rules\Properties\PropertyReflectionFinder
	{
		$service = new PHPStan\Rules\Properties\PropertyReflectionFinder($this->getService('broker'));
		return $service;
	}


	public function createService__15(): PHPStan\Reflection\FunctionReflectionFactory
	{
		return new class ($this) implements PHPStan\Reflection\FunctionReflectionFactory {
			private $container;


			public function __construct(Container_dde900aef8 $container)
			{
				$this->container = $container;
			}


			public function create(ReflectionFunction $reflection, array $phpDocParameterTypes, PHPStan\Type\Type $phpDocReturnType = null): PHPStan\Reflection\FunctionReflection
			{
				$service = new PHPStan\Reflection\FunctionReflection($reflection, $this->container->getService('32'),
					$this->container->getService('6'), $this->container->getService('25'), $phpDocParameterTypes,
					$phpDocReturnType);
				return $service;
			}
		};
	}


	public function createService__16(): PHPStan\Reflection\Php\PhpMethodReflectionFactory
	{
		return new class ($this) implements PHPStan\Reflection\Php\PhpMethodReflectionFactory {
			private $container;


			public function __construct(Container_dde900aef8 $container)
			{
				$this->container = $container;
			}


			public function create(PHPStan\Reflection\ClassReflection $declaringClass, ReflectionMethod $reflection, array $phpDocParameterTypes, PHPStan\Type\Type $phpDocReturnType = null): PHPStan\Reflection\Php\PhpMethodReflection
			{
				$service = new PHPStan\Reflection\Php\PhpMethodReflection($declaringClass, $reflection,
					$this->container->getService('broker'), $this->container->getService('32'), $this->container->getService('6'),
					$this->container->getService('25'), $phpDocParameterTypes, $phpDocReturnType);
				return $service;
			}
		};
	}


	public function createService__17(): PHPStan\Rules\RegistryFactory
	{
		$service = new PHPStan\Rules\RegistryFactory($this);
		return $service;
	}


	public function createService__18(): PHPStan\Rules\UnusedFunctionParametersCheck
	{
		$service = new PHPStan\Rules\UnusedFunctionParametersCheck;
		return $service;
	}


	public function createService__19(): PHPStan\Type\FileTypeMapper
	{
		$service = new PHPStan\Type\FileTypeMapper($this->getService('32'), $this->getService('25'));
		return $service;
	}


	public function createService__20(): PhpParser\BuilderFactory
	{
		$service = new PhpParser\BuilderFactory;
		return $service;
	}


	public function createService__21(): PhpParser\Lexer
	{
		$service = new PhpParser\Lexer;
		return $service;
	}


	public function createService__22(): PhpParser\NodeVisitor\NameResolver
	{
		$service = new PhpParser\NodeVisitor\NameResolver;
		return $service;
	}


	public function createService__23(): PhpParser\Parser\Php7
	{
		$service = new PhpParser\Parser\Php7($this->getService('21'));
		return $service;
	}


	public function createService__24(): PhpParser\PrettyPrinter\Standard
	{
		$service = new PhpParser\PrettyPrinter\Standard;
		return $service;
	}


	public function createService__25(): Nette\Caching\Cache
	{
		$service = new Nette\Caching\Cache($this->getService('cachingStorage'), 'PHPStan');
		return $service;
	}


	public function createService__26(): PHPStan\Analyser\Analyser
	{
		$service = new PHPStan\Analyser\Analyser($this->getService('broker'), $this->getService('32'),
			$this->getService('registry'), $this->getService('27'), $this->getService('24'),
			$this->getService('1'), $this->getService('30'), $this->getService('31'),
			[], null, true);
		return $service;
	}


	public function createService__27(): PHPStan\Analyser\NodeScopeResolver
	{
		$service = new PHPStan\Analyser\NodeScopeResolver($this->getService('broker'), $this->getService('32'),
			$this->getService('24'), $this->getService('19'), $this->getService('30'),
			$this->getService('20'), $this->getService('31'), false, false, []);
		return $service;
	}


	public function createService__29(): PHPStan\Command\AnalyseApplication
	{
		$service = new PHPStan\Command\AnalyseApplication($this->getService('26'), 'C:\devweb\htdocs\phpstan-rules\tests/../tmp/.memory_limit',
			$this->getService('31'), ['php']);
		return $service;
	}


	public function createService__30(): PHPStan\File\FileExcluder
	{
		$service = new PHPStan\File\FileExcluder($this->getService('31'), []);
		return $service;
	}


	public function createService__31(): PHPStan\File\FileHelper
	{
		$service = new PHPStan\File\FileHelper('C:\devweb\htdocs\phpstan-rules\tests/..');
		return $service;
	}


	public function createService__32(): PHPStan\Parser\CachedParser
	{
		$service = new PHPStan\Parser\CachedParser($this->getService('directParser'));
		return $service;
	}


	public function createService__34(): PHPStan\Rules\Arrays\AppendedArrayItemTypeRule
	{
		$service = new PHPStan\Rules\Arrays\AppendedArrayItemTypeRule($this->getService('65'));
		return $service;
	}


	public function createService__35(): PHPStan\Rules\Arrays\DuplicateKeysInLiteralArraysRule
	{
		$service = new PHPStan\Rules\Arrays\DuplicateKeysInLiteralArraysRule($this->getService('broker'),
			$this->getService('24'));
		return $service;
	}


	public function createService__36(): PHPStan\Rules\Arrays\InvalidKeyInArrayDimFetchRule
	{
		$service = new PHPStan\Rules\Arrays\InvalidKeyInArrayDimFetchRule;
		return $service;
	}


	public function createService__37(): PHPStan\Rules\Arrays\InvalidKeyInArrayItemRule
	{
		$service = new PHPStan\Rules\Arrays\InvalidKeyInArrayItemRule;
		return $service;
	}


	public function createService__38(): PHPStan\Rules\Cast\UselessCastRule
	{
		$service = new PHPStan\Rules\Cast\UselessCastRule;
		return $service;
	}


	public function createService__39(): PHPStan\Rules\Classes\ClassConstantRule
	{
		$service = new PHPStan\Rules\Classes\ClassConstantRule($this->getService('broker'));
		return $service;
	}


	public function createService__40(): PHPStan\Rules\Classes\ExistingClassInInstanceOfRule
	{
		$service = new PHPStan\Rules\Classes\ExistingClassInInstanceOfRule($this->getService('broker'));
		return $service;
	}


	public function createService__41(): PHPStan\Rules\Classes\InstantiationRule
	{
		$service = new PHPStan\Rules\Classes\InstantiationRule($this->getService('broker'),
			$this->getService('46'));
		return $service;
	}


	public function createService__42(): PHPStan\Rules\Classes\RequireParentConstructCallRule
	{
		$service = new PHPStan\Rules\Classes\RequireParentConstructCallRule;
		return $service;
	}


	public function createService__43(): PHPStan\Rules\Classes\UnusedConstructorParametersRule
	{
		$service = new PHPStan\Rules\Classes\UnusedConstructorParametersRule($this->getService('18'));
		return $service;
	}


	public function createService__44(): PHPStan\Rules\Constants\ConstantRule
	{
		$service = new PHPStan\Rules\Constants\ConstantRule($this->getService('broker'));
		return $service;
	}


	public function createService__45(): PHPStan\Rules\Exceptions\CaughtExceptionExistenceRule
	{
		$service = new PHPStan\Rules\Exceptions\CaughtExceptionExistenceRule($this->getService('broker'));
		return $service;
	}


	public function createService__46(): PHPStan\Rules\FunctionCallParametersCheck
	{
		$service = new PHPStan\Rules\FunctionCallParametersCheck($this->getService('broker'),
			$this->getService('65'), true, true);
		return $service;
	}


	public function createService__47(): PHPStan\Rules\Functions\CallToCountOnlyWithArrayOrCountableRule
	{
		$service = new PHPStan\Rules\Functions\CallToCountOnlyWithArrayOrCountableRule($this->getService('65'));
		return $service;
	}


	public function createService__48(): PHPStan\Rules\Functions\CallToFunctionParametersRule
	{
		$service = new PHPStan\Rules\Functions\CallToFunctionParametersRule($this->getService('broker'),
			$this->getService('46'));
		return $service;
	}


	public function createService__49(): PHPStan\Rules\Functions\CallToNonExistentFunctionRule
	{
		$service = new PHPStan\Rules\Functions\CallToNonExistentFunctionRule($this->getService('broker'));
		return $service;
	}


	public function createService__50(): PHPStan\Rules\Functions\ClosureReturnTypeRule
	{
		$service = new PHPStan\Rules\Functions\ClosureReturnTypeRule($this->getService('12'));
		return $service;
	}


	public function createService__51(): PHPStan\Rules\Functions\ExistingClassesInClosureTypehintsRule
	{
		$service = new PHPStan\Rules\Functions\ExistingClassesInClosureTypehintsRule($this->getService('11'));
		return $service;
	}


	public function createService__52(): PHPStan\Rules\Functions\ExistingClassesInTypehintsRule
	{
		$service = new PHPStan\Rules\Functions\ExistingClassesInTypehintsRule($this->getService('11'));
		return $service;
	}


	public function createService__53(): PHPStan\Rules\Functions\InnerFunctionRule
	{
		$service = new PHPStan\Rules\Functions\InnerFunctionRule;
		return $service;
	}


	public function createService__54(): PHPStan\Rules\Functions\NonExistentDefinedFunctionRule
	{
		$service = new PHPStan\Rules\Functions\NonExistentDefinedFunctionRule($this->getService('broker'));
		return $service;
	}


	public function createService__55(): PHPStan\Rules\Functions\PrintfParametersRule
	{
		$service = new PHPStan\Rules\Functions\PrintfParametersRule;
		return $service;
	}


	public function createService__56(): PHPStan\Rules\Functions\ReturnTypeRule
	{
		$service = new PHPStan\Rules\Functions\ReturnTypeRule($this->getService('12'));
		return $service;
	}


	public function createService__57(): PHPStan\Rules\Functions\UnusedClosureUsesRule
	{
		$service = new PHPStan\Rules\Functions\UnusedClosureUsesRule($this->getService('18'));
		return $service;
	}


	public function createService__58(): PHPStan\Rules\Methods\ExistingClassesInTypehintsRule
	{
		$service = new PHPStan\Rules\Methods\ExistingClassesInTypehintsRule($this->getService('11'));
		return $service;
	}


	public function createService__59(): PHPStan\Rules\Methods\ReturnTypeRule
	{
		$service = new PHPStan\Rules\Methods\ReturnTypeRule($this->getService('12'));
		return $service;
	}


	public function createService__60(): PHPStan\Rules\Properties\AccessStaticPropertiesRule
	{
		$service = new PHPStan\Rules\Properties\AccessStaticPropertiesRule($this->getService('broker'));
		return $service;
	}


	public function createService__61(): PHPStan\Rules\Properties\DefaultValueTypesAssignedToPropertiesRule
	{
		$service = new PHPStan\Rules\Properties\DefaultValueTypesAssignedToPropertiesRule($this->getService('65'));
		return $service;
	}


	public function createService__62(): PHPStan\Rules\Properties\ExistingClassesInPropertiesRule
	{
		$service = new PHPStan\Rules\Properties\ExistingClassesInPropertiesRule($this->getService('broker'));
		return $service;
	}


	public function createService__63(): PHPStan\Rules\Properties\TypesAssignedToPropertiesRule
	{
		$service = new PHPStan\Rules\Properties\TypesAssignedToPropertiesRule($this->getService('65'),
			$this->getService('13'), $this->getService('14'));
		return $service;
	}


	public function createService__65(): PHPStan\Rules\RuleLevelHelper
	{
		$service = new PHPStan\Rules\RuleLevelHelper(false);
		return $service;
	}


	public function createService__66(): PHPStan\Rules\Variables\DefinedVariableInAnonymousFunctionUseRule
	{
		$service = new PHPStan\Rules\Variables\DefinedVariableInAnonymousFunctionUseRule;
		return $service;
	}


	public function createService__67(): PHPStan\Rules\Variables\ThisVariableRule
	{
		$service = new PHPStan\Rules\Variables\ThisVariableRule;
		return $service;
	}


	public function createService__68(): PHPStan\Rules\Variables\VariableCloningRule
	{
		$service = new PHPStan\Rules\Variables\VariableCloningRule;
		return $service;
	}


	public function createService__69(): PhpParser\NodeTraverser
	{
		$service = new PhpParser\NodeTraverser;
		$service->addVisitor($this->getService('22'));
		return $service;
	}


	public function createService__71(): PHPStan\Reflection\Php\UniversalObjectCratesClassReflectionExtension
	{
		$service = new PHPStan\Reflection\Php\UniversalObjectCratesClassReflectionExtension(['stdClass', 'SimpleXMLElement']);
		return $service;
	}


	public function createService__72(): PHPStan\Rules\Comparison\StrictComparisonOfDifferentTypesRule
	{
		$service = new PHPStan\Rules\Comparison\StrictComparisonOfDifferentTypesRule($this->getService('65'),
			false);
		return $service;
	}


	public function createService__73(): PHPStan\Rules\Methods\CallMethodsRule
	{
		$service = new PHPStan\Rules\Methods\CallMethodsRule($this->getService('broker'), $this->getService('46'),
			$this->getService('65'), false);
		return $service;
	}


	public function createService__74(): PHPStan\Rules\Methods\CallStaticMethodsRule
	{
		$service = new PHPStan\Rules\Methods\CallStaticMethodsRule($this->getService('broker'),
			$this->getService('46'), false);
		return $service;
	}


	public function createService__75(): PHPStan\Rules\Properties\AccessPropertiesRule
	{
		$service = new PHPStan\Rules\Properties\AccessPropertiesRule($this->getService('broker'),
			$this->getService('65'), false);
		return $service;
	}


	public function createService__76(): PHPStan\Rules\Properties\ReadingWriteOnlyPropertiesRule
	{
		$service = new PHPStan\Rules\Properties\ReadingWriteOnlyPropertiesRule($this->getService('13'),
			$this->getService('14'), $this->getService('65'), false);
		return $service;
	}


	public function createService__77(): PHPStan\Rules\Properties\WritingToReadOnlyPropertiesRule
	{
		$service = new PHPStan\Rules\Properties\WritingToReadOnlyPropertiesRule($this->getService('65'),
			$this->getService('13'), $this->getService('14'), false);
		return $service;
	}


	public function createService__78(): PHPStan\Rules\Variables\DefinedVariableRule
	{
		$service = new PHPStan\Rules\Variables\DefinedVariableRule(false);
		return $service;
	}


	public function initialize()
	{
	}
}

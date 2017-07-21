<?php
// source: C:\devweb\htdocs\phpstan-rules\tests/../vendor/phpstan/phpstan/conf/config.neon 
// source: C:\devweb\htdocs\phpstan-rules\tests/../vendor/phpstan/phpstan/conf/config.level5.neon 

class Container_dde900aef8 extends Nette\DI\Container
{
	protected $meta = [
		'types' => [
			'PHPStan\Analyser\TypeSpecifier' => [1 => ['1']],
			'PHPStan\Broker\BrokerFactory' => [1 => ['2']],
			'PHPStan\Command\ErrorFormatter\ErrorFormatter' => [1 => ['errorFormatter.raw', 'errorFormatter.table']],
			'PHPStan\Command\ErrorFormatter\RawErrorFormatter' => [1 => ['errorFormatter.raw']],
			'PHPStan\Command\ErrorFormatter\TableErrorFormatter' => [1 => ['errorFormatter.table']],
			'PHPStan\Parser\FunctionCallStatementFinder' => [1 => ['5']],
			'PHPStan\Reflection\Php\PhpMethodReflectionFactory' => [1 => ['6']],
			'PHPStan\Reflection\MethodsClassReflectionExtension' => [1 => ['7', '10']],
			'PHPStan\Reflection\Annotations\AnnotationsMethodsClassReflectionExtension' => [1 => ['7']],
			'PHPStan\Reflection\PropertiesClassReflectionExtension' => [1 => ['8', '9', '10', '66']],
			'PHPStan\Reflection\Annotations\AnnotationsPropertiesClassReflectionExtension' => [1 => ['8']],
			'PHPStan\Reflection\PhpDefect\PhpDefectClassReflectionExtension' => [1 => ['9']],
			'PHPStan\Reflection\BrokerAwareClassReflectionExtension' => [1 => ['10']],
			'PHPStan\Reflection\Php\PhpClassReflectionExtension' => [1 => ['10']],
			'PHPStan\Rules\FunctionDefinitionCheck' => [1 => ['11']],
			'PHPStan\Rules\FunctionReturnTypeCheck' => [1 => ['12']],
			'PHPStan\Rules\RegistryFactory' => [1 => ['13']],
			'PHPStan\Reflection\FunctionReflectionFactory' => [1 => ['14']],
			'PHPStan\Rules\UnusedFunctionParametersCheck' => [1 => ['15']],
			'PHPStan\Type\FileTypeMapper' => [1 => ['16']],
			'PhpParser\BuilderFactory' => [1 => ['17']],
			'PhpParser\Lexer' => [1 => ['18']],
			'PhpParser\NodeVisitorAbstract' => [1 => ['19']],
			'PhpParser\NodeVisitor' => [1 => ['19']],
			'PhpParser\NodeVisitor\NameResolver' => [1 => ['19']],
			'PhpParser\ParserAbstract' => [1 => ['20']],
			'PhpParser\Parser' => [1 => ['20']],
			'PhpParser\Parser\Php7' => [1 => ['20']],
			'PhpParser\PrettyPrinterAbstract' => [1 => ['21']],
			'PhpParser\PrettyPrinter\Standard' => [1 => ['21']],
			'Nette\Caching\Cache' => [1 => ['22']],
			'PHPStan\Analyser\Analyser' => [1 => ['23']],
			'PHPStan\Analyser\NodeScopeResolver' => [1 => ['24']],
			'PHPStan\Broker\Broker' => [1 => ['broker']],
			'PHPStan\Command\AnalyseApplication' => [1 => ['26']],
			'PHPStan\File\FileExcluder' => [1 => ['27']],
			'PHPStan\File\FileHelper' => [1 => ['28']],
			'PHPStan\Parser\Parser' => [1 => ['29'], 0 => ['directParser']],
			'PHPStan\Parser\CachedParser' => [1 => ['29']],
			'PHPStan\Parser\DirectParser' => [['directParser']],
			'PHPStan\Rules\Rule' => [
				1 => [
					'31',
					'32',
					'33',
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
					'45',
					'46',
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
					'61',
					'62',
					'63',
					'67',
					'68',
					'69',
					'70',
				],
			],
			'PHPStan\Rules\Arrays\AppendedArrayItemTypeRule' => [1 => ['31']],
			'PHPStan\Rules\Cast\UselessCastRule' => [1 => ['32']],
			'PHPStan\Rules\Classes\AccessStaticPropertiesRule' => [1 => ['33']],
			'PHPStan\Rules\Classes\ClassConstantRule' => [1 => ['34']],
			'PHPStan\Rules\Classes\DefaultValueTypesAssignedToPropertiesRule' => [1 => ['35']],
			'PHPStan\Rules\Classes\ExistingClassInInstanceOfRule' => [1 => ['36']],
			'PHPStan\Rules\Classes\ExistingClassesInPropertiesRule' => [1 => ['37']],
			'PHPStan\Rules\Classes\InstantiationRule' => [1 => ['38']],
			'PHPStan\Rules\Classes\RequireParentConstructCallRule' => [1 => ['39']],
			'PHPStan\Rules\Classes\TypesAssignedToPropertiesRule' => [1 => ['40']],
			'PHPStan\Rules\Classes\UnusedConstructorParametersRule' => [1 => ['41']],
			'PHPStan\Rules\Constants\ConstantRule' => [1 => ['42']],
			'PHPStan\Rules\Exceptions\CatchedExceptionExistenceRule' => [1 => ['43']],
			'PHPStan\Rules\FunctionCallParametersCheck' => [1 => ['44']],
			'PHPStan\Rules\Functions\CallToCountOnlyWithArrayOrCountableRule' => [1 => ['45']],
			'PHPStan\Rules\Functions\CallToFunctionParametersRule' => [1 => ['46']],
			'PHPStan\Rules\Functions\CallToNonExistentFunctionRule' => [1 => ['47']],
			'PHPStan\Rules\Functions\ClosureReturnTypeRule' => [1 => ['48']],
			'PHPStan\Rules\Functions\ExistingClassesInClosureTypehintsRule' => [1 => ['49']],
			'PHPStan\Rules\Functions\ExistingClassesInTypehintsRule' => [1 => ['50']],
			'PHPStan\Rules\Functions\InnerFunctionRule' => [1 => ['51']],
			'PHPStan\Rules\Functions\NonExistentDefinedFunctionRule' => [1 => ['52']],
			'PHPStan\Rules\Functions\PrintfParametersRule' => [1 => ['53']],
			'PHPStan\Rules\Functions\ReturnTypeRule' => [1 => ['54']],
			'PHPStan\Rules\Functions\UnusedClosureUsesRule' => [1 => ['55']],
			'PHPStan\Rules\Methods\CallStaticMethodsRule' => [1 => ['56']],
			'PHPStan\Rules\Methods\ExistingClassesInTypehintsRule' => [1 => ['57']],
			'PHPStan\Rules\Methods\ReturnTypeRule' => [1 => ['58']],
			'PHPStan\Rules\Registry' => [1 => ['registry']],
			'PHPStan\Rules\RuleLevelHelper' => [1 => ['60']],
			'PHPStan\Rules\Variables\DefinedVariableInAnonymousFunctionUseRule' => [1 => ['61']],
			'PHPStan\Rules\Variables\ThisVariableRule' => [1 => ['62']],
			'PHPStan\Rules\Variables\VariableCloningRule' => [1 => ['63']],
			'PhpParser\NodeTraverserInterface' => [1 => ['64']],
			'PhpParser\NodeTraverser' => [1 => ['64']],
			'Nette\Caching\IStorage' => [['cachingStorage']],
			'Nette\Caching\Storages\FileStorage' => [['cachingStorage']],
			'PHPStan\Reflection\Php\UniversalObjectCratesClassReflectionExtension' => [1 => ['66']],
			'PHPStan\Rules\Classes\AccessPropertiesRule' => [1 => ['67']],
			'PHPStan\Rules\Comparison\StrictComparisonOfDifferentTypesRule' => [1 => ['68']],
			'PHPStan\Rules\Methods\CallMethodsRule' => [1 => ['69']],
			'PHPStan\Rules\Variables\DefinedVariableRule' => [1 => ['70']],
			'Nette\DI\Container' => [1 => ['container']],
		],
		'services' => [
			'broker' => 'PHPStan\Broker\Broker',
			'cachingStorage' => 'Nette\Caching\Storages\FileStorage',
			'container' => 'Nette\DI\Container',
			'directParser' => 'PHPStan\Parser\DirectParser',
			'errorFormatter.raw' => 'PHPStan\Command\ErrorFormatter\RawErrorFormatter',
			'errorFormatter.table' => 'PHPStan\Command\ErrorFormatter\TableErrorFormatter',
			'registry' => 'PHPStan\Rules\Registry',
			1 => 'PHPStan\Analyser\TypeSpecifier',
			'PHPStan\Broker\BrokerFactory',
			5 => 'PHPStan\Parser\FunctionCallStatementFinder',
			'PHPStan\Reflection\Php\PhpMethodReflection',
			'PHPStan\Reflection\Annotations\AnnotationsMethodsClassReflectionExtension',
			'PHPStan\Reflection\Annotations\AnnotationsPropertiesClassReflectionExtension',
			'PHPStan\Reflection\PhpDefect\PhpDefectClassReflectionExtension',
			'PHPStan\Reflection\Php\PhpClassReflectionExtension',
			'PHPStan\Rules\FunctionDefinitionCheck',
			'PHPStan\Rules\FunctionReturnTypeCheck',
			'PHPStan\Rules\RegistryFactory',
			'PHPStan\Reflection\FunctionReflection',
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
			26 => 'PHPStan\Command\AnalyseApplication',
			'PHPStan\File\FileExcluder',
			'PHPStan\File\FileHelper',
			'PHPStan\Parser\CachedParser',
			31 => 'PHPStan\Rules\Arrays\AppendedArrayItemTypeRule',
			'PHPStan\Rules\Cast\UselessCastRule',
			'PHPStan\Rules\Classes\AccessStaticPropertiesRule',
			'PHPStan\Rules\Classes\ClassConstantRule',
			'PHPStan\Rules\Classes\DefaultValueTypesAssignedToPropertiesRule',
			'PHPStan\Rules\Classes\ExistingClassInInstanceOfRule',
			'PHPStan\Rules\Classes\ExistingClassesInPropertiesRule',
			'PHPStan\Rules\Classes\InstantiationRule',
			'PHPStan\Rules\Classes\RequireParentConstructCallRule',
			'PHPStan\Rules\Classes\TypesAssignedToPropertiesRule',
			'PHPStan\Rules\Classes\UnusedConstructorParametersRule',
			'PHPStan\Rules\Constants\ConstantRule',
			'PHPStan\Rules\Exceptions\CatchedExceptionExistenceRule',
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
			'PHPStan\Rules\Methods\CallStaticMethodsRule',
			'PHPStan\Rules\Methods\ExistingClassesInTypehintsRule',
			'PHPStan\Rules\Methods\ReturnTypeRule',
			60 => 'PHPStan\Rules\RuleLevelHelper',
			'PHPStan\Rules\Variables\DefinedVariableInAnonymousFunctionUseRule',
			'PHPStan\Rules\Variables\ThisVariableRule',
			'PHPStan\Rules\Variables\VariableCloningRule',
			'PhpParser\NodeTraverser',
			66 => 'PHPStan\Reflection\Php\UniversalObjectCratesClassReflectionExtension',
			'PHPStan\Rules\Classes\AccessPropertiesRule',
			'PHPStan\Rules\Comparison\StrictComparisonOfDifferentTypesRule',
			'PHPStan\Rules\Methods\CallMethodsRule',
			'PHPStan\Rules\Variables\DefinedVariableRule',
		],
		'tags' => [
			'phpstan.rules.rule' => [
				31 => true,
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
				45 => true,
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
				61 => true,
				true,
				true,
				67 => true,
				true,
				true,
				true,
			],
			'phpstan.broker.propertiesClassReflectionExtension' => [66 => true],
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
		$service = new PHPStan\Parser\DirectParser($this->getService('20'), $this->getService('64'));
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
		$service = $this->getService('13')->create();
		return $service;
	}


	public function createService__1(): PHPStan\Analyser\TypeSpecifier
	{
		$service = new PHPStan\Analyser\TypeSpecifier($this->getService('21'));
		return $service;
	}


	public function createService__2(): PHPStan\Broker\BrokerFactory
	{
		$service = new PHPStan\Broker\BrokerFactory($this);
		return $service;
	}


	public function createService__5(): PHPStan\Parser\FunctionCallStatementFinder
	{
		$service = new PHPStan\Parser\FunctionCallStatementFinder;
		return $service;
	}


	public function createService__6(): PHPStan\Reflection\Php\PhpMethodReflectionFactory
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
					$this->container->getService('broker'), $this->container->getService('29'), $this->container->getService('5'),
					$this->container->getService('22'), $phpDocParameterTypes, $phpDocReturnType);
				return $service;
			}
		};
	}


	public function createService__7(): PHPStan\Reflection\Annotations\AnnotationsMethodsClassReflectionExtension
	{
		$service = new PHPStan\Reflection\Annotations\AnnotationsMethodsClassReflectionExtension($this->getService('16'));
		return $service;
	}


	public function createService__8(): PHPStan\Reflection\Annotations\AnnotationsPropertiesClassReflectionExtension
	{
		$service = new PHPStan\Reflection\Annotations\AnnotationsPropertiesClassReflectionExtension($this->getService('16'));
		return $service;
	}


	public function createService__9(): PHPStan\Reflection\PhpDefect\PhpDefectClassReflectionExtension
	{
		$service = new PHPStan\Reflection\PhpDefect\PhpDefectClassReflectionExtension;
		return $service;
	}


	public function createService__10(): PHPStan\Reflection\Php\PhpClassReflectionExtension
	{
		$service = new PHPStan\Reflection\Php\PhpClassReflectionExtension($this->getService('6'),
			$this->getService('16'));
		return $service;
	}


	public function createService__11(): PHPStan\Rules\FunctionDefinitionCheck
	{
		$service = new PHPStan\Rules\FunctionDefinitionCheck($this->getService('broker'));
		return $service;
	}


	public function createService__12(): PHPStan\Rules\FunctionReturnTypeCheck
	{
		$service = new PHPStan\Rules\FunctionReturnTypeCheck($this->getService('21'), $this->getService('60'));
		return $service;
	}


	public function createService__13(): PHPStan\Rules\RegistryFactory
	{
		$service = new PHPStan\Rules\RegistryFactory($this);
		return $service;
	}


	public function createService__14(): PHPStan\Reflection\FunctionReflectionFactory
	{
		return new class ($this) implements PHPStan\Reflection\FunctionReflectionFactory {
			private $container;


			public function __construct(Container_dde900aef8 $container)
			{
				$this->container = $container;
			}


			public function create(ReflectionFunction $reflection, array $phpDocParameterTypes, PHPStan\Type\Type $phpDocReturnType = null): PHPStan\Reflection\FunctionReflection
			{
				$service = new PHPStan\Reflection\FunctionReflection($reflection, $this->container->getService('29'),
					$this->container->getService('5'), $this->container->getService('22'), $phpDocParameterTypes,
					$phpDocReturnType);
				return $service;
			}
		};
	}


	public function createService__15(): PHPStan\Rules\UnusedFunctionParametersCheck
	{
		$service = new PHPStan\Rules\UnusedFunctionParametersCheck;
		return $service;
	}


	public function createService__16(): PHPStan\Type\FileTypeMapper
	{
		$service = new PHPStan\Type\FileTypeMapper($this->getService('29'), $this->getService('22'));
		return $service;
	}


	public function createService__17(): PhpParser\BuilderFactory
	{
		$service = new PhpParser\BuilderFactory;
		return $service;
	}


	public function createService__18(): PhpParser\Lexer
	{
		$service = new PhpParser\Lexer;
		return $service;
	}


	public function createService__19(): PhpParser\NodeVisitor\NameResolver
	{
		$service = new PhpParser\NodeVisitor\NameResolver;
		return $service;
	}


	public function createService__20(): PhpParser\Parser\Php7
	{
		$service = new PhpParser\Parser\Php7($this->getService('18'));
		return $service;
	}


	public function createService__21(): PhpParser\PrettyPrinter\Standard
	{
		$service = new PhpParser\PrettyPrinter\Standard;
		return $service;
	}


	public function createService__22(): Nette\Caching\Cache
	{
		$service = new Nette\Caching\Cache($this->getService('cachingStorage'), 'PHPStan');
		return $service;
	}


	public function createService__23(): PHPStan\Analyser\Analyser
	{
		$service = new PHPStan\Analyser\Analyser($this->getService('broker'), $this->getService('29'),
			$this->getService('registry'), $this->getService('24'), $this->getService('21'),
			$this->getService('1'), $this->getService('27'), $this->getService('28'),
			[], null, true);
		return $service;
	}


	public function createService__24(): PHPStan\Analyser\NodeScopeResolver
	{
		$service = new PHPStan\Analyser\NodeScopeResolver($this->getService('broker'), $this->getService('29'),
			$this->getService('21'), $this->getService('16'), $this->getService('27'),
			$this->getService('17'), $this->getService('28'), false, false, []);
		return $service;
	}


	public function createService__26(): PHPStan\Command\AnalyseApplication
	{
		$service = new PHPStan\Command\AnalyseApplication($this->getService('23'), 'C:\devweb\htdocs\phpstan-rules\tests/../tmp/.memory_limit',
			$this->getService('28'), ['php']);
		return $service;
	}


	public function createService__27(): PHPStan\File\FileExcluder
	{
		$service = new PHPStan\File\FileExcluder($this->getService('28'), []);
		return $service;
	}


	public function createService__28(): PHPStan\File\FileHelper
	{
		$service = new PHPStan\File\FileHelper('C:\devweb\htdocs\phpstan-rules\tests/..');
		return $service;
	}


	public function createService__29(): PHPStan\Parser\CachedParser
	{
		$service = new PHPStan\Parser\CachedParser($this->getService('directParser'));
		return $service;
	}


	public function createService__31(): PHPStan\Rules\Arrays\AppendedArrayItemTypeRule
	{
		$service = new PHPStan\Rules\Arrays\AppendedArrayItemTypeRule($this->getService('60'));
		return $service;
	}


	public function createService__32(): PHPStan\Rules\Cast\UselessCastRule
	{
		$service = new PHPStan\Rules\Cast\UselessCastRule;
		return $service;
	}


	public function createService__33(): PHPStan\Rules\Classes\AccessStaticPropertiesRule
	{
		$service = new PHPStan\Rules\Classes\AccessStaticPropertiesRule($this->getService('broker'));
		return $service;
	}


	public function createService__34(): PHPStan\Rules\Classes\ClassConstantRule
	{
		$service = new PHPStan\Rules\Classes\ClassConstantRule($this->getService('broker'));
		return $service;
	}


	public function createService__35(): PHPStan\Rules\Classes\DefaultValueTypesAssignedToPropertiesRule
	{
		$service = new PHPStan\Rules\Classes\DefaultValueTypesAssignedToPropertiesRule($this->getService('60'));
		return $service;
	}


	public function createService__36(): PHPStan\Rules\Classes\ExistingClassInInstanceOfRule
	{
		$service = new PHPStan\Rules\Classes\ExistingClassInInstanceOfRule($this->getService('broker'));
		return $service;
	}


	public function createService__37(): PHPStan\Rules\Classes\ExistingClassesInPropertiesRule
	{
		$service = new PHPStan\Rules\Classes\ExistingClassesInPropertiesRule($this->getService('broker'));
		return $service;
	}


	public function createService__38(): PHPStan\Rules\Classes\InstantiationRule
	{
		$service = new PHPStan\Rules\Classes\InstantiationRule($this->getService('broker'),
			$this->getService('44'));
		return $service;
	}


	public function createService__39(): PHPStan\Rules\Classes\RequireParentConstructCallRule
	{
		$service = new PHPStan\Rules\Classes\RequireParentConstructCallRule;
		return $service;
	}


	public function createService__40(): PHPStan\Rules\Classes\TypesAssignedToPropertiesRule
	{
		$service = new PHPStan\Rules\Classes\TypesAssignedToPropertiesRule($this->getService('broker'),
			$this->getService('60'));
		return $service;
	}


	public function createService__41(): PHPStan\Rules\Classes\UnusedConstructorParametersRule
	{
		$service = new PHPStan\Rules\Classes\UnusedConstructorParametersRule($this->getService('15'));
		return $service;
	}


	public function createService__42(): PHPStan\Rules\Constants\ConstantRule
	{
		$service = new PHPStan\Rules\Constants\ConstantRule($this->getService('broker'));
		return $service;
	}


	public function createService__43(): PHPStan\Rules\Exceptions\CatchedExceptionExistenceRule
	{
		$service = new PHPStan\Rules\Exceptions\CatchedExceptionExistenceRule($this->getService('broker'));
		return $service;
	}


	public function createService__44(): PHPStan\Rules\FunctionCallParametersCheck
	{
		$service = new PHPStan\Rules\FunctionCallParametersCheck($this->getService('broker'),
			$this->getService('60'), true);
		return $service;
	}


	public function createService__45(): PHPStan\Rules\Functions\CallToCountOnlyWithArrayOrCountableRule
	{
		$service = new PHPStan\Rules\Functions\CallToCountOnlyWithArrayOrCountableRule($this->getService('60'));
		return $service;
	}


	public function createService__46(): PHPStan\Rules\Functions\CallToFunctionParametersRule
	{
		$service = new PHPStan\Rules\Functions\CallToFunctionParametersRule($this->getService('broker'),
			$this->getService('44'));
		return $service;
	}


	public function createService__47(): PHPStan\Rules\Functions\CallToNonExistentFunctionRule
	{
		$service = new PHPStan\Rules\Functions\CallToNonExistentFunctionRule($this->getService('broker'));
		return $service;
	}


	public function createService__48(): PHPStan\Rules\Functions\ClosureReturnTypeRule
	{
		$service = new PHPStan\Rules\Functions\ClosureReturnTypeRule($this->getService('12'));
		return $service;
	}


	public function createService__49(): PHPStan\Rules\Functions\ExistingClassesInClosureTypehintsRule
	{
		$service = new PHPStan\Rules\Functions\ExistingClassesInClosureTypehintsRule($this->getService('11'));
		return $service;
	}


	public function createService__50(): PHPStan\Rules\Functions\ExistingClassesInTypehintsRule
	{
		$service = new PHPStan\Rules\Functions\ExistingClassesInTypehintsRule($this->getService('11'));
		return $service;
	}


	public function createService__51(): PHPStan\Rules\Functions\InnerFunctionRule
	{
		$service = new PHPStan\Rules\Functions\InnerFunctionRule;
		return $service;
	}


	public function createService__52(): PHPStan\Rules\Functions\NonExistentDefinedFunctionRule
	{
		$service = new PHPStan\Rules\Functions\NonExistentDefinedFunctionRule($this->getService('broker'));
		return $service;
	}


	public function createService__53(): PHPStan\Rules\Functions\PrintfParametersRule
	{
		$service = new PHPStan\Rules\Functions\PrintfParametersRule;
		return $service;
	}


	public function createService__54(): PHPStan\Rules\Functions\ReturnTypeRule
	{
		$service = new PHPStan\Rules\Functions\ReturnTypeRule($this->getService('12'));
		return $service;
	}


	public function createService__55(): PHPStan\Rules\Functions\UnusedClosureUsesRule
	{
		$service = new PHPStan\Rules\Functions\UnusedClosureUsesRule($this->getService('15'));
		return $service;
	}


	public function createService__56(): PHPStan\Rules\Methods\CallStaticMethodsRule
	{
		$service = new PHPStan\Rules\Methods\CallStaticMethodsRule($this->getService('broker'),
			$this->getService('44'));
		return $service;
	}


	public function createService__57(): PHPStan\Rules\Methods\ExistingClassesInTypehintsRule
	{
		$service = new PHPStan\Rules\Methods\ExistingClassesInTypehintsRule($this->getService('11'));
		return $service;
	}


	public function createService__58(): PHPStan\Rules\Methods\ReturnTypeRule
	{
		$service = new PHPStan\Rules\Methods\ReturnTypeRule($this->getService('12'));
		return $service;
	}


	public function createService__60(): PHPStan\Rules\RuleLevelHelper
	{
		$service = new PHPStan\Rules\RuleLevelHelper(false);
		return $service;
	}


	public function createService__61(): PHPStan\Rules\Variables\DefinedVariableInAnonymousFunctionUseRule
	{
		$service = new PHPStan\Rules\Variables\DefinedVariableInAnonymousFunctionUseRule;
		return $service;
	}


	public function createService__62(): PHPStan\Rules\Variables\ThisVariableRule
	{
		$service = new PHPStan\Rules\Variables\ThisVariableRule;
		return $service;
	}


	public function createService__63(): PHPStan\Rules\Variables\VariableCloningRule
	{
		$service = new PHPStan\Rules\Variables\VariableCloningRule;
		return $service;
	}


	public function createService__64(): PhpParser\NodeTraverser
	{
		$service = new PhpParser\NodeTraverser;
		$service->addVisitor($this->getService('19'));
		return $service;
	}


	public function createService__66(): PHPStan\Reflection\Php\UniversalObjectCratesClassReflectionExtension
	{
		$service = new PHPStan\Reflection\Php\UniversalObjectCratesClassReflectionExtension(['stdClass', 'SimpleXMLElement']);
		return $service;
	}


	public function createService__67(): PHPStan\Rules\Classes\AccessPropertiesRule
	{
		$service = new PHPStan\Rules\Classes\AccessPropertiesRule($this->getService('broker'),
			$this->getService('60'), false);
		return $service;
	}


	public function createService__68(): PHPStan\Rules\Comparison\StrictComparisonOfDifferentTypesRule
	{
		$service = new PHPStan\Rules\Comparison\StrictComparisonOfDifferentTypesRule($this->getService('60'),
			false);
		return $service;
	}


	public function createService__69(): PHPStan\Rules\Methods\CallMethodsRule
	{
		$service = new PHPStan\Rules\Methods\CallMethodsRule($this->getService('broker'), $this->getService('44'),
			$this->getService('60'), false);
		return $service;
	}


	public function createService__70(): PHPStan\Rules\Variables\DefinedVariableRule
	{
		$service = new PHPStan\Rules\Variables\DefinedVariableRule(false);
		return $service;
	}


	public function initialize()
	{
	}
}

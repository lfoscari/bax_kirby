<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit86e7da02559e0884b31bb2accff8311d
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'Z' => 
        array (
            'ZendDiagnostics\\' => 16,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Contracts\\' => 18,
            'Symfony\\Component\\Console\\' => 26,
            'SensioLabs\\Security\\' => 20,
        ),
        'K' => 
        array (
            'Kirby\\' => 6,
        ),
        'C' => 
        array (
            'Composer\\CaBundle\\' => 18,
        ),
        'B' => 
        array (
            'Bnomei\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ZendDiagnostics\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zenddiagnostics/src',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Contracts\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/contracts',
        ),
        'Symfony\\Component\\Console\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/console',
        ),
        'SensioLabs\\Security\\' => 
        array (
            0 => __DIR__ . '/..' . '/sensiolabs/security-checker/SensioLabs/Security',
        ),
        'Kirby\\' => 
        array (
            0 => __DIR__ . '/..' . '/getkirby/composer-installer/src',
        ),
        'Composer\\CaBundle\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/ca-bundle/src',
        ),
        'Bnomei\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
    );

    public static $classMap = array (
        'Bnomei\\CheckComposerSecurity' => __DIR__ . '/../..' . '/classes/CheckComposerSecurity.php',
        'Bnomei\\CheckGitFolder' => __DIR__ . '/../..' . '/classes/CheckGitFolder.php',
        'Bnomei\\CheckHtaccess' => __DIR__ . '/../..' . '/classes/CheckHtaccess.php',
        'Bnomei\\CheckKirbyAccount' => __DIR__ . '/../..' . '/classes/CheckKirbyAccount.php',
        'Bnomei\\CheckKirbyCacheSize' => __DIR__ . '/../..' . '/classes/CheckKirbyCacheSize.php',
        'Bnomei\\CheckKirbyLicense' => __DIR__ . '/../..' . '/classes/CheckKirbyLicense.php',
        'Bnomei\\CheckKirbyMediaSize' => __DIR__ . '/../..' . '/classes/CheckKirbyMediaSize.php',
        'Bnomei\\CheckKirbySystem' => __DIR__ . '/../..' . '/classes/CheckKirbySystem.php',
        'Bnomei\\CheckKirbyVersion' => __DIR__ . '/../..' . '/classes/CheckKirbyVersion.php',
        'Bnomei\\CheckSSL' => __DIR__ . '/../..' . '/classes/CheckSSL.php',
        'Bnomei\\Doctor' => __DIR__ . '/../..' . '/classes/Doctor.php',
        'Bnomei\\DoctorInterface' => __DIR__ . '/../..' . '/classes/DoctorInterface.php',
        'Bnomei\\DoctorReporter' => __DIR__ . '/../..' . '/classes/DoctorReporter.php',
        'Composer\\CaBundle\\CaBundle' => __DIR__ . '/..' . '/composer/ca-bundle/src/CaBundle.php',
        'Kirby\\ComposerInstaller\\CmsInstaller' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/CmsInstaller.php',
        'Kirby\\ComposerInstaller\\Installer' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/Installer.php',
        'Kirby\\ComposerInstaller\\Plugin' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/Plugin.php',
        'Kirby\\ComposerInstaller\\PluginInstaller' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/PluginInstaller.php',
        'SensioLabs\\Security\\Command\\SecurityCheckerCommand' => __DIR__ . '/..' . '/sensiolabs/security-checker/SensioLabs/Security/Command/SecurityCheckerCommand.php',
        'SensioLabs\\Security\\Crawler' => __DIR__ . '/..' . '/sensiolabs/security-checker/SensioLabs/Security/Crawler.php',
        'SensioLabs\\Security\\Exception\\ExceptionInterface' => __DIR__ . '/..' . '/sensiolabs/security-checker/SensioLabs/Security/Exception/ExceptionInterface.php',
        'SensioLabs\\Security\\Exception\\HttpException' => __DIR__ . '/..' . '/sensiolabs/security-checker/SensioLabs/Security/Exception/HttpException.php',
        'SensioLabs\\Security\\Exception\\RuntimeException' => __DIR__ . '/..' . '/sensiolabs/security-checker/SensioLabs/Security/Exception/RuntimeException.php',
        'SensioLabs\\Security\\Result' => __DIR__ . '/..' . '/sensiolabs/security-checker/SensioLabs/Security/Result.php',
        'SensioLabs\\Security\\SecurityChecker' => __DIR__ . '/..' . '/sensiolabs/security-checker/SensioLabs/Security/SecurityChecker.php',
        'Symfony\\Component\\Console\\Application' => __DIR__ . '/..' . '/symfony/console/Application.php',
        'Symfony\\Component\\Console\\CommandLoader\\CommandLoaderInterface' => __DIR__ . '/..' . '/symfony/console/CommandLoader/CommandLoaderInterface.php',
        'Symfony\\Component\\Console\\CommandLoader\\ContainerCommandLoader' => __DIR__ . '/..' . '/symfony/console/CommandLoader/ContainerCommandLoader.php',
        'Symfony\\Component\\Console\\CommandLoader\\FactoryCommandLoader' => __DIR__ . '/..' . '/symfony/console/CommandLoader/FactoryCommandLoader.php',
        'Symfony\\Component\\Console\\Command\\Command' => __DIR__ . '/..' . '/symfony/console/Command/Command.php',
        'Symfony\\Component\\Console\\Command\\HelpCommand' => __DIR__ . '/..' . '/symfony/console/Command/HelpCommand.php',
        'Symfony\\Component\\Console\\Command\\ListCommand' => __DIR__ . '/..' . '/symfony/console/Command/ListCommand.php',
        'Symfony\\Component\\Console\\Command\\LockableTrait' => __DIR__ . '/..' . '/symfony/console/Command/LockableTrait.php',
        'Symfony\\Component\\Console\\ConsoleEvents' => __DIR__ . '/..' . '/symfony/console/ConsoleEvents.php',
        'Symfony\\Component\\Console\\DependencyInjection\\AddConsoleCommandPass' => __DIR__ . '/..' . '/symfony/console/DependencyInjection/AddConsoleCommandPass.php',
        'Symfony\\Component\\Console\\Descriptor\\ApplicationDescription' => __DIR__ . '/..' . '/symfony/console/Descriptor/ApplicationDescription.php',
        'Symfony\\Component\\Console\\Descriptor\\Descriptor' => __DIR__ . '/..' . '/symfony/console/Descriptor/Descriptor.php',
        'Symfony\\Component\\Console\\Descriptor\\DescriptorInterface' => __DIR__ . '/..' . '/symfony/console/Descriptor/DescriptorInterface.php',
        'Symfony\\Component\\Console\\Descriptor\\JsonDescriptor' => __DIR__ . '/..' . '/symfony/console/Descriptor/JsonDescriptor.php',
        'Symfony\\Component\\Console\\Descriptor\\MarkdownDescriptor' => __DIR__ . '/..' . '/symfony/console/Descriptor/MarkdownDescriptor.php',
        'Symfony\\Component\\Console\\Descriptor\\TextDescriptor' => __DIR__ . '/..' . '/symfony/console/Descriptor/TextDescriptor.php',
        'Symfony\\Component\\Console\\Descriptor\\XmlDescriptor' => __DIR__ . '/..' . '/symfony/console/Descriptor/XmlDescriptor.php',
        'Symfony\\Component\\Console\\EventListener\\ErrorListener' => __DIR__ . '/..' . '/symfony/console/EventListener/ErrorListener.php',
        'Symfony\\Component\\Console\\Event\\ConsoleCommandEvent' => __DIR__ . '/..' . '/symfony/console/Event/ConsoleCommandEvent.php',
        'Symfony\\Component\\Console\\Event\\ConsoleErrorEvent' => __DIR__ . '/..' . '/symfony/console/Event/ConsoleErrorEvent.php',
        'Symfony\\Component\\Console\\Event\\ConsoleEvent' => __DIR__ . '/..' . '/symfony/console/Event/ConsoleEvent.php',
        'Symfony\\Component\\Console\\Event\\ConsoleTerminateEvent' => __DIR__ . '/..' . '/symfony/console/Event/ConsoleTerminateEvent.php',
        'Symfony\\Component\\Console\\Exception\\CommandNotFoundException' => __DIR__ . '/..' . '/symfony/console/Exception/CommandNotFoundException.php',
        'Symfony\\Component\\Console\\Exception\\ExceptionInterface' => __DIR__ . '/..' . '/symfony/console/Exception/ExceptionInterface.php',
        'Symfony\\Component\\Console\\Exception\\InvalidArgumentException' => __DIR__ . '/..' . '/symfony/console/Exception/InvalidArgumentException.php',
        'Symfony\\Component\\Console\\Exception\\InvalidOptionException' => __DIR__ . '/..' . '/symfony/console/Exception/InvalidOptionException.php',
        'Symfony\\Component\\Console\\Exception\\LogicException' => __DIR__ . '/..' . '/symfony/console/Exception/LogicException.php',
        'Symfony\\Component\\Console\\Exception\\NamespaceNotFoundException' => __DIR__ . '/..' . '/symfony/console/Exception/NamespaceNotFoundException.php',
        'Symfony\\Component\\Console\\Exception\\RuntimeException' => __DIR__ . '/..' . '/symfony/console/Exception/RuntimeException.php',
        'Symfony\\Component\\Console\\Formatter\\OutputFormatter' => __DIR__ . '/..' . '/symfony/console/Formatter/OutputFormatter.php',
        'Symfony\\Component\\Console\\Formatter\\OutputFormatterInterface' => __DIR__ . '/..' . '/symfony/console/Formatter/OutputFormatterInterface.php',
        'Symfony\\Component\\Console\\Formatter\\OutputFormatterStyle' => __DIR__ . '/..' . '/symfony/console/Formatter/OutputFormatterStyle.php',
        'Symfony\\Component\\Console\\Formatter\\OutputFormatterStyleInterface' => __DIR__ . '/..' . '/symfony/console/Formatter/OutputFormatterStyleInterface.php',
        'Symfony\\Component\\Console\\Formatter\\OutputFormatterStyleStack' => __DIR__ . '/..' . '/symfony/console/Formatter/OutputFormatterStyleStack.php',
        'Symfony\\Component\\Console\\Formatter\\WrappableOutputFormatterInterface' => __DIR__ . '/..' . '/symfony/console/Formatter/WrappableOutputFormatterInterface.php',
        'Symfony\\Component\\Console\\Helper\\DebugFormatterHelper' => __DIR__ . '/..' . '/symfony/console/Helper/DebugFormatterHelper.php',
        'Symfony\\Component\\Console\\Helper\\DescriptorHelper' => __DIR__ . '/..' . '/symfony/console/Helper/DescriptorHelper.php',
        'Symfony\\Component\\Console\\Helper\\FormatterHelper' => __DIR__ . '/..' . '/symfony/console/Helper/FormatterHelper.php',
        'Symfony\\Component\\Console\\Helper\\Helper' => __DIR__ . '/..' . '/symfony/console/Helper/Helper.php',
        'Symfony\\Component\\Console\\Helper\\HelperInterface' => __DIR__ . '/..' . '/symfony/console/Helper/HelperInterface.php',
        'Symfony\\Component\\Console\\Helper\\HelperSet' => __DIR__ . '/..' . '/symfony/console/Helper/HelperSet.php',
        'Symfony\\Component\\Console\\Helper\\InputAwareHelper' => __DIR__ . '/..' . '/symfony/console/Helper/InputAwareHelper.php',
        'Symfony\\Component\\Console\\Helper\\ProcessHelper' => __DIR__ . '/..' . '/symfony/console/Helper/ProcessHelper.php',
        'Symfony\\Component\\Console\\Helper\\ProgressBar' => __DIR__ . '/..' . '/symfony/console/Helper/ProgressBar.php',
        'Symfony\\Component\\Console\\Helper\\ProgressIndicator' => __DIR__ . '/..' . '/symfony/console/Helper/ProgressIndicator.php',
        'Symfony\\Component\\Console\\Helper\\QuestionHelper' => __DIR__ . '/..' . '/symfony/console/Helper/QuestionHelper.php',
        'Symfony\\Component\\Console\\Helper\\SymfonyQuestionHelper' => __DIR__ . '/..' . '/symfony/console/Helper/SymfonyQuestionHelper.php',
        'Symfony\\Component\\Console\\Helper\\Table' => __DIR__ . '/..' . '/symfony/console/Helper/Table.php',
        'Symfony\\Component\\Console\\Helper\\TableCell' => __DIR__ . '/..' . '/symfony/console/Helper/TableCell.php',
        'Symfony\\Component\\Console\\Helper\\TableRows' => __DIR__ . '/..' . '/symfony/console/Helper/TableRows.php',
        'Symfony\\Component\\Console\\Helper\\TableSeparator' => __DIR__ . '/..' . '/symfony/console/Helper/TableSeparator.php',
        'Symfony\\Component\\Console\\Helper\\TableStyle' => __DIR__ . '/..' . '/symfony/console/Helper/TableStyle.php',
        'Symfony\\Component\\Console\\Input\\ArgvInput' => __DIR__ . '/..' . '/symfony/console/Input/ArgvInput.php',
        'Symfony\\Component\\Console\\Input\\ArrayInput' => __DIR__ . '/..' . '/symfony/console/Input/ArrayInput.php',
        'Symfony\\Component\\Console\\Input\\Input' => __DIR__ . '/..' . '/symfony/console/Input/Input.php',
        'Symfony\\Component\\Console\\Input\\InputArgument' => __DIR__ . '/..' . '/symfony/console/Input/InputArgument.php',
        'Symfony\\Component\\Console\\Input\\InputAwareInterface' => __DIR__ . '/..' . '/symfony/console/Input/InputAwareInterface.php',
        'Symfony\\Component\\Console\\Input\\InputDefinition' => __DIR__ . '/..' . '/symfony/console/Input/InputDefinition.php',
        'Symfony\\Component\\Console\\Input\\InputInterface' => __DIR__ . '/..' . '/symfony/console/Input/InputInterface.php',
        'Symfony\\Component\\Console\\Input\\InputOption' => __DIR__ . '/..' . '/symfony/console/Input/InputOption.php',
        'Symfony\\Component\\Console\\Input\\StreamableInputInterface' => __DIR__ . '/..' . '/symfony/console/Input/StreamableInputInterface.php',
        'Symfony\\Component\\Console\\Input\\StringInput' => __DIR__ . '/..' . '/symfony/console/Input/StringInput.php',
        'Symfony\\Component\\Console\\Logger\\ConsoleLogger' => __DIR__ . '/..' . '/symfony/console/Logger/ConsoleLogger.php',
        'Symfony\\Component\\Console\\Output\\BufferedOutput' => __DIR__ . '/..' . '/symfony/console/Output/BufferedOutput.php',
        'Symfony\\Component\\Console\\Output\\ConsoleOutput' => __DIR__ . '/..' . '/symfony/console/Output/ConsoleOutput.php',
        'Symfony\\Component\\Console\\Output\\ConsoleOutputInterface' => __DIR__ . '/..' . '/symfony/console/Output/ConsoleOutputInterface.php',
        'Symfony\\Component\\Console\\Output\\ConsoleSectionOutput' => __DIR__ . '/..' . '/symfony/console/Output/ConsoleSectionOutput.php',
        'Symfony\\Component\\Console\\Output\\NullOutput' => __DIR__ . '/..' . '/symfony/console/Output/NullOutput.php',
        'Symfony\\Component\\Console\\Output\\Output' => __DIR__ . '/..' . '/symfony/console/Output/Output.php',
        'Symfony\\Component\\Console\\Output\\OutputInterface' => __DIR__ . '/..' . '/symfony/console/Output/OutputInterface.php',
        'Symfony\\Component\\Console\\Output\\StreamOutput' => __DIR__ . '/..' . '/symfony/console/Output/StreamOutput.php',
        'Symfony\\Component\\Console\\Question\\ChoiceQuestion' => __DIR__ . '/..' . '/symfony/console/Question/ChoiceQuestion.php',
        'Symfony\\Component\\Console\\Question\\ConfirmationQuestion' => __DIR__ . '/..' . '/symfony/console/Question/ConfirmationQuestion.php',
        'Symfony\\Component\\Console\\Question\\Question' => __DIR__ . '/..' . '/symfony/console/Question/Question.php',
        'Symfony\\Component\\Console\\Style\\OutputStyle' => __DIR__ . '/..' . '/symfony/console/Style/OutputStyle.php',
        'Symfony\\Component\\Console\\Style\\StyleInterface' => __DIR__ . '/..' . '/symfony/console/Style/StyleInterface.php',
        'Symfony\\Component\\Console\\Style\\SymfonyStyle' => __DIR__ . '/..' . '/symfony/console/Style/SymfonyStyle.php',
        'Symfony\\Component\\Console\\Terminal' => __DIR__ . '/..' . '/symfony/console/Terminal.php',
        'Symfony\\Component\\Console\\Tester\\ApplicationTester' => __DIR__ . '/..' . '/symfony/console/Tester/ApplicationTester.php',
        'Symfony\\Component\\Console\\Tester\\CommandTester' => __DIR__ . '/..' . '/symfony/console/Tester/CommandTester.php',
        'Symfony\\Component\\Console\\Tester\\TesterTrait' => __DIR__ . '/..' . '/symfony/console/Tester/TesterTrait.php',
        'Symfony\\Contracts\\Cache\\CacheInterface' => __DIR__ . '/..' . '/symfony/contracts/Cache/CacheInterface.php',
        'Symfony\\Contracts\\Cache\\CacheTrait' => __DIR__ . '/..' . '/symfony/contracts/Cache/CacheTrait.php',
        'Symfony\\Contracts\\Cache\\CallbackInterface' => __DIR__ . '/..' . '/symfony/contracts/Cache/CallbackInterface.php',
        'Symfony\\Contracts\\Cache\\ItemInterface' => __DIR__ . '/..' . '/symfony/contracts/Cache/ItemInterface.php',
        'Symfony\\Contracts\\Cache\\TagAwareCacheInterface' => __DIR__ . '/..' . '/symfony/contracts/Cache/TagAwareCacheInterface.php',
        'Symfony\\Contracts\\Service\\ResetInterface' => __DIR__ . '/..' . '/symfony/contracts/Service/ResetInterface.php',
        'Symfony\\Contracts\\Service\\ServiceLocatorTrait' => __DIR__ . '/..' . '/symfony/contracts/Service/ServiceLocatorTrait.php',
        'Symfony\\Contracts\\Service\\ServiceSubscriberInterface' => __DIR__ . '/..' . '/symfony/contracts/Service/ServiceSubscriberInterface.php',
        'Symfony\\Contracts\\Service\\ServiceSubscriberTrait' => __DIR__ . '/..' . '/symfony/contracts/Service/ServiceSubscriberTrait.php',
        'Symfony\\Contracts\\Tests\\Cache\\CacheTraitTest' => __DIR__ . '/..' . '/symfony/contracts/Tests/Cache/CacheTraitTest.php',
        'Symfony\\Contracts\\Tests\\Cache\\TestPool' => __DIR__ . '/..' . '/symfony/contracts/Tests/Cache/CacheTraitTest.php',
        'Symfony\\Contracts\\Tests\\Service\\ChildTestService' => __DIR__ . '/..' . '/symfony/contracts/Tests/Service/ServiceSubscriberTraitTest.php',
        'Symfony\\Contracts\\Tests\\Service\\ParentTestService' => __DIR__ . '/..' . '/symfony/contracts/Tests/Service/ServiceSubscriberTraitTest.php',
        'Symfony\\Contracts\\Tests\\Service\\ServiceLocatorTest' => __DIR__ . '/..' . '/symfony/contracts/Tests/Service/ServiceLocatorTest.php',
        'Symfony\\Contracts\\Tests\\Service\\ServiceSubscriberTraitTest' => __DIR__ . '/..' . '/symfony/contracts/Tests/Service/ServiceSubscriberTraitTest.php',
        'Symfony\\Contracts\\Tests\\Service\\TestService' => __DIR__ . '/..' . '/symfony/contracts/Tests/Service/ServiceSubscriberTraitTest.php',
        'Symfony\\Contracts\\Tests\\Translation\\TranslatorTest' => __DIR__ . '/..' . '/symfony/contracts/Tests/Translation/TranslatorTest.php',
        'Symfony\\Contracts\\Translation\\LocaleAwareInterface' => __DIR__ . '/..' . '/symfony/contracts/Translation/LocaleAwareInterface.php',
        'Symfony\\Contracts\\Translation\\TranslatorInterface' => __DIR__ . '/..' . '/symfony/contracts/Translation/TranslatorInterface.php',
        'Symfony\\Contracts\\Translation\\TranslatorTrait' => __DIR__ . '/..' . '/symfony/contracts/Translation/TranslatorTrait.php',
        'Symfony\\Polyfill\\Mbstring\\Mbstring' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/Mbstring.php',
        'ZendDiagnostics\\Check\\AbstractCheck' => __DIR__ . '/..' . '/zendframework/zenddiagnostics/src/Check/AbstractCheck.php',
        'ZendDiagnostics\\Check\\AbstractFileCheck' => __DIR__ . '/..' . '/zendframework/zenddiagnostics/src/Check/AbstractFileCheck.php',
        'ZendDiagnostics\\Check\\AbstractMemoryCheck' => __DIR__ . '/..' . '/zendframework/zenddiagnostics/src/Check/AbstractMemoryCheck.php',
        'ZendDiagnostics\\Check\\ApcFragmentation' => __DIR__ . '/..' . '/zendframework/zenddiagnostics/src/Check/ApcFragmentation.php',
        'ZendDiagnostics\\Check\\ApcMemory' => __DIR__ . '/..' . '/zendframework/zenddiagnostics/src/Check/ApcMemory.php',
        'ZendDiagnostics\\Check\\Callback' => __DIR__ . '/..' . '/zendframework/zenddiagnostics/src/Check/Callback.php',
        'ZendDiagnostics\\Check\\CheckCollectionInterface' => __DIR__ . '/..' . '/zendframework/zenddiagnostics/src/Check/CheckCollectionInterface.php',
        'ZendDiagnostics\\Check\\CheckInterface' => __DIR__ . '/..' . '/zendframework/zenddiagnostics/src/Check/CheckInterface.php',
        'ZendDiagnostics\\Check\\ClassExists' => __DIR__ . '/..' . '/zendframework/zenddiagnostics/src/Check/ClassExists.php',
        'ZendDiagnostics\\Check\\CouchDBCheck' => __DIR__ . '/..' . '/zendframework/zenddiagnostics/src/Check/CouchDBCheck.php',
        'ZendDiagnostics\\Check\\CpuPerformance' => __DIR__ . '/..' . '/zendframework/zenddiagnostics/src/Check/CpuPerformance.php',
        'ZendDiagnostics\\Check\\DirReadable' => __DIR__ . '/..' . '/zendframework/zenddiagnostics/src/Check/DirReadable.php',
        'ZendDiagnostics\\Check\\DirWritable' => __DIR__ . '/..' . '/zendframework/zenddiagnostics/src/Check/DirWritable.php',
        'ZendDiagnostics\\Check\\DiskFree' => __DIR__ . '/..' . '/zendframework/zenddiagnostics/src/Check/DiskFree.php',
        'ZendDiagnostics\\Check\\DiskUsage' => __DIR__ . '/..' . '/zendframework/zenddiagnostics/src/Check/DiskUsage.php',
        'ZendDiagnostics\\Check\\DoctrineMigration' => __DIR__ . '/..' . '/zendframework/zenddiagnostics/src/Check/DoctrineMigration.php',
        'ZendDiagnostics\\Check\\ExtensionLoaded' => __DIR__ . '/..' . '/zendframework/zenddiagnostics/src/Check/ExtensionLoaded.php',
        'ZendDiagnostics\\Check\\GuzzleHttpService' => __DIR__ . '/..' . '/zendframework/zenddiagnostics/src/Check/GuzzleHttpService.php',
        'ZendDiagnostics\\Check\\HttpService' => __DIR__ . '/..' . '/zendframework/zenddiagnostics/src/Check/HttpService.php',
        'ZendDiagnostics\\Check\\IniFile' => __DIR__ . '/..' . '/zendframework/zenddiagnostics/src/Check/IniFile.php',
        'ZendDiagnostics\\Check\\JsonFile' => __DIR__ . '/..' . '/zendframework/zenddiagnostics/src/Check/JsonFile.php',
        'ZendDiagnostics\\Check\\Memcache' => __DIR__ . '/..' . '/zendframework/zenddiagnostics/src/Check/Memcache.php',
        'ZendDiagnostics\\Check\\Memcached' => __DIR__ . '/..' . '/zendframework/zenddiagnostics/src/Check/Memcached.php',
        'ZendDiagnostics\\Check\\Mongo' => __DIR__ . '/..' . '/zendframework/zenddiagnostics/src/Check/Mongo.php',
        'ZendDiagnostics\\Check\\OpCacheMemory' => __DIR__ . '/..' . '/zendframework/zenddiagnostics/src/Check/OpCacheMemory.php',
        'ZendDiagnostics\\Check\\PDOCheck' => __DIR__ . '/..' . '/zendframework/zenddiagnostics/src/Check/PDOCheck.php',
        'ZendDiagnostics\\Check\\PhpFlag' => __DIR__ . '/..' . '/zendframework/zenddiagnostics/src/Check/PhpFlag.php',
        'ZendDiagnostics\\Check\\PhpVersion' => __DIR__ . '/..' . '/zendframework/zenddiagnostics/src/Check/PhpVersion.php',
        'ZendDiagnostics\\Check\\ProcessRunning' => __DIR__ . '/..' . '/zendframework/zenddiagnostics/src/Check/ProcessRunning.php',
        'ZendDiagnostics\\Check\\RabbitMQ' => __DIR__ . '/..' . '/zendframework/zenddiagnostics/src/Check/RabbitMQ.php',
        'ZendDiagnostics\\Check\\Redis' => __DIR__ . '/..' . '/zendframework/zenddiagnostics/src/Check/Redis.php',
        'ZendDiagnostics\\Check\\SecurityAdvisory' => __DIR__ . '/..' . '/zendframework/zenddiagnostics/src/Check/SecurityAdvisory.php',
        'ZendDiagnostics\\Check\\StreamWrapperExists' => __DIR__ . '/..' . '/zendframework/zenddiagnostics/src/Check/StreamWrapperExists.php',
        'ZendDiagnostics\\Check\\XmlFile' => __DIR__ . '/..' . '/zendframework/zenddiagnostics/src/Check/XmlFile.php',
        'ZendDiagnostics\\Check\\YamlFile' => __DIR__ . '/..' . '/zendframework/zenddiagnostics/src/Check/YamlFile.php',
        'ZendDiagnostics\\Result\\AbstractResult' => __DIR__ . '/..' . '/zendframework/zenddiagnostics/src/Result/AbstractResult.php',
        'ZendDiagnostics\\Result\\Collection' => __DIR__ . '/..' . '/zendframework/zenddiagnostics/src/Result/Collection.php',
        'ZendDiagnostics\\Result\\Failure' => __DIR__ . '/..' . '/zendframework/zenddiagnostics/src/Result/Failure.php',
        'ZendDiagnostics\\Result\\FailureInterface' => __DIR__ . '/..' . '/zendframework/zenddiagnostics/src/Result/FailureInterface.php',
        'ZendDiagnostics\\Result\\ResultInterface' => __DIR__ . '/..' . '/zendframework/zenddiagnostics/src/Result/ResultInterface.php',
        'ZendDiagnostics\\Result\\Skip' => __DIR__ . '/..' . '/zendframework/zenddiagnostics/src/Result/Skip.php',
        'ZendDiagnostics\\Result\\SkipInterface' => __DIR__ . '/..' . '/zendframework/zenddiagnostics/src/Result/SkipInterface.php',
        'ZendDiagnostics\\Result\\Success' => __DIR__ . '/..' . '/zendframework/zenddiagnostics/src/Result/Success.php',
        'ZendDiagnostics\\Result\\SuccessInterface' => __DIR__ . '/..' . '/zendframework/zenddiagnostics/src/Result/SuccessInterface.php',
        'ZendDiagnostics\\Result\\Warning' => __DIR__ . '/..' . '/zendframework/zenddiagnostics/src/Result/Warning.php',
        'ZendDiagnostics\\Result\\WarningInterface' => __DIR__ . '/..' . '/zendframework/zenddiagnostics/src/Result/WarningInterface.php',
        'ZendDiagnostics\\Runner\\Reporter\\BasicConsole' => __DIR__ . '/..' . '/zendframework/zenddiagnostics/src/Runner/Reporter/BasicConsole.php',
        'ZendDiagnostics\\Runner\\Reporter\\ReporterInterface' => __DIR__ . '/..' . '/zendframework/zenddiagnostics/src/Runner/Reporter/ReporterInterface.php',
        'ZendDiagnostics\\Runner\\Runner' => __DIR__ . '/..' . '/zendframework/zenddiagnostics/src/Runner/Runner.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit86e7da02559e0884b31bb2accff8311d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit86e7da02559e0884b31bb2accff8311d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit86e7da02559e0884b31bb2accff8311d::$classMap;

        }, null, ClassLoader::class);
    }
}

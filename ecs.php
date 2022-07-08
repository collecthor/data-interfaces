<?php
declare(strict_types=1);

// ecs.php
use PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\EasyCodingStandard\Config\ECSConfig;
use Symplify\EasyCodingStandard\ValueObject\Option;
use Symplify\EasyCodingStandard\ValueObject\Set\SetList;

return static function (ECSConfig $ECSConfig): void {
    // Parallel
    $ECSConfig->parallel();

    $ECSConfig->sets([
        SetList::PSR_12
    ]);

    $ECSConfig->rule(ArraySyntaxFixer::class);
};

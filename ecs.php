<?php

use Symplify\EasyCodingStandard\ValueObject\Set\SetList;
use Symplify\EasyCodingStandard\Config\ECSConfig;
use Symplify\CodingStandard\Fixer\LineLength\LineLengthFixer;
use Symplify\CodingStandard\Fixer\LineLength\DocBlockLineLengthFixer;

return static function (ECSConfig $ecsConfig): void {
    // A. full sets
    $ecsConfig->sets([SetList::PSR_12]);
    $ecsConfig->sets([SetList::ARRAY]);
    $ecsConfig->sets([SetList::COMMENTS]);

    $ecsConfig->ruleWithConfiguration(LineLengthFixer::class, []);
    $ecsConfig->ruleWithConfiguration(DocBlockLineLengthFixer::class, []);
};

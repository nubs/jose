<?php

namespace Jose\Test\Stub;

use Jose\ClaimChecker\AudienceChecker;
use Jose\ClaimChecker\ClaimCheckerManager as Base;

/**
 */
class ClaimCheckerManager extends Base
{
    /**
     * {@inheritdoc}
     */
    protected function getSupportedClaimCheckers()
    {
        return array_merge(
            parent::getSupportedClaimCheckers(),
            [
                new IssuerChecker(),
                new SubjectChecker(),
                new AudienceChecker('My Service')
            ]
        );
    }
}
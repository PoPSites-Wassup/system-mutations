<?php

declare(strict_types=1);

namespace PoPSitesWassup\SystemMutations\MutationResolvers;

use PoP\ComponentModel\MutationResolvers\AbstractMutationResolver;
use PoP\Hooks\Facades\HooksAPIFacade;

class SaveDefinitionFileMutationResolver extends AbstractMutationResolver
{
    /**
     * @return mixed
     */
    public function execute(array $form_data)
    {
        HooksAPIFacade::getInstance()->doAction('PoP:system:save-definition-file');
        return true;
    }
}

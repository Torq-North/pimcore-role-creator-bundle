<?php

namespace TorqNorth\RoleCreatorBundle\Service;

class RoleConfigService
{
    public function getRolesFilePath(): string
    {
        return PIMCORE_PROJECT_ROOT . '/config/roles.yaml';
    }
}

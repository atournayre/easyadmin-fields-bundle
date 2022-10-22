<?php

namespace Atournayre\Bundle\EasyAdminFieldsBundle;

use Atournayre\Bundle\EasyAdminFieldsBundle\DependencyInjection\AtournayreEasyAdminFieldsExtension;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class AtournayreEasyAdminFieldsBundle extends Bundle
{
    public function getContainerExtension(): ?ExtensionInterface
    {
        if (null === $this->extension) {
            $this->extension = new AtournayreEasyAdminFieldsExtension();
        }

        return $this->extension;
    }
}

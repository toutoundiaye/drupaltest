<?php

namespace Drupal\premium;

use Drupal\Core\DependencyInjection\ContainerBuilder;
use Drupal\Core\DependencyInjection\ServiceProviderBase;


class PremiumServiceProvider extends ServiceProviderBase
{
    /**
    * {@inheritdoc}
    */
    public function alter(ContainerBuilder $container)
    {
        // Remplace la classe qui implémente le service "maintenance_mode".
        $definition = $container->getDefinition('maintenance_mode');
        $definition->setClass('\Drupal\premium\PremiumMaintenanceMode');
    }
}
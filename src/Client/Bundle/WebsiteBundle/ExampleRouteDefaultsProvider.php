<?php

namespace Client\Bundle\WebsiteBundle;

use Sulu\Bundle\RouteBundle\Routing\Defaults\RouteDefaultsProviderInterface;

class ExampleRouteDefaultsProvider implements RouteDefaultsProviderInterface
{
    public function getByEntity($entityClass, $id, $object = null)
    {
        return ['_controller' => 'ClientWebsiteBundle:Search:query', 'id' => $id];
    }

    public function supports($entityClass)
    {
        return $entityClass === 'Client\WebsiteBundle\Entity\Example';
    }
}

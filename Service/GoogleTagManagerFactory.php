<?php
/*
 * This file is part of the GoogleTagManagerBundle project
 *
 * (c) Philipp Braeutigam <philipp.braeutigam@googlemail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xynnn\GoogleTagManagerBundle\Service;

use Symfony\Component\DependencyInjection\ContainerAwareTrait;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Class GoogleTagManagerFactory
 *
 * @package Xynnn\GoogleTagManagerBundle\Service
 */
class GoogleTagManagerFactory
{
    use ContainerAwareTrait;

    /**
     * @return ContainerInterface
     */
    private function getContainer()
    {
        return $this->container;
    }

    /**
     * @return GoogleTagManagerInterface
     */
    public function create()
    {
        $container = $this->getContainer();

        $enabled = $container->getParameter('google_tag_manager.enabled');
        $id = $container->getParameter('google_tag_manager.id');
        $additionalParameters = $container->getParameter('google_tag_manager.additionalParameters');

        $service = new GoogleTagManager($enabled, $id);

        if ($additionalParameters)
        {
            $service->setAdditionalParameters($container->getParameter('google_tag_manager.additionalParameters'));
        }

        return $service;
    }
}

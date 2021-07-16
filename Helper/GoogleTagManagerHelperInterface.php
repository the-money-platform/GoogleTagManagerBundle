<?php
/*
 * This file is part of the GoogleTagManagerBundle project
 *
 * (c) Philipp Braeutigam <philipp.braeutigam@googlemail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xynnn\GoogleTagManagerBundle\Helper;

use Symfony\Component\Templating\Helper\HelperInterface;

/**
 * Interface GoogleTagManagerHelperInterface
 *
 * @package Xynnn\GoogleTagManagerBundle\Helper
 */
interface GoogleTagManagerHelperInterface extends HelperInterface
{
    /**
     * @return void
     */
    public function enable();

    /**
     * @return void
     */
    public function disable();

    /**
     * @return bool
     */
    public function isEnabled();

    /**
     * @return string
     */
    public function getId();

    /**
     * @param string $id
     * @return void
     */
    public function setId($id);

    /**
     * @return array
     */
    public function getData();

    /**
     * @return bool
     */
    public function hasData();

    /**
     * @return array
     */
    public function getPush();

    /**
     * @param string $additionalParameters
     * @return void
     */
    public function setAdditionalParameters($additionalParameters);

    /**
     * @return string
     */
    public function getAdditionalParameters();
}

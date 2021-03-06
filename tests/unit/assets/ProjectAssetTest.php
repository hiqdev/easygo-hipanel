<?php
/**
 * EasyGo implementation of HiPanel
 *
 * @link      https://github.com/hiqdev/easygo-hipanel
 * @package   easygo-hipanel
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2018, HiQDev (http://hiqdev.com/)
 */

namespace easygo\hipanel\tests\unit\assets;

use easygo\hipanel\assets\ProjectAsset;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2016-05-14 at 05:02:19.
 */
class ProjectAssetTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var ProjectAsset
     */
    protected $object;

    protected function setUp()
    {
        $this->object = new ProjectAsset();
    }

    protected function tearDown()
    {
    }

    public function testConstruct()
    {
        $this->assertInstanceOf(ProjectAsset::class, $this->object);
    }
}

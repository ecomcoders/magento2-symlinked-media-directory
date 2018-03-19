<?php
/**
 * Author: Christian Grugel <cgrugel@muenster-webdesign.net>
 * Date: 19.03.18
 * Time: 09:12
 */

namespace EcomCoders\SymlinkedMediaDirectory;

use Magento\TestFramework\ObjectManager;

class ModuleDiConfigTest extends \PHPUnit\Framework\TestCase
{
    public function testClassDirectoryResolverIsOverwritten()
    {
        /** @var ObjectManager $objectManager */
        $objectManager = ObjectManager::getInstance();
        $preference = $objectManager->get(\Magento\Framework\App\Filesystem\DirectoryResolver::class);
        $this->assertInstanceOf(Override\App\Filesystem\DirectoryResolver::class, $preference);
    }

}
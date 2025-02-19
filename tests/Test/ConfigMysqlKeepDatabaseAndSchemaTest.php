<?php

declare(strict_types=1);

/*
 * This file is part of the Liip/TestFixturesBundle
 *
 * (c) Lukas Kahwe Smith <smith@pooteeweet.org>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Liip\Acme\Tests\Test;

use Doctrine\Common\Annotations\Annotation\IgnoreAnnotation;
use Liip\Acme\Tests\AppConfigMysqlKeepDatabaseAndSchema\AppConfigMysqlKernelKeepDatabaseAndSchema;

/**
 * Test MySQL database with database caching enabled.
 *
 * The following tests require a connection to a MySQL database,
 * they are disabled by default (see phpunit.xml.dist).
 *
 * In order to run them, you have to set the MySQL connection
 * parameters in the Tests/AppConfigMysql/config.yml file and
 * add “--exclude-group ""” when running PHPUnit.
 *
 * Use Tests/AppConfigMysqlKeepDatabaseAndSchema/AppConfigMysqlKernelKeepDatabaseAndSchema.php instead of
 * Tests/App/AppKernel.php.
 * So it must be loaded in a separate process.
 *
 * @runTestsInSeparateProcesses
 * @preserveGlobalState disabled
 * @IgnoreAnnotation("group")
 *
 * @internal
 */
class ConfigMysqlKeepDatabaseAndSchemaTest extends ConfigMysqlTest
{
    protected static function getKernelClass(): string
    {
        return AppConfigMysqlKernelKeepDatabaseAndSchema::class;
    }
}

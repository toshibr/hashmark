<?php
// vim: fenc=utf-8:ft=php:ai:si:ts=4:sw=4:et:

/**
 * Hashmark_AllTests_Cron
 *
 * @filesource
 * @link        http://code.google.com/p/hashmark/
 * @link        http://framework.zend.com/manual/en/coding-standard.html
 * @link        http://phpdoc.org/tutorial.php
 * @copyright   Copyright (c) 2008-2009, Code Actual LLC
 * @license     http://www.opensource.org/licenses/bsd-license.php New BSD License
 * @package     Hashmark-Test
 * @subpackage  Hashmark_Cron
 * @version     $Id: AllTests.php 294 2009-02-13 03:48:59Z david $
*/

/**
 * Turns on logging/error-reporting, loads PHPUnit, etc.
 */
require_once dirname(__FILE__) . '/../bootstrap.php';

/**
 * @package     Hashmark-Test
 * @subpackage  Hashmark_Cron
 */
class Hashmark_AllTests_Cron
{
    /**
     * Auto-discover all tests.
     *
     * @static
     * @return PHPUnit_Framework_TestSuite  Suite covering all implementations.
     */
    public static function suite()
    {
        $dirname = dirname(__FILE__);
        $suite = new PHPUnit_Framework_TestSuite(__METHOD__);
        
        // Hashmark_Cron
        require_once $dirname . '/../../Cron.php';

        // Hashmark_TestCase_Cron
        require_once $dirname . '/../Cron.php';

        $suite->addTestSuite('Hashmark_TestCase_Cron');

        return $suite;
    }
}

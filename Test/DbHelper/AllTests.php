<?php
// vim: fenc=utf-8:ft=php:ai:si:ts=4:sw=4:et:

/**
 * Hashmark_AllTests_DbHelper
 *
 * @filesource
 * @link        http://code.google.com/p/hashmark/
 * @link        http://framework.zend.com/manual/en/coding-standard.html
 * @link        http://phpdoc.org/tutorial.php
 * @copyright   Copyright (c) 2008-2009, Code Actual LLC
 * @license     http://www.opensource.org/licenses/bsd-license.php New BSD License
 * @package     Hashmark-Test
 * @subpackage  Hashmark_DbHelper
 * @version     $Id: AllTests.php 296 2009-02-13 05:03:11Z david $
*/

/**
 * Turns on logging/error-reporting, loads PHPUnit, etc.
 */
require_once dirname(__FILE__) . '/../bootstrap.php';

/**
 * @package     Hashmark-Test
 * @subpackage  Hashmark_DbHelper
 */
class Hashmark_AllTests_DbHelper
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
        
        // Hashmark_DbHelper
        require_once $dirname . '/../../DbHelper.php';

        // Hashmark_TestCase_DbHelper
        require_once $dirname . '/../DbHelper.php';

        $suite->addTestSuite('Hashmark_TestCase_DbHelper');

        return $suite;
    }
}

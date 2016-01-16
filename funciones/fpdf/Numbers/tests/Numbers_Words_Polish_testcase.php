<?php
/* vim: set expandtab tabstop=4 shiftwidth=4: */
//
// +----------------------------------------------------------------------+
// | PHP version 4                                                        |
// +----------------------------------------------------------------------+
// | Copyright (c) 1997-2003 The PHP Group                                |
// +----------------------------------------------------------------------+
// | This source file is subject to version 3.0 of the PHP license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available at through the world-wide-web at                           |
// | http://www.php.net/license/3_0.txt.                                  |
// | If you did not receive a copy of the PHP license and are unable to   |
// | obtain it through the world-wide-web, please send a note to          |
// | license@php.net so we can mail you a copy immediately.               |
// +----------------------------------------------------------------------+
// | Authors: Piotr Klaban                                                |
// +----------------------------------------------------------------------+
//
// Numbers_Words class extension to spell numbers in Polish.
//

require_once 'Numbers/Words.php';
require_once 'PHPUnit/TestCase.php';

class Numbers_Words_Polish_TestCase extends PHPUnit_TestCase
{
    var $db;
    var $handle;

    function Numbers_Words_Polish_TestCase($name)
    {
        $this->handle = new Numbers_Words();
        $this->PHPUnit_TestCase($name);
    }

    function setUp()
    {
    }

    function tearDown()
    {
    }

    /**
    * Testing numbers between 0 and 9
    */
    function testDigits()
    {
        $digits = array('zero',
                        'jeden',
                        'dwa',
                        'trzy',
                        'cztery',
                        'pi��',
                        'sze��',
                        'siedem',
                        'osiem',
                        'dziewi��'
                       );
        for ($i = 0; $i < 10; $i++)
        {
            $number = $this->handle->toWords($i, 'pl');
            $this->assertEquals($digits[$i], $number);
        }
    }

    /**
    * Testing numbers between 10 and 99
    */
    function testTens()
    {
        $tens = array(11 => 'jedena�cie',
                      12 => 'dwana�cie',
                      16 => 'szesna�cie',
                      19 => 'dziewi�tna�cie',
                      20 => 'dwadzie�cia',
                      21 => 'dwadzie�cia jeden',
                      26 => 'dwadzie�cia sze��',
                      30 => 'trzydzie�ci',
                      31 => 'trzydzie�ci jeden',
                      40 => 'czterdzie�ci',
                      43 => 'czterdzie�ci trzy',
                      50 => 'pi��dziesi�t',
                      55 => 'pi��dziesi�t pi��',
                      60 => 'sze��dziesi�t',
                      67 => 'sze��dziesi�t siedem',
                      70 => 'siedemdziesi�t',
                      79 => 'siedemdziesi�t dziewi��'
                     );
        foreach ($tens as $number => $word) {
            $this->assertEquals($word, $this->handle->toWords($number, 'pl'));
        }
    }

    /**
    * Testing numbers between 100 and 999
    */
    function testHundreds()
    {
        $hundreds = array(100 => 'sto',
                          101 => 'sto jeden',
                          199 => 'sto dziewi��dziesi�t dziewi��',
                          203 => 'dwie�cie trzy',
                          287 => 'dwie�cie osiemdziesi�t siedem',
                          300 => 'trzysta',
                          356 => 'trzysta pi��dziesi�t sze��',
                          410 => 'czterysta dziesi��',
                          434 => 'czterysta trzydzie�ci cztery',
                          578 => 'pi��set siedemdziesi�t osiem',
                          689 => 'sze��set osiemdziesi�t dziewi��',
                          729 => 'siedemset dwadzie�cia dziewi��',
                          894 => 'osiemset dziewi��dziesi�t cztery',
                          999 => 'dziewi��set dziewi��dziesi�t dziewi��'
                         );
        foreach ($hundreds as $number => $word) {
            $this->assertEquals($word, $this->handle->toWords($number, 'pl'));
        }
    }

    /**
    * Testing numbers between 1000 and 9999
    */
    function testThousands()
    {
        $thousands = array(1000 => 'jeden tysi�c',
                           1001 => 'jeden tysi�c jeden',
                           1097 => 'jeden tysi�c dziewi��dziesi�t siedem',
                           1104 => 'jeden tysi�c sto cztery',
                           1243 => 'jeden tysi�c dwie�cie czterdzie�ci trzy',
                           2385 => 'dwa tysi�ce trzysta osiemdziesi�t pi��',
                           3766 => 'trzy tysi�ce siedemset sze��dziesi�t sze��',
                           4196 => 'cztery tysi�ce sto dziewi��dziesi�t sze��',
                           5846 => 'pi�� tysi�cy osiemset czterdzie�ci sze��',
                           6459 => 'sze�� tysi�cy czterysta pi��dziesi�t dziewi��',
                           7232 => 'siedem tysi�cy dwie�cie trzydzie�ci dwa',
                           8569 => 'osiem tysi�cy pi��set sze��dziesi�t dziewi��',
                           9539 => 'dziewi�� tysi�cy pi��set trzydzie�ci dziewi��'
                          );
        foreach ($thousands as $number => $word) {
            $this->assertEquals($word, $this->handle->toWords($number, 'pl'));
        }
    }
}

?>

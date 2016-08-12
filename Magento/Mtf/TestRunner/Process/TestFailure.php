<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\Mtf\TestRunner\Process;

class TestFailure extends \PHPUnit_Framework_TestFailure
{
    /**
     * Returns a short description of the failure.
     *
     * @return string
     */
    public function toString()
    {
        var_dump($this->failedTest);
    }

    /**
     * Returns a description for an exception.
     *
     * @param  \Exception $e
     * @return string
     * @since  Method available since Release 3.2.0
     */
    public static function exceptionToString(\Exception $e)
    {
        if ($e instanceof \PHPUnit_Framework_SelfDescribing) {
            $buffer = $e->toString();

            if ($e instanceof \PHPUnit_Framework_ExpectationFailedException && $e->getComparisonFailure()) {
                $buffer = $buffer . "\n" . $e->getComparisonFailure()->getDiff();
            }

            if (!empty($buffer)) {
                $buffer = trim($buffer) . "\n";
            }
        }

        else if ($e instanceof \PHPUnit_Framework_Error) {
            $buffer = $e->getMessage() . "\n";
        }

        else {
            $buffer = get_class($e) . ': ' . $e->getMessage() . "\n";
        }

        return $buffer . 'yyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy';
    }
}

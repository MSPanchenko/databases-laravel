<?php

namespace App\Http\Controllers;

class BenchmarkController extends Controller
{
    public function benchmarkIfVsAnd()
    {
        $start = microtime(true);
        for ($n = 0; $n < 3000000; $n++) {
            $n = $n;
        }
        $end = microtime(true);
        echo 'Start simple: ' . ($end - $start) . '<br>';

        //------------------------------------------------
        $start = microtime(true);
        for ($n = 0; $n < 3000000; $n++) {
            is_int($n) AND $n = $n;
        }
        $end = microtime(true);
        echo 'And: ' . ($end - $start) . '<br>';

        $start = microtime(true);
        for ($n = 0; $n < 3000000; $n++) {
            is_int($n) && $n = $n;
        }
        $end = microtime(true);
        echo '&&: ' . ($end - $start) . '<br>';

        $start = microtime(true);
        for ($n = 0; $n < 3000000; $n++) {
            !is_int($n) ?: $n = $n;
        }
        $end = microtime(true);
        echo '?: : ' . ($end - $start) . '<br>';

        $start = microtime(true);
        for ($n = 0; $n < 3000000; $n++) {
            if (is_int($n)) {
                $n = $n;
            }
        }
        $end = microtime(true);
        echo 'If: ' . ($end - $start) . '<br>';

        $start = microtime(true);
        for ($n = 0; $n < 3000000; $n++) {
            if (is_int($n) === true) {
                $n = $n;
            }
        }
        $end = microtime(true);
        echo 'If === true: ' . ($end - $start) . '<br>';

        $start = microtime(true);
        for ($n = 0; $n < 3000000; $n++) {
            $isInt = is_int($n);
            if ($isInt) {
                $n = $n;
            }
        }
        $end = microtime(true);
        echo 'If variable: ' . ($end - $start) . '<br>';
    }
}

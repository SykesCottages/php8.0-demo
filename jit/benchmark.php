<?php

var_dump(isset(opcache_get_status()['jit']['enabled']));

class Benchmark
{
    public function __construct(int $iterations)
    {
        for ($i = 0; $i < $iterations; $i++) {
            $this->run();
        }
    }

    public function run()
    {
        for ($y = -39; $y < 39; $y++) {
            for ($x = -39; $x < 39; $x++) {
                $i = $this->mandelbrot(
                    $x / 40.0,
                    $y / 40.0
                );
            }
        }
    }

    private function mandelbrot($x, $y)
    {
        $cr = $y - 0.5;
        $ci = $x;
        $zi = 0.0;
        $zr = 0.0;
        $i = 0;

        while (1) {
            $i++;

            $temp = $zr * $zi;

            $zr2 = $zr * $zr;
            $zi2 = $zi * $zi;

            $zr = $zr2 - $zi2 + $cr;
            $zi = $temp + $temp + $ci;

            if ($zi2 + $zr2 > 16) {
                return $i;
            }

            if ($i > 5000) {
                return 0;
            }
        }
    }
}


$start_time = microtime(true);
new Benchmark(iterations:20);
$end_time = microtime(true);

echo $end_time - $start_time, PHP_EOL;

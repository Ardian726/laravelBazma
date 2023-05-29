<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Facades\Config;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ConfigurationTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        // $shortName = config("coba.biodata.shortName");
        // $fullName = config("coba.biodata.fullName");

        // self::assertEquals($shortName, "Ardian");
        // self::assertEquals($fullName, "Ardian Arya Putra");

        $matapelajaran_x = config("coba.matapelajaran.matapelajaran_x");

        // facades
        $matapelajaran_xConfig = Config::get("coba.matapelajaran.matapelajaran_x");
        $matapelajaran_xi = config("coba.matapelajaran.matapelajaran_xi");

        self::assertEquals($matapelajaran_x, "informatika");
        self::assertEquals($matapelajaran_xi, "webDev");
        self::assertEquals($matapelajaran_xConfig, $matapelajaran_x);
    }
}
 
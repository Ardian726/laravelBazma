<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class matapelajaranTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $matapelajaran_x = config("matapelajaran.matapelajaran.matapelajaran_x");
        $matapelajaran_xi = config("matapelajaran.matapelajaran.matapelajaran_xi");

        self::assertEquals($matapelajaran_x, "informatika");
        self::assertEquals($matapelajaran_xi, "webDev");
    }
}

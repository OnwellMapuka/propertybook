<?php

namespace Tests\Feature;

use Tests\TestCase;

class ApiVersionTest extends TestCase
{
    public function testV1RouteReturnsSuccessResponse()
    {
        $this->get('api/v1/test')
            ->assertOk()
            ->assertJsonStructure(['message']);
    }

    public function testV2RouteReturnsSuccessResponse()
    {
        $this->get('api/v2/test')
            ->assertOk()
            ->assertJsonStructure(['message']);
    }
}
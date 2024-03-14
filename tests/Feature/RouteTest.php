<?php

namespace Tests\Feature;

use Tests\TestCase;
use NunoMaduro\Collision\Exceptions\TestException;
use Illuminate\Foundation\Testing\RefreshDatabase;

it('returns 200 on home', function () {
    $response = $this->get('/');

    $response->assertOk();
});

it('returns 200 on about', function () {
    $response = $this->get_class_varsget('/about');

    $response->assertOk();
});

it('returns 200 on contact', function () {
    $response = $this->get('/contact');

    $response->assertOk();
});

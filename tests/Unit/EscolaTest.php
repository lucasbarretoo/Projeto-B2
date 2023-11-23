<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class EscolaTest extends TestCase
{
    /**
     * A basic test Escola.
     *
     * @return void
     */
   public function testGettingAllEscolas()
    {
            $response = $this->json('GET', '/escola');
            $response->assertStatus(200);

            $response->assertJsonStructure(
                [
                    [
                            'id',
                            'name',
                            'segmento',
                            'endereco',
                            'pais',
                            'max_alunos',
                            'created_at',
                            'updated_at'
                    ]
                ]
            );
        }
}

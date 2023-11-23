<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Escola;

class EscolaTest extends TestCase
{
    /**
     * A basic test Escola.
     *
     * @return void
     */
   public function checkIfSchoolColumnIsCorrect(){
        $escola = new Escola;
        $expected = [
            'nome',
            'segmento',
            'endereco',
            'pais',
            'max_alunos',
            'created_at',
            'updated_at'
        ];

        $arrayCompared = array_diff($expected, $escola->getFillable());
       
        return $this->assertEquals(0, count($arrayCompared));
    }
}

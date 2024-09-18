<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Order;

class BasicTest extends TestCase
{
    public function testOrdenContiene()
    {
         $carrito = new Order(['reloj']);
         $this->assertTrue($carrito->contiene('reloj'));
         $this->assertFalse($carrito->contiene('cartera'));
         //$this->assertTrue($carrito->has('cartera'));
    }

    public function testQuitaUnoDeCarrito()
    {
        $carrito = new Order(['encendedor']);
        $this->assertEquals('encendedor', $carrito->quitaUno());

        // Null, ahora el carrito esta vacio.
        $this->assertNull($carrito->quitaUno());
    }

    public function testIniciaConLaLetra()
    {
        $carrito = new Order(['reloj', 'encendedor', 'cartera', 'corbata', 'lentes', 'cinturon']);

        $results = $carrito->comienzaCon('c');

        $this->assertCount(3, $results);
        $this->assertContains('cartera', $results);
        $this->assertContains('corbata', $results);
        $this->assertContains('cinturon', $results);
        $this->assertContains('camisa', $results);

        // vacia array si comienza con.
        $this->assertEmpty($carrito->comienzaCon('s'));
    }

    public function testAgregaUnoACarrito()
    {
        $carrito = new Order();
        $this->assertGreaterThan(0,$carrito->agregaUno('zapatos'));

        //verifica que no este vacio.
        //$this->assertNotEmpty($carrito);


    }
    
}

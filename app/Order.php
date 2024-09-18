<?php
# app/Box.php

namespace App;

class Order
{
    /**
     * @var array
     */
    protected $items = [];

    /**
     * Construye la orden con los items dados.
     *
     * @param array $items
     */
    public function __construct($items = [])
    {
        $this->items = $items;
    }

    /**
     * Verifica si el item especificado esta en la orden.
     *
     * @param string $item
     * @return bool
     */
    public function contiene($item)
    {
        return in_array($item, $this->items);
    }

    /**
     * Quita un item de la orden, nulo si la orden esta vacia.
     *
     * @return string
     */
    public function quitaUno()
    {
        return array_shift($this->items);
    }

    /**
     * Regresa todos los items de la orden, que comiencen con la letra especificada.
     *
     * @param string $letter
     * @return array
     */
    public function comienzaCon($letter)
    {
        return array_filter($this->items, function ($item) use ($letter) {
            return stripos($item, $letter) === 0;
        });
    }

    /**
     * Agrega un item a la orden.
     *
     * @param string $item
     * @return array
     */
    public function agregaUno($item)
    {
        return array_push($this->items, $item);
    }
}
<?php
// BORRAME

namespace controller;
class PruebaController extends Controller {
    public function demo($slug) {
        echo "Esto es un controlador, al que el router le ha pasado este slug: $slug";
    }
}
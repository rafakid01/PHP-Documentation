<?php
    // enum Naipe : string {
    //     case Ouros = "O";
    //     case Espadas = "E";
    //     case Copas = "C";
    //     case Paus = "P";
    // }

    // $espadas = Naipe::Espadas;

    // function takeCard ($naipe) {
    //     echo "Aqui temos uma carta";
    // }

    // takeCard($espadas);

    // $a = Naipe::Ouros;
    // $b = Naipe::Ouros;

    // if ($a === $b) {
    //     echo "Os valores são iguais <br>";
    // }

    // print Naipe::Paus->name . "<br>";

    // print $a->value;

    // MÉTODOS //

    interface Colorido {
        public function cor() :string;
    }

    enum Naipe implements Colorido {
        case Copas;
        case Ouros;
        case Paus;
        case Espadas;

        public function cor() : string{
            return match($this) {
                Naipe::Copas, Naipe::Ouros => "Vermelho",
                Naipe::Paus, Naipe::Espadas => "Preto",
            };
        }
        public function forma(): string
    {
        return "Retângulo";
    }
    }

    function pintar(Colorido $c) {

    }

    pintar(Naipe::Paus);

print Naipe::Ouros->forma();
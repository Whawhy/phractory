<?php
        $respuestas = array( //Emotes que quieras que sean screamers
          "KottyItsOk",
          "kottyHeh apoco?"
        );
        $random = array_rand($respuestas); //La última no debe tener "," al final, el resto si
        echo $respuestas[$random];
      ?>

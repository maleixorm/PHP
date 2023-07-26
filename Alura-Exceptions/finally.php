<?php

function a() : int {
    try {
        echo "Código";
        return 0;
    } catch (\Throwable $th) {
        echo "Problema";
        return 1;
    } finally {
        echo "Saindo da função!";
    }
}
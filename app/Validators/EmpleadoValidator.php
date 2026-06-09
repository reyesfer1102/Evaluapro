<?php

namespace App\Validators;

class EmpleadoValidator
{
    /**
     * Valida los datos de un empleado
     */
    public static function validar(array $datos)
    {
        $errores = [];

        // Validar nombre
        if (empty($datos['nombre']) || strlen($datos['nombre']) < 3) {
            $errores[] = 'El nombre debe tener al menos 3 caracteres';
        }

        // Validar email
        if (empty($datos['email']) || !filter_var($datos['email'], FILTER_VALIDATE_EMAIL)) {
            $errores[] = 'Email inválido';
        }

        // Validar salario
        if (empty($datos['salario']) || !is_numeric($datos['salario']) || $datos['salario'] < 0) {
            $errores[] = 'El salario debe ser un número válido';
        }

        // Validar departamento
        if (empty($datos['departamento'])) {
            $errores[] = 'El departamento es requerido';
        }

        return [
            'valido' => empty($errores),
            'errores' => $errores
        ];
    }
}

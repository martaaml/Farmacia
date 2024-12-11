<?php
 function registrarPedido($pdo, $correoCliente) {

        $stmt = $pdo->prepare("SELECT id FROM empleados WHERE id = :idUser");
        $stmt->execute(['idUser' => $this->idUser]);

        if ($stmt->rowCount() === 0) {
            return "El empleado no está identificado en el sistema.";
        }

        // Verificar que se proporciona el correo del cliente
        if (empty($correoCliente)) {
            return "Se necesita solicitar al menos el correo del cliente.";
        }

        // Registrar el pedido en la base de datos
        $stmt = $pdo->prepare("INSERT INTO pedidos (codigo_pedido, id_cliente, id_user, precio, id_medicamento, cantidad, correo_cliente, fecha_pedido) 
                               VALUES (:codigoPedido, :idCliente, :idUser, :precio, :idMedicamento, :cantidad, :correoCliente, NOW())");
        $stmt->execute([
            'codigoPedido' => $this->codigoPedido,
            'idCliente' => $this->idCliente,
            'idUser' => $this->idUser,
            'precio' => $this->precio,
            'idMedicamento' => $this->idMedicamento,
            'cantidad' => $this->cantidad,
            'correoCliente' => $correoCliente
        ]);

        return "Pedido anotado exitosamente.";
    }

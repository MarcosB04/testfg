<?php
include 'C:\xampp\htdocs\Hotel2-0\inc\clases\Usuario.php';
require_once 'conectar_db.php';
class GestorUsuarios {
    private $db;
    public function __construct($db) {
        $this->db = $db;
    }

    //Funcion para insertar un nuevo Usuario
    public function insertarUsuario(Usuario $usuario) {
        $sql = "INSERT INTO usuarios (dni, clave, nombre, apellidos, nacionalidad, telefono, email, rol, activo) 
                VALUES (:dni, :clave, :nombre, :apellidos, :nacionalidad, :telefono, :email, :rol, 1)";
        try {
            $stmt = $this->db->prepare($sql);
            $stmt->bindValue(':dni', $usuario->getDni());
            $stmt->bindValue(':clave', $usuario->getClave());
            $stmt->bindValue(':nombre', $usuario->getNombre());
            $stmt->bindValue(':apellidos', $usuario->getApellidos());
            $stmt->bindValue(':nacionalidad', $usuario->getNacionalidad());
            $stmt->bindValue(':telefono', $usuario->getTelefono());
            $stmt->bindValue(':email', $usuario->getEmail());
            $stmt->bindValue(':rol', $usuario->getRol());
            
            if ($stmt->execute()) {
                return "Los datos se han introducidos correctamente";
            } else {
                return "Se ha producido un error al insertar los datos.";
            }
        } catch (PDOException $e) {
            return "Error al insertar los datos: " . $e->getMessage();
        }
    }

    //Función para listar todos los usuarios (de alta)
    public function listarUsuarios() {
        $sql = "SELECT * FROM usuarios WHERE activo = 1 ORDER BY nombre ASC";
        try {
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            $usuarios = [];
            foreach ($result as $row) {
                $usuarios[] = new Usuario($row['dni'], $row[''], $row['nombre'], 
                $row['apellidos'], $row['direccion'], $row['provincia'], $row['localidad'], $row['cp'], 
                $row['telefono'], $row['email'], $row['rol'], $row['activo']);
            }
            return $usuarios;
        } catch (PDOException $e) {
            return "Se ha producido el siguiente error en la consulta: " . $e->getMessage();
        }
    }
    //Función para listar todos los usuarios CLIENTES (de alta y de baja)
    public function listarTodosClientes() {
        $sql = "SELECT * FROM usuarios WHERE rol = 'cliente' ORDER BY nombre ASC";
        try {
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            $usuarios = [];
            foreach ($result as $row) {
                $usuarios[] = new Usuario($row['dni'], $row['clave'], $row['nombre'], 
                $row['apellidos'], $row['direccion'], $row['provincia'], $row['localidad'], $row['cp'], 
                $row['telefono'], $row['email'], $row['rol'], $row['activo']);
            }
            return $usuarios;
        } catch (PDOException $e) {
            return "Se ha producido el siguiente error en la consulta: " . $e->getMessage();
        }
    }

        //Función para listar un Usuario mediante su Dni
        public function listarUsuario($dni) {
            $sql = "SELECT * FROM usuarios WHERE dni = :dni AND activo = 1";
            try {
                $stmt = $this->db->prepare($sql);
                $stmt->bindValue(':dni', $dni, PDO::PARAM_STR);
                $stmt->execute();
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
    
                if($result) {
                    return new Usuario($result['dni'], $result['clave'], $result['nombre'], 
                    $result['apellidos'], $result['direccion'], $result['provincia'], $result['localidad'], $result['cp'], 
                    $result['telefono'], $result['email'], $result['rol'], $result['activo']);
                    
                } else {
                    echo "No se ha podido obtener la información del usuario.";
                    return null;
                }
            
            } catch (PDOException $e) {
                echo "Se ha producido el siguiente error en la consulta: " . $e->getMessage();
                return null;
            }
        }

    
            //Función para buscar los datos de un usuario a partir de su dni
        public function buscarUsuario($cadena) {
            $sql = "SELECT * FROM usuarios WHERE dni LIKE :cadena ORDER BY nombre";
            try {
                $stmt = $this->db->prepare($sql);
                $stmt->bindValue(':cadena', "%$cadena%", PDO::PARAM_STR);
                $stmt->execute();
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
                
                if($result) {
                    return new Usuario($result['dni'], $result['clave'], $result['nombre'], 
                    $result['apellidos'], $result['direccion'], $result['provincia'], $result['localidad'], $result['cp'], 
                    $result['telefono'], $result['email'], $result['rol'], $result['activo']);
                    
                } else {
                    return "No se ha encontrado ningún usuario con ese DNI.";
                }
            } catch (PDOException $e) {
                return "Error en la búsqueda: " . $e->getMessage();
            }
        }

        //Función para modificar los datos de un usuario mediante su dni
        public function modificar(Usuario $usuario) {
            $sql = "UPDATE usuarios SET nombre = :nombre, apellidos = :apellidos, direccion = :direccion, provincia = :provincia, 
                    localidad = :localidad, cp = :cp, telefono = :telefono, email = :email WHERE dni = :dni";
            try {
                $stmt = $this->db->prepare($sql);
                $dni = $usuario ->getDni();
                $nombre = $usuario->getNombre();
                $apellidos = $usuario->getApellidos();
                $direccion = $usuario->getDireccion();
                $provincia = $usuario->getProvincia();
                $localidad = $usuario->getLocalidad();
                $cp = $usuario->getCp();
                $telefono = $usuario->getTelefono();
                $email = $usuario->getEmail();


                $stmt->bindParam(':nombre', $nombre);
                $stmt->bindParam(':apellidos', $apellidos);
                $stmt->bindParam(':direccion', $direccion);
                $stmt->bindParam(':provincia', $provincia);
                $stmt->bindParam(':localidad', $localidad);
                $stmt->bindParam(':cp', $cp);
                $stmt->bindParam(':telefono', $telefono);
                $stmt->bindParam(':email',  $email);
                $stmt->bindParam(':dni', $dni);
                

                if ($stmt->execute()) {
                    return "Se han actualizado los datos correctamente";
                } else {
                    return "Se ha producido un error en la actualización de los datos.";
                }
            } catch (PDOException $e) {
                return "No se han actualizado los valores correctamente: " . $e->getMessage();
            }
        }


        //Función para dar de baja a un usuario mediante su dni
        public function darDeBaja($dni) {
            $sql = "UPDATE usuarios SET activo = 0 WHERE dni = :dni AND activo = 1";
            try {
                $stmt = $this->db->prepare($sql);
                $stmt->bindParam(':dni', $dni);
        
                if ($stmt->execute()) {
                    return "El usuario ha sido dado de baja con éxito";
                } else {
                    return "No se ha podido dar de baja al usuario.";
                }
            } catch (PDOException $e) {
                return "Se ha producido un error al dar de baja al usuario: " . $e->getMessage();
            }
        }

        //Función para dar de baja a un usuario mediante su dni
        public function darDeAlta($dni) {
            $sql = "UPDATE usuarios SET activo = 1 WHERE dni = :dni AND activo = 0";
            try {
                $stmt = $this->db->prepare($sql);
                $stmt->bindParam(':dni', $dni);
        
                if ($stmt->execute()) {
                    return "El usuario ha sido dado de baja con éxito";
                } else {
                    return "No se ha podido dar de baja al usuario.";
                }
            } catch (PDOException $e) {
                return "Se ha producido un error al dar de baja al usuario: " . $e->getMessage();
            }
        }

        //Función para buscar los datos de un usuario a partir de su dni
        public function buscarPorEmail($cadena) {
            $sql = "SELECT * FROM usuarios WHERE email LIKE :cadena AND activo = 1";
            try {
                $stmt = $this->db->prepare($sql);
                $stmt->bindValue(':cadena', "%$cadena%", PDO::PARAM_STR);
                $stmt->execute();
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
                
                if($result) {
                    return new Usuario($result['dni'], $result['clave'], $result['nombre'], 
                    $result['apellidos'], $result['nacionalidad'], 
                    $result['telefono'], $result['email'], $result['rol'], $result['activo']);
                    
                } else {
                    return null;
                }
            } catch (PDOException $e) {
                return null;
            }
        }

        //Funcion para insertar un nuevo Usuario
        public function registroCliente($dni, $email, $clave, $nombre, $apellidos) {
            $sql = "INSERT INTO usuarios (dni, clave, nombre, apellidos, direccion, provincia, localidad, cp, telefono, email, rol, activo) 
                    VALUES (:dni, :clave, :nombre, :apellidos, NULL, NULL, NULL, NULL, NULL, :email, 'cliente', 1)";
            try {
                $stmt = $this->db->prepare($sql);
                $stmt->bindValue(':dni', $dni);
                $stmt->bindValue(':clave', $clave);
                $stmt->bindValue(':nombre', $nombre());
                $stmt->bindValue(':apellidos', $apellidos);
                $stmt->bindValue(':email', $email);
                
                if ($stmt->execute()) {
                    return "Se ha registrado correctamente";
                } else {
                    return "Se ha producido un error al insertar los datos.";
                }
            } catch (PDOException $e) {
                return "Error al insertar los datos: " . $e->getMessage();
            }
        }

        public function verificarCredenciales($email, $clave) {
            $sql = "SELECT clave FROM usuarios WHERE email = :email AND activo = 1";
            try{
                $stmt = $this->db->prepare($sql);
                $stmt->bindParam(':email', $email);
                $stmt->execute();
                $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

                if ($usuario && password_verify($clave, $usuario['clave'])) {
                    return true;
                } else {
                    return false;
                }
            } catch (PDOException $e) {
                return "Error al verificar las credenciales: " . $e->getMessage();
            }        
        }

        
        public function actualizarClave($email, $nuevaClaveHash) {
            $sql = "UPDATE usuarios SET clave = :clave WHERE email = :email";
            try {
                $stmt = $this->db->prepare($sql);
                $stmt->bindParam(':clave', $nuevaClaveHash);
                $stmt->bindParam(':email', $email);
                return $stmt->execute();
            } catch (PDOException $e) {
                echo "Error al actualizar la clave: " . $e->getMessage();
                return false;
            }

        }

        public function buscarClientesPorNombreODni($texto) {
            $sql = "SELECT dni FROM usuarios WHERE rol = 'cliente' AND (dni LIKE ? OR nombre LIKE ?)";
            try{
                $stmt = $this->db->prepare($sql);
                $like = "%$texto%";
                $stmt->execute([$like, $like]);
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            } catch (PDOException $e) {
                return "Error al buscar clientes: " . $e->getMessage();
            }
        }

        public function contarTodosLosClientes() {
            try {
                $sql = "SELECT COUNT(*) as total FROM usuarios WHERE rol = 'cliente'";
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
                return $resultado ? (int)$resultado['total'] : 0;
            } catch (PDOException $e) {
                echo "Error en contarTodosLosClientes: " . $e->getMessage();
                return 0;
            }
        }

        public function listarClientesPaginados($limite, $offset, $orden = 'nombre', $orderDir = 'ASC') {


            try {
                $ordenesPermitidos = ['dni', 'nombre', 'email', 'activo']; // columnas válidas
                    if (!in_array($orden, $ordenesPermitidos)) {
                        $orden = 'nombre';
                    }

                    $orderDir = strtoupper($orderDir) === 'DESC' ? 'DESC' : 'ASC';

                    $sql = "SELECT * FROM usuarios WHERE rol = 'cliente' ORDER BY $orden $orderDir LIMIT :limit OFFSET :offset";

                    $stmt = $this->db->prepare($sql);
                    $stmt->bindValue(':limit', (int)$limite, PDO::PARAM_INT);
                    $stmt->bindValue(':offset', (int)$offset, PDO::PARAM_INT);
                    $stmt->execute();

                    $filas = $stmt->fetchAll(PDO::FETCH_ASSOC);

                    $clientes = [];
                    foreach ($filas as $fila) {
                        $clientes[] = new Usuario(
                            $fila['dni'],
                            $fila['clave'],
                            $fila['nombre'],
                            $fila['apellidos'],
                            $fila['direccion'],
                            $fila['provincia'],
                            $fila['localidad'],
                            $fila['cp'],
                            $fila['telefono'],
                            $fila['email'],
                            $fila['rol'],
                            $fila['activo']
                        );

                    }
                    return $clientes;
                } catch (PDOException $e) {
                    return "Error en la búsqueda: " . $e->getMessage();
                }
        }

        //Función para listar un Cliente mediante su Dni
        public function listarCliente($dni) {
            $sql = "SELECT * FROM usuarios WHERE dni = :dni AND rol = 'cliente'";
            try {
                $stmt = $this->db->prepare($sql);
                $stmt->bindValue(':dni', $dni, PDO::PARAM_STR);
                $stmt->execute();
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
    
                if($result) {
                    return new Usuario($result['dni'], $result['clave'], $result['nombre'], 
                    $result['apellidos'], $result['direccion'], $result['provincia'], $result['localidad'], $result['cp'], 
                    $result['telefono'], $result['email'], $result['rol'], $result['activo']);
                    
                } else {
                    return "No se ha podido obtener la información del usuario.";
                }
            
            } catch (PDOException $e) {
                return "Se ha producido el siguiente error en la consulta: " . $e->getMessage();
            }
        }

        //Función para contar todos los empleados
        public function listarEmpleadosPaginados($limite, $offset, $orden = 'nombre', $orderDir = 'ASC') {


            try {
                $ordenesPermitidos = ['dni', 'nombre', 'email', 'activo']; // columnas válidas
                    if (!in_array($orden, $ordenesPermitidos)) {
                        $orden = 'nombre';
                    }

                    $orderDir = strtoupper($orderDir) === 'DESC' ? 'DESC' : 'ASC';

                    $sql = "SELECT * FROM usuarios WHERE rol = 'empleado' ORDER BY $orden $orderDir LIMIT :limit OFFSET :offset";

                    $stmt = $this->db->prepare($sql);
                    $stmt->bindValue(':limit', (int)$limite, PDO::PARAM_INT);
                    $stmt->bindValue(':offset', (int)$offset, PDO::PARAM_INT);
                    $stmt->execute();

                    $filas = $stmt->fetchAll(PDO::FETCH_ASSOC);

                    $empleados = [];
                    foreach ($filas as $fila) {
                        $empleados[] = new Usuario(
                            $fila['dni'],
                            $fila['clave'],
                            $fila['nombre'],
                            $fila['apellidos'],
                            $fila['direccion'],
                            $fila['provincia'],
                            $fila['localidad'],
                            $fila['cp'],
                            $fila['telefono'],
                            $fila['email'],
                            $fila['rol'],
                            $fila['activo']
                        );

                    }
                    return $empleados;
                } catch (PDOException $e) {
                    echo "Error en la búsqueda: " . $e->getMessage();
                    return [];
                }
        }

        //Función para listar un Empleado mediante su Dni
        public function listarEmpleado($dni) {
            $sql = "SELECT * FROM usuarios WHERE dni = :dni AND rol = 'empleado'";
            try {
                $stmt = $this->db->prepare($sql);
                $stmt->bindValue(':dni', $dni, PDO::PARAM_STR);
                $stmt->execute();
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
    
                if($result) {
                    return new Usuario($result['dni'], $result['clave'], $result['nombre'], 
                    $result['apellidos'], $result['direccion'], $result['provincia'], $result['localidad'], $result['cp'], 
                    $result['telefono'], $result['email'], $result['rol'], $result['activo']);
                    
                } else {
                    return "No se ha podido obtener la información del usuario.";
                }
            
            } catch (PDOException $e) {
                return "Se ha producido el siguiente error en la consulta: " . $e->getMessage();
            }
        }

        public function contarTodosLosEmpleados() {
            try {
                $sql = "SELECT COUNT(*) as total FROM usuarios WHERE rol = 'empleado'";
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
                return $resultado ? (int)$resultado['total'] : 0;
            } catch (PDOException $e) {
                echo "Error en contarTodosLosEmpleados: " . $e->getMessage();
                return 0;
            }
        }


}
?>
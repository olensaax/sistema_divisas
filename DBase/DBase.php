<? php 

class DBase{
    public function get_conexion() {

        $user = "root";
        $pass = "123456";
        $host = "localhost";
        $db = "divisasdb";
        $conexion = new PDO("mysql:host=$host;dbname=$db;port=3305;", $user);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conexion->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        return $conexion;
    }
}
?>
<?php
/**
 * Created by PhpStorm.
 * User: erandir
 * Date: 13/07/17
 * Time: 19:12
 */

use Core\Model\Conn;

require_once dirname(__DIR__).'/vendor/autoload.php';

$x = crypt('12345');

echo strlen($x);

$conn = Conn::getConnection();

$stmt        = $conn->query("SELECT * FROM produto");
$stmt->execute();

echo "<br /> <pre>";
var_dump($stmt->fetchAll(\PDO::FETCH_ASSOC));
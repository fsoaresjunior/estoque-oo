<?php
namespace Core\Request;

/**
 * Interface Request
 * @package Core\Request
 */
interface Request
{
    /**
     * Adiciona os dados ao atributo da classe.
     *
     * @param array $data
     *
     * @return mixed
     */
    public static function add(array $data);

    /**
     * Retorna todos os dados da requisição.
     *
     * @return mixed
     */
    public static function all();

    /**
     * Retorna um dado especifico da requisição.
     *
     * @param $input
     *
     * @return mixed
     */
    public static function input($input);
}
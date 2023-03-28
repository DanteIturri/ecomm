<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Producto_model extends CI_Model
{
    private $data_json = __DIR__ . '/data/productos.json';



    public function show($id = null)
    {
        $productos = json_decode(file_get_contents($this->data_json), true);


        if ($id !== null) {
            foreach ($productos as $producto) {
                if ($producto['id'] == $id) {
                    return $producto;
                }
            }

            return null;
        }

        return $productos;
    }

    public function save($data)
    {
        $productos = json_decode(file_get_contents($this->data_json), true);
        $ultimo_producto = end($productos);

        $new_id = $ultimo_producto['id'] + 1;
        $data['id'] = $new_id;
        $data['created_at'] = date("Y-m-d H:i:s");

        array_push($productos, $data);
        file_put_contents($this->data_json, json_encode($productos));

        return $new_id;
    }

    public function update($id, $data)
    {
        $productos = json_decode(file_get_contents($this->data_json), true);
        for ($i = 0; $i < count($productos); $i++) {
            if ($productos[$i]['id'] == $id) {
                $data['id'] = $id;
                $data['created_at'] = $productos[$i]['created_at'];
                $productos[$i] = $data;
                file_put_contents($this->data_json, json_encode($productos));
                return true;
            }
        }
        return false;
    }

    public function delete($id)
    {
        $productos = json_decode(file_get_contents($this->data_json), true);

        for ($i = 0; $i < count($productos); $i++) {
            if ($productos[$i]['id'] == $id) {
                array_splice($productos, $i, 1);
                file_put_contents($this->data_json, json_encode($productos));
                return true;
            }
        }

        return false;
    }
}

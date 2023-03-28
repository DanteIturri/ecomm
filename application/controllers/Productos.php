<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Productos extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('producto_model');
    }

    public function index()
    {
        $data['productos'] = $this->producto_model->show();
        $this->load->view('productos/index', $data);
    }

    public function create()
    {
        $this->load->view('productos/create');
    }

    public function store()
    {
        $data = array(
            'title' => $this->input->post('title'),
            'price' => intval($this->input->post('price')),
        );
        $this->producto_model->save($data);

        redirect(base_url('/'));
    }

    public function show($id)
    {
        $data['producto'] = $this->producto_model->show($id);
        $this->load->view('productos/show', $data);
    }

    public function edit($id)
    {
        $data['producto'] = $this->producto_model->show($id);
        $this->load->view('productos/edit', $data);
    }

    public function update($id)
    {
        $data = array(
            'title' => $this->input->post('title'),
            'price' => intval($this->input->post('price')),
        );
        $this->producto_model->update($id, $data);

        redirect(base_url('/'));
    }

    public function delete($id)
    {
        $resultado = $this->producto_model->delete($id);
        if ($resultado) {
            redirect(base_url('/'));
        } else {
            show_404();
        }
    }
}

/* End of file Productos.php and path \application\controllers\productos\Productos.php */

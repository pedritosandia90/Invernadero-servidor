<?php

namespace App\Controllers;

use App\Models\parametroModel;

class parametroController extends BaseController
{
    public function index()
    {
        // nueva instancia del modelo Puesto
        $parametroModel = new parametroModel();
        // obtener todos los puestos de la BD
        $data['parametros'] = $parametroModel->paginate(15);
        //Generar links de paginación
        $data['pager'] = $parametroModel->pager;
        return view('parametro/index', $data);
    }

    public function crear()
    {
        return view('parametro/crear');
    }

    public function registrar()
    {
        $parametroModel = new parametroModel();
        $parametroModel->insert([
            'parametros_nombre' => $this->request->getPost('parametros_nombre'),
            'frecuencia_dias' => $this->request->getPost('frecuencia_dias'),
            'valor_parametro' => $this->request->getPost('valor_parametro'),
            'comentario' => $this->request->getPost('comentario')
        ]);
        session()->setFlashdata('success', 'El parametro fue actualizado');
        return redirect()->to(base_url('parametros'));
    }
    public function editar($id)
    {
        $parametroModel = new parametroModel();
        $data['parametros'] = $parametroModel->find($id);
        $data['parametros_nombre'] = $parametroModel->findAll();
        $data['valor_parametro'] = $parametroModel->findAll();
        return view('parametro/editar', $data);
    }
    public function actualizar($id)
    {
        $parametroModel = new parametroModel();
        $parametroModel->update($id, [
            'parametros_nombre' => $this->request->getPost('parametros_nombre'),
            'frecuencia_dias' => $this->request->getPost('frecuencia_dias'),
            'valor_parametro' => $this->request->getPost('valor_parametro'),
            'comentario' => $this->request->getPost('comentario')
        ]);

        session()->setFlashdata('success', 'El parametro fue actualizado');
        return redirect()->to(base_url('parametros'));
    }
    public function eliminar($id)
    {
        $parametroModel = new parametroModel();
        $parametroModel->delete($id);
        session()->setFlashdata('sucess', 'El parametro fue eliminada');
        return redirect()->to(base_url('parametros'));
    }
}
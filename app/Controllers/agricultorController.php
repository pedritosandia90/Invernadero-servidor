<?php

namespace App\Controllers;

use App\Models\agricultorModel;

class agricultorController extends BaseController
{
    public function index()
    {
        // nueva instancia del modelo Puesto
        $agricultorModel = new agricultorModel();
        // obtener todos los puestos de la BD
        $data['agricultores'] = $agricultorModel->paginate(15);
        //Generar links de paginación
        $data['pager'] = $agricultorModel->pager;
        return view('agricultor/index', $data);
    }

    public function crear()
    {
        return view('agricultor/crear');
    }

    public function registrar()
    {
        $agricultorModel = new agricultorModel();
        $agricultorModel->insert([
            'Usuario' => $this->request->getPost('Usuario'),
            'ag_nombre_completo' => $this->request->getPost('ag_nombre_completo'),
            'contrasena' => $this->request->getPost('contrasena')
        ]);
        session()->setFlashdata('success', 'El agricultor fue actualizado');
        return redirect()->to(base_url('agricultores'));
    }
    public function editar($id)
    {
        $agricultorModel = new agricultorModel();
        $data['agricultor'] = $agricultorModel->find($id);
        return view('agricultor/editar', $data);
    }
    public function actualizar($id)
    {
        $agricultorModel = new agricultorModel();
        $agricultorModel->update($id, [
            'Usuario' => $this->request->getPost('Usuario'),
            'ag_nombre_completo' => $this->request->getPost('ag_nombre_completo'),
            'contrasena' => $this->request->getPost('contrasena')
        ]);

        session()->setFlashdata('success', 'El agricultor fue actualizado');
        return redirect()->to(base_url('agricultores'));
    }
    public function eliminar($id)
    {
        $agricultorModel = new agricultorModel();
        $agricultorModel->delete($id);
        session()->setFlashdata('sucess', 'La pparcela fue eliminada');
        return redirect()->to(base_url('agricultores'));
    }
}
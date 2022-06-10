<?php

namespace App\Controllers;

use App\Models\plantaModel;

class plantaController extends BaseController
{
    public function index()
    {
        // nueva instancia del modelo Puesto
        $plantaModel = new plantaModel();
        // obtener todos los puestos de la BD
        $data['planta'] = $plantaModel->paginate(15);
        //Generar links de paginación
        $data['pager'] = $plantaModel->pager;
        return view('plantas/index', $data);
    }

    public function crear()
    {
        return view('plantas/crear');
    }

    public function registrar()
    {
        $plantaModel = new plantaModel();
        $plantaModel->insert([
            'planta_nombre' => $this->request->getPost('planta_nombre'),
            'ambiente' => $this->request->getPost('ambiente'),
            'tipoluz' => $this->request->getPost('tipoluz'),
        ]);
        session()->setFlashdata('success', 'La planta fue actualizada');
        return redirect()->to(base_url('planta'));
    }
    public function editar($id)
    {
        $plantaModel = new plantaModel();
        $data['planta'] = $plantaModel->find($id);
        $data['planta_nombre'] = $plantaModel->findAll();
        return view('plantas/editar', $data);
    }
    public function actualizar($id)
    {
        $plantaModel = new plantaModel();
        $plantaModel->update($id, [
            'planta_nombre' => $this->request->getPost('planta_nombre'),
            'ambiente' => $this->request->getPost('ambiente'),
            'tipoluz' => $this->request->getPost('tipoluz'),
        ]);

        session()->setFlashdata('success', 'La planta fue actualizada');
        return redirect()->to(base_url('planta'));
    }
    public function eliminar($id)
    {
        $plantaModel = new plantaModel();
        $plantaModel->delete($id);
        session()->setFlashdata('sucess', 'La planta fue eliminada');
        return redirect()->to(base_url('planta'));
    }
}
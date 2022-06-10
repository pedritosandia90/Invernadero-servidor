<?php

namespace App\Controllers;

use App\Models\parcelaModel;
use App\Models\agricultorModel;

class parcelaController extends BaseController
{
    public function index()
    {
        // nueva instancia del modelo Puesto
        $parcelaModel = new parcelaModel();
        // obtener todos los puestos de la BD
        $data['parcela'] = $parcelaModel->paginate(15);
        //Generar links de paginación
        $data['pager'] = $parcelaModel->pager;
        return view('parcelas/index', $data);
    }

    public function crear()
    {
        $agricultorModel = new agricultorModel();
        $data['agricultores'] = $agricultorModel->findAll();
        $data['ag_nombre_completo'] = $agricultorModel->findAll();
        return view('parcelas/crear');
    }

    public function registrar()
    {
        $parcelaModel = new parcelaModel();
        $parcelaModel->insert([
            'id_parcela' => $this->request->getPost('id_parcela'),
            'extension_metros2' => $this->request->getPost('extension_metros2'),
            'id_agricultor' => $this->request->getPost('id_agricultor'),
            'id_planta' => $this->request->getPost('id_planta')
        ]);
        session()->setFlashdata('success', 'La parcela fue actualizada');
        return redirect()->to(base_url('parcela'));
    }
    public function editar($id)
    {
        $agricultorModel = new agricultorModel();
        $data['ag_nombre_completo'] = $agricultorModel->findAll();
        $parcelaModel = new parcelaModel();
        $data['parcela'] = $parcelaModel->find($id);
        return view('parcelas/editar', $data);
    }
    public function actualizar($id)
    {
        $parcelaModel = new parcelaModel();
        $parcelaModel->update($id, [
            'id_parcela' => $this->request->getPost('id_parcela'),
            'extension_metros2' => $this->request->getPost('extension_metros2'),
            'id_agricultor' => $this->request->getPost('id_agricultor'),
            'id_planta' => $this->request->getPost('id_planta')
        ]);

        session()->setFlashdata('success', 'La parcela fue actualizada');
        return redirect()->to(base_url('parcela'));
    }

    public function eliminar($id)
    {
        $parcelaModel = new parcelaModel();
        $parcelaModel->delete($id);
        session()->setFlashdata('sucess', 'La parcela fue eliminada');
        return redirect()->to(base_url('parcela'));
    }
}
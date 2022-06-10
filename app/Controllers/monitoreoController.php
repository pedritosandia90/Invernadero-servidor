<?php

namespace App\Controllers;

use App\Models\monitoreoModel;
use App\Models\parcelaModel;

class monitoreoController extends BaseController
{
    public function index()
    {
        // nueva instancia del modelo Puesto
        $monitoreoModel = new monitoreoModel();
        // obtener todos los puestos de la BD
        $data['monitoreos'] = $monitoreoModel->paginate(15);
        //Generar links de paginación
        $data['pager'] = $monitoreoModel->pager;
        return view('monitoreo/index', $data);
    }

    public function crear()
    {
        $parcelaModel = new parcelaModel();
        $data['parcelas'] = $parcelaModel -> findAll();
        return view('monitoreo/crear', $data);
    }

    public function registrar()
    {
        $monitoreoModel = new monitoreoModel();
        $monitoreoModel->insert([
            'fecha_monitoreo' => $this->request->getPost('fecha_monitoreo'),
            'id_parcela' => $this->request->getPost('id_parcela')
        ]);
        session()->setFlashdata('success', 'El monitoreo fue actualizado');
        return redirect()->to(base_url('monitoreos'));
    }
    public function editar($id)
    {
        $parcelaModel = new parcelaModel();
        $data['parcelas'] = $parcelaModel -> findAll();
        $monitoreoModel = new monitoreoModel();
        $data['monitoreo'] = $monitoreoModel->find($id);
        return view('monitoreo/editar', $data);
    }
    public function actualizar($id)
    {
        $monitoreoModel = new monitoreoModel();
        $monitoreoModel->update($id, [
            'fecha_monitoreo' => $this->request->getPost('fecha_monitoreo'),
            'id_parcela' => $this->request->getPost('id_parcela')
        ]);

        session()->setFlashdata('success', 'El monitoreo fue actualizado');
        return redirect()->to(base_url('monitoreos'));
    }
    public function eliminar($id)
    {
        $monitoreoModel = new monitoreoModel();
        $monitoreoModel->delete($id);
        session()->setFlashdata('sucess', 'el Monitoreo fue eliminada');
        return redirect()->to(base_url('monitoreos'));
    }
}
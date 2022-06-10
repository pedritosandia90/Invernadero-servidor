<?php

namespace App\Controllers;

use App\Models\monitoreodetModel;
use App\Models\parametroModel;
use App\Models\monitoreoModel;

class monitoreodetController extends BaseController
{
    public function index()
    {
        // nueva instancia del modelo Puesto
        $monitoreodetModel = new monitoreodetModel();
        // obtener todos los puestos de la BD
        $data['det_mon_par'] = $monitoreodetModel->paginate(15);
        //Generar links de paginación
        $data['pager'] = $monitoreodetModel->pager;
        return view('det_mon_par/index', $data);
    }

    public function crear($id_parcela)
    {
        
        $parametroModel = new parametroModel();
        $data['parametros'] = $parametroModel->findAll();
        $data['id_parcela'] = $id_parcela;
        return view('det_mon_par/crear', $data);
    }

    public function registrar($id_parcela)
    {
        $monitoreodetModel = new monitoreodetModel();
        $monitoreoModel = new monitoreoModel();
        $monitoreo = $monitoreoModel -> insert([
        'fecha_monitoreo' => date("Y-m-d"),
        'id_parcela' => $id_parcela
        ]);
        $monitoreodetModel->insert([
            'id_parametros' => $this->request->getPost('id_parametros'),
            'id_monitoreo' => $monitoreo,
            'observaciones_monitoreo' => $this->request->getPost('observaciones_monitoreo'),
            'valor_parametro' => $this->request->getPost('valor_parametro'),
        ]);
        session()->setFlashdata('success', 'El monitoreo fue actualizado');
        return redirect()->to(base_url('detalle'));
    }
    public function editar($id)
    {
        $monitoreodetModel = new monitoreodetModel();
        $data['det_mon_par'] = $monitoreodetModel->find($id);
        $data['observaciones_monitoreo'] = $monitoreodetModel->findAll();
        $data['valor_parametro'] = $monitoreodetModel->findAll();
        return view('det_mon_par/editar', $data);
    }
    public function actualizar($id)
    {
        $monitoreodetModel = new monitoreodetModel();
        $monitoreodetModel->update($id, [
            'id_detalle_planta_datos' => $this->request->getPost('id_detalle_planta_datos'),
            'id_parametros' => $this->request->getPost('id_parametros'),
            'id_monitoreo' => $this->request->getPost('id_monitoreo'),
            'observaciones_monitoreo' => $this->request->getPost('observaciones_monitoreo'),
            'valor_parametro' => $this->request->getPost('valor_parametro'),
        ]);

        session()->setFlashdata('success', 'El monitoreo fue actualizado');
        return redirect()->to(base_url('detalle'));
    }
    public function eliminar($id)
    {
        $monitoreodetModel = new monitoreodetModel();
        $monitoreodetModel->delete($id);
        session()->setFlashdata('sucess', 'El monitoreo fue eliminado');
        return redirect()->to(base_url('detalle'));
    }
}
<?php

namespace App\Controllers;
use App\Models\monitoreoModel;
use App\Models\parcelaModel;

class Home extends BaseController
{

    // * muestra vista de formulario de login
    public function index()
    {
        return view('auth/login');
    }

    //funcion para cargar vistas
    public function view($page = 'inicio')
    {
        //Este if checha si la vista existe, si no muesta un mensaje de error,
        // podemos diseñar una vista para que muestre el error, en lugar del error que muestra codeigniter
        if (!is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }

        echo view('pages/head'); //carga el head de neustro HTML, aqui estan todos los links para CSS y scripts de JS 
        echo view('pages/navbar'); // carga el munu de navegacion de nuestra app
        echo view('pages/' . $page); // carga el contenido que tenemos en nuestra app
        echo view('pages/footer'); // carga el pie de pagina de la app
    }

    // * FUNCIONES DE REPORTES
    public function reportes()
    {
        return view('reportes');
    }

    public function MonitorioPorDia()
    {
        $parcelaModel = new parcelaModel();
        $data['MonitoreoPorDia'] = $parcelaModel
            ->select('parcela.id_parcela, monitoreo.fecha_monitoreo, planta.planta_nombre, parametros.parametros_nombre, det_mon_par.valor_parametro')
            ->join('monitoreo', ' monitoreo.id_parcela = parcela.id_parcela')
            ->join('planta', 'planta.id_planta = parcela.id_planta')
            ->join('det_mon_par', 'det_mon_par.id_monitoreo = monitoreo.id_monitoreo')
            ->join('parametros', 'parametros.id_parametros = det_mon_par.id_parametros')
            ->paginate(25);
        $data['pager'] = $parcelaModel->pager;
        return view('reportesMonitoreoPorDia', $data);
    }
    public function ListadoParcelas()
    {
        $parcelaModel = new parcelaModel();
        $data['ListadoParcelas'] = $parcelaModel
            ->select('parcela.id_parcela, monitoreo.fecha_monitoreo, planta.planta_nombre')
            ->join('monitoreo', ' monitoreo.id_parcela = parcela.id_parcela')
            ->join('planta', 'planta.id_planta = parcela.id_planta')
            ->join('det_mon_par', 'det_mon_par.id_monitoreo = monitoreo.id_monitoreo')
            ->orderBy('fecha_monitoreo', 'desc')
            ->paginate(25);
        $data['pager'] = $parcelaModel->pager;
        return view('reportesListadoParcelas', $data);
    }

    public function ListadoParametros()
    {
        $parcelaModel = new parcelaModel();
        $data['ListadoParametros'] = $parcelaModel
            ->select('parametros.parametros_nombre, parcela.id_parcela, det_mon_par.valor_parametro')
            ->join('monitoreo', ' monitoreo.id_parcela = parcela.id_parcela')
            ->join('planta', 'planta.id_planta = parcela.id_planta')
            ->join('det_mon_par', 'det_mon_par.id_monitoreo = monitoreo.id_monitoreo')
            ->join('parametros', 'parametros.id_parametros = det_mon_par.id_parametros')
            ->orderBy('parametros_nombre', 'asc')
            ->paginate(25);
        $data['pager'] = $parcelaModel->pager;
        return view('reportesListadoParametros', $data);
    }
}

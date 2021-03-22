<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPJasper\PHPJasper;

class ReporteController extends Controller
{
    public function reporteEmpresarios()
    {
    	$input = 'C:\Users\luisb\JaspersoftWorkspace\MyReports\Empleados.jasper';
		$output = 'C:\Users\luisb\JaspersoftWorkspace\MyReports';
		$options = [
		    'format' => ['pdf'],
		    'locale' => 'en',
		    'params' => [],
		    'db_connection' => [
		        'driver' => 'postgres', //mysql, ....
		        'username' => 'postgres',
		        'password' => '123456',
		        'host' => 'localhost',
		        'database' => 'empresacontigo',
		        'port' => '65433'
		    ]
		];

		$jasper = new PHPJasper;

		return $jasper->process(
		        $input,
		        $output,
		        $options
		)->output();

		return response()->file($output, 'Empresas.pdf');
    }

    public function compilarEmpresarios()
    {
    	$input = 'C:\Users\luisb\JaspersoftWorkspace\MyReports\Empleados.jrxml';

		$jasper = new PHPJasper;
		$jasper->compile($input)->execute();

		return "Reporte compilado";
    }
}

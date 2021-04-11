<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPJasper\PHPJasper;
use Illuminate\Support\Facades\Auth;

class ReporteController extends Controller
{
    public function reporteEmpresarios()
    {
        $user = Auth::id();
    	$input = 'C:\Users\luisb\JaspersoftWorkspace\MyReports\Empleados.jasper';
		$output = 'C:\Users\luisb\JaspersoftWorkspace\MyReports';
		$options = [
		    'format' => ['pdf'],
		    'locale' => 'en',
		    'params' => ['Puser'=> $user],
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

		$jasper->process(
		        $input,
		        $output,
		        $options
		)->execute();

		// )->output();

	return response()->file($output. '\Empleados.pdf');
    }

    public function compilarEmpresarios()
    {
    	$input = 'C:\Users\luisb\JaspersoftWorkspace\MyReports\Empleados.jrxml';

		$jasper = new PHPJasper;
		$jasper->compile($input)->execute();

		return "Reporte compilado";
    }

    public function VerEmpresarios()
    {
    	$user = Auth::id();

    	return redirect()->route('admin/reporte/', ['id' => $user]);
    }
}

<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Requests;
use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{
    public function index(){
        return 'Controlador ArticlesController';
    }
}
<?php
namespace App\Http\Controllers;

use App\Facades\MyService;
use App\Myclasses\MyServiceInterface;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index(int $id = -1)
    {
        MyService::setId($id);

        $data = [
            'msg' => MyService::say(),
            'data' => MyService::alldata()
        ];

        return view('hello.index', $data);
    }
}

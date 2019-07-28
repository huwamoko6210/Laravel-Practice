<?php
namespace App\Http\Controllers;

use App\Myclasses\MyServiceInterface;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index(MyServiceInterface $myservice, int $id = -1)
    {
        $myservice->setId($id);

        $data = [
            'msg' => $myservice->say($id),
            'data' => $myservice->alldata()
        ];

        return view('hello.index', $data);
    }

    public function other(Request $request)
    {
        $data = [
            'msg' => $request->bye,
        ];

        return view('hello.index', $data);
    }
}

<?php
namespace App\Http\Controllers;

use App\Myclasses\MyService;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index(MyService $myservice, int $id = -1)
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

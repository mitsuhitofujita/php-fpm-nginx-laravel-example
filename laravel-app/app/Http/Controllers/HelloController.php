<?php

namespace App\Http\Controllers;

use App\Http\Requests\HelloIndexRequest;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index(HelloIndexRequest $request)
    {
        return view('hello/index', ['message' => "Hello, {$this->getNameOrWorld($request->input('name'))}."]);
    }

    public function getNameOrWorld(?string $name): string
    {
        if ($name === null) {
            return 'World';
        }
        return $name;
    }
}

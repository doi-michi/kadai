<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
  
    public function index(){
      return view('hello.index',['message'=>'Hello!']);
    }



}


















      // return <<<EOF
      // <html>
      // <head>
      //     <title>Hello/Index</title>
      //     <style>
      //       body {
      //         font-size:16pt;
      //         color:#999;
      //       }
      //       h1 {
      //         font-size:100pt;
      //         text-align:right;
      //         color:#f6f6f6;
      //         margin:-50px 0px -100px 0px;
      //       }
      //     </style>
      //   </head>
      //   <body>
      //     <h1>Index</h1>
      //   <p>This is a sample page with php-template.</p>
      //   </body>
      // </html>
      // EOF;
        // }

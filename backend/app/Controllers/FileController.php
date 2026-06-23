<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class FileController extends Controller
{
    public function show($filename)
    {
        $path = WRITEPATH . 'uploads/' . $filename;
        if (!is_file($path)) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
        return $this->response->download($path, null)->setFileName($filename);
    }
}

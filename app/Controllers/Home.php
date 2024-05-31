<?php

namespace App\Controllers;
use App\Models\MenuModel;

use CodeIgniter\Controller;

class Home extends Controller
{
    private $menuModel;

    public function __construct() {
        $this->menuModel = new MenuModel();
    }

    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $menus = $this->menuModel->findAll();

        $payload = [
            "menus" => $menus
        ];

        echo view('home/index', $payload);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        return view('home/new');

    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $photo = $this->request->getFile('photo');

        if ($photo->getSizeByUnit() > 0) {
            $fileName = $photo->getRandomName(); // Mendapatkan nama file baru secara acak

            $photo->move('photos', $fileName); // Memindahkan file ke public/photos dengan nama acak
        }

        $payload = [
            "menu" => $this->request->getPost('menu'),
            "price" => (int) $this->request->getPost('price'),
            "category" => $this->request->getPost('category'),
            "photo" => $fileName, 
        ];

        $this->menuModel->insert($payload);
        return redirect()->to('/home');
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
    $menu = $this->menuModel->find($id);
    
    if (!$menu) {
        throw new \Exception("Data not found!");   
    }
    
    return view('home/edit', ["data" => $menu]);
    }

    public function update($id = null)
    {
    $menu = $this->menuModel->find($id);

    $fileName = $menu['photo'];
    $photo = $this->request->getFile('photo');

    if ($photo->getSizeByUnit() > 0) {
        $fileName = $photo->getRandomName(); // Mendapatkan nama file baru secara acak
        $photo->move('photos', $fileName); // Memindahkan file ke public/photos dengan nama acak
    }

    $payload = [
        "menu" => $this->request->getPost('menu'),
        "price" => (int) $this->request->getPost('price'),
        "category" => $this->request->getPost('category'),
        "photo" => $fileName,
    ];

    $this->menuModel->update($id, $payload);
    return redirect()->to('/home');
    }


    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $this->menuModel->delete($id);
        return redirect()->to('/home');
    }
}

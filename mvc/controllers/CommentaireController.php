<?php

namespace App\Controllers;

use App\Models\Commentaire;
use App\Providers\View;
use App\Providers\Validator;



class CommentaireController
{

    public function index()
    {

        $commentaire = new Commentaire;
        $select = $commentaire->select();
        //print_r($select);
        //include('views/commentaire/index.php');
        if ($select) {
            return View::render('commentaire/index', ['commentaires' => $select]);
        } else {
            return View::render('error');
        }
    }

    public function show($data = [])
    {
        if (isset($data['id']) && $data['id'] != null) {

            $commentaire = new Commentaire;
            $selectId = $commentaire->selectId($data['id']);
            if ($selectId) {
                return View::render('/commentaire/show', ['commentaire' => $selectId]);
            } else {
                return View::render('error');
            }
        } else {
            return View::render('error', ['message' => 'Could not find this data']);
        }
    }

    public function create()
    {
        return View::render('/commentaire/create');
    }

    public function store($data)
    {

        $validator = new Validator;
        $validator->field('contenu', $data['contenu'], 'Commentaire')->min(3)->required();
        $validator->field('date', $data['date'])->required();
        $validator->field('blog_user_id', $data['blog_user_id'])->required();
        $validator->field('blog_article_id', $data['blog_article_id'])->required();



        if ($validator->isSuccess()) {
            $commentaire = new Commentaire;
            var_dump($commentaire);
            $insert = $commentaire->insert($data);
            if ($insert) {
                return View::redirect('commentaire');
            } else {
                return View::render('error');
            }
        } else {
            $errors = $validator->getErrors();
            //print_r($errors);
            return View::render('/commentaire/create', ['errors' => $errors, 'commentaire' => $data]);
        }
    }

    public function edit($data = [])
    {

        if (isset($data['id']) && $data['id'] != null) {
            $commentaire = new Commentaire;
            $selectId = $commentaire->selectId($data['id']);
            if ($selectId) {
                return View::render('commentaire/edit', ['commentaire' => $selectId]);
            } else {
                return View::render('error');
            }
        } else {
            return View::render('error', ['message' => 'Could not find this data']);
        }
    }
    public function update($data, $get)
    {
        // echo $get['id'];

        $validator = new Validator;
        $validator->field('contenu', $data['contenu'], 'Le nom')->min(3)->required();
        $validator->field('date', $data['date'])->required();


        if ($validator->isSuccess()) {
            $commentaire = new Commentaire;
            $update = $commentaire->update($data, $get['id']);
            if ($update) {
                return View::redirect('commentaire');
            } else {
                return View::render('error');
            }
        } else {
            $errors = $validator->getErrors();
            //print_r($errors);
            return View::render('commentaire/edit', ['errors' => $errors, 'commentaire' => $data]);
        }
    }

    public function delete($data)
    {
        $commentaire = new  Commentaire;
        $delete = $commentaire->delete($data['id']);
        if ($delete) {
            return View::redirect('commentaire');
        } else {
            return View::render('error');
        }
    }
}

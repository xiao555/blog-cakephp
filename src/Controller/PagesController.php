<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;

/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link http://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController
{

    /**
     * Displays a view
     *
     * @param string ...$path Path segments.
     * @return void|\Cake\Network\Response
     * @throws \Cake\Network\Exception\ForbiddenException When a directory traversal attempt.
     * @throws \Cake\Network\Exception\NotFoundException When the view file could not
     *   be found or \Cake\View\Exception\MissingTemplateException in debug mode.
     */
    public function display(...$path)
    {
        $count = count($path);
        if (!$count) {
            return $this->redirect('/');
        }
        if (in_array('..', $path, true) || in_array('.', $path, true)) {
            throw new ForbiddenException();
        }
        $page = $subpage = null;

        if (!empty($path[0])) {
            $page = $path[0];
        }
        if (!empty($path[1])) {
            $subpage = $path[1];
        }
        $this->set(compact('page', 'subpage'));

        try {
            $this->render(implode('/', $path));
        } catch (MissingTemplateException $e) {
            if (Configure::read('debug')) {
                throw $e;
            }
            throw new NotFoundException();
        }
    }

    public function home() {
        $this->loadModel('Articles');
        $this->paginate = [
            'contain' => ['categories'],
            'limit' => 10,
            'order' => [
                'Articles.created' => 'desc'
            ]
        ];

        $articles = $this->paginate($this->Articles->find('all')->where(['status' => 1]));
        $this->set(compact('articles'));

        $this->loadModel('Categories');
        $categories = $this->Categories->find('all');
        $this->set(compact('categories'));

    }

    public function view($slug = NULL) {
        $this->loadModel('Articles');
        $article = $this->Articles->find('all')->where(['Articles.slug' => $slug, 'status' => 1])->contain(['categories'])->first();
        if(!empty($article)) {
            $this->loadModel('category_article');
            $categorie_id = $this->category_article->find('all')->where(['article_id' => $article->id])->first()->category_id;
            $this->loadModel('Categories');
            $category = $this->Categories->find('all')->where(['id' => $categorie_id])->first();
            $this->set(compact('category'));
            $this->set('title_of_layout', $article->title);
            $this->set(compact('article'));
        } else {
            $this->viewBuilder()->templatePath('Layout/');
            $this->render('404');
        }
    }
}

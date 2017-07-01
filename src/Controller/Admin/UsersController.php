<?php
/**
 * Created by PhpStorm.
 * User: xiao555
 * Date: 2017/6/30
 * Time: 上午12:18
 */

namespace App\Controller\Admin;

use Cake\Auth\DefaultPasswordHasher;

class UsersController extends AppController {
    public function index() {
        $this->set('title_of_layout', 'Users');
        $this->loadModel('Users');
        $user = $this->Users->find()->first();
        if ($this->request->is(['post','put'])) {
            //Password hash
            $password_hash = new DefaultPasswordHasher;
            $this->request->data['password'] = $password_hash->hash($this->request->data['password']);
            $this->request->data['modified'] = date('Y-m-d H:i:s');
            $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->set('The user has been updated.',
                    ['element' => 'success',
                        'params' => [
                            'class' => 'success'
                        ]]
                );
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->set('Unable to update user.',
                ['element' => 'error',
                    'params' => [
                        'class' => 'danger'
                    ]]
            );
        }
        $this->set(compact('user'));
    }
}
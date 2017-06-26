<?php
use Migrations\AbstractMigration;
use Cake\ORM\TableRegistry;
use Cake\Auth\DefaultPasswordHasher;

class CreateUsers extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('users');
        $table->addColumn('username', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('password', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('admin', 'integer', [
            'default' => 0,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('email', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('created', 'timestamp', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('modified', 'timestamp', [
            'default' => null,
            'null' => true,
        ]);
        $table->create();

        $this->init_admin();
    }

    public function init_admin() {
      date_default_timezone_set('Asia/Shanghai');
      $usersTable = TableRegistry::get('Users');
      $user = $usersTable->newEntity();
      $user->set('username', 'admin');
      $user->set('password', (new DefaultPasswordHasher)->hash('admin'));
      $user->set('admin', '1');
      $user->set('email', '1335497539@qq.com');
      $user->set('created', date('Y-m-d H:i:s'));
      $usersTable->save($user);
    }
}

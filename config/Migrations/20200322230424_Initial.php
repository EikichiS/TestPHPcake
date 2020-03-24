<?php
use Migrations\AbstractMigration;

class Initial extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()         
    {
        $users = $this->table('users');
        $users->addColumn('username','string',['limit' => 50, 'null' => true, 'default' => null])
            ->addColumn('password','string',['limit' => 255, 'null' => true, 'default' => null])
            ->addColumn('role','string',['limit' => 20, 'null' => true, 'default' => null])
            ->addColumn('created', 'datetime')
            ->addColumn('modified', 'datetime', ['null' => true, 'default' => null])
            ->save();
    }
}

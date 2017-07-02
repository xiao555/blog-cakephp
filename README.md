# Blog-CakePHP

This is a blogging web applications written in PHP 7.1.5 with [CakePHP](http://cakephp.org) 3.x.

But it has not yet been completed, I will finish it in the next few weeks.

### Usage

require: PHP, Mysql, Composer

1. `git clone https://github.com/xiao555/blog-cakephp.git && cd blog-cakephp`
2. `composer update`
3. Create MySQL database.
4. configure the following files in `config/`: `app.php`,`blog.config.php`.
5. configure `config/Migrations/*CreateUsers.php` to create admin in function `init_admin`.
6. Run migrations by running `bin/cake migrations migrate`.
7. Mark the migration completed by running `bin/cake migrations mark_migrated`.
8. Now run `bin/cake` to start server. Running in `http://localhost:8765/`. If you want another port, just run `bin/cake -p [someport]`.

### TODO

1. Optimize the code.
2. Develop a set of front-end frame


### Log

#### 2017.6.26

Learn to use bake to create a migrations file. Although it can automatically generate code, but still need to make some adjustments to the code.

#### 2017.6.28

Create these pages:

    /
    /admin
    /admin/categories/
    /logout
    
Learn the Auth, Pagination, Routing and Controller of CakePHP.

And find it really makes building web applications simpler, faster, while requiring less code.

#### 2017.6.29

Create these pages:

    /admin/articles
    /admin/users
    
And I use [Bootstrap](http://getbootstrap.com/) to create my theme. 
(emmmmm...Become a Bootstrap engineer.)

#### 2017.6.30

今天只做了一点微小的工作...

#### 2017.7.2

基本的blog功能完成，包含posts，categories，单独一个admin功能，ui比较粗糙，总之，完结撒花，准备后天的考试了，开始预习2333
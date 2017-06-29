bin/cake bake migration CreateArticles title:string slug:string description:text content:text status:integer  created modified
sleep 1
bin/cake bake migration CreateCategories name:string
sleep 1
bin/cake bake migration CreateCategoryArticle article_id:integer category_id:integer
sleep 1
bin/cake bake migration CreateUsers username:string password:string admin:integer email:string created modified
sleep 1

bin/cake bake migration CreateArticles title:string slug:string description:text content:text status:integer  created modified
sleep 1
bin/cake bake migration CreateTags name:string
sleep 1
bin/cake bake migration CreateArticle_tag article_id:integer tag_id:integer
sleep 1
bin/cake bake migration CreateUsers username:string password:string admin:integer email:string created modified

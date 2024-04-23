<?php
    include_once("templates/header.php");

    if(isset($_GET['id']))
    {
        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post){
            if($post['id'] == $postId){
                $currentPost = $post;
            }
        }

    }
?>
<main id="post-container">
    <div class="content-container">
        <h1 id="main-title"><?= $currentPost['title'] ?></h1>
        <p class="post-description"><?= $currentPost['description'] ?></p>
        <div class="img-container">
            <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?> " alt="<?= $currentPost['title'] ?>">
        </div>
        <p class="post-content">
           Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio atque nam ea quaerat ut natus vitae id consequuntur, nesciunt inventore aliquam labore odit cumque beatae? Dolorum similique earum error laboriosam!
           Reiciendis cupiditate temporibus odit, dicta praesentium quis hic autem quam libero perferendis necessitatibus tenetur aperiam a dolores. Corporis recusandae similique cumque id alias, quam dolorum nesciunt minus ipsam dignissimos omnis?
           Eum consequuntur ratione quibusdam odio aperiam provident. Maiores, ipsa illum? Iure modi voluptatem accusantium velit expedita numquam at in harum nobis eius quasi pariatur aliquam sunt nostrum, tempore, ratione ab?
           Corrupti, consequuntur. Aut inventore fuga natus! Hic totam delectus, autem inventore doloribus voluptas modi explicabo perspiciatis, incidunt ab ratione possimus repellat quam, nihil provident cum tenetur sequi! Voluptatum, iste dolores.
           Quaerat veritatis itaque, deserunt eum quia doloribus est tenetur harum corporis voluptate nemo minima aspernatur, saepe esse cupiditate, totam inventore nostrum similique. Eos, accusantium cum nobis molestiae alias eum sunt?
        </p>
        <p class="post-content">
           Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio atque nam ea quaerat ut natus vitae id consequuntur, nesciunt inventore aliquam labore odit cumque beatae? Dolorum similique earum error laboriosam!
           Reiciendis cupiditate temporibus odit, dicta praesentium quis hic autem quam libero perferendis necessitatibus tenetur aperiam a dolores. Corporis recusandae similique cumque id alias, quam dolorum nesciunt minus ipsam dignissimos omnis?
           Eum consequuntur ratione quibusdam odio aperiam provident. Maiores, ipsa illum? Iure modi voluptatem accusantium velit expedita numquam at in harum nobis eius quasi pariatur aliquam sunt nostrum, tempore, ratione ab?
           Corrupti, consequuntur. Aut inventore fuga natus! Hic totam delectus, autem inventore doloribus voluptas modi explicabo perspiciatis, incidunt ab ratione possimus repellat quam, nihil provident cum tenetur sequi! Voluptatum, iste dolores.
           Quaerat veritatis itaque, deserunt eum quia doloribus est tenetur harum corporis voluptate nemo minima aspernatur, saepe esse cupiditate, totam inventore nostrum similique. Eos, accusantium cum nobis molestiae alias eum sunt?
        </p>
    </div>
    <aside id="nav-container">
    <h3 id="tags-title">Tags</h3>
    <ul id="tag-list">
        <?php foreach($currentPost['tags'] as $tag): ?>
            <l1><a href="#"><?= $tag ?></a></li>
        <?php endforeach;?>
    </ul>
    <h3 id="categories-title">Categorias</h3>
    <ul id="categories-list">
        <?php foreach($categories as $category): ?>
            <l1><a href="#"><?= $category ?></a></li>
        <?php endforeach;?>      
    </ul>

</aside>

</main>


    
<?php
    include_once("templates/footer.php");
?>
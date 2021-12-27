<?php 
    include_once('templates/header.php');
    if(isset($_GET['id'])){
        $post_id = $_GET['id'];
        $current_post;

        foreach($posts as $post){
            if($post['id'] == $post_id){
                $current_post = $post;
            }
        }
    }
?>
<main id="post-container-post">
    <div class="content-container">
        <h1 id="main-title"><?= $current_post['title']?></h1>
        <p id="post-description"><?=$current_post['description'] ?></p>
        <div class="img-container">
        <img src="<?=$BASE_URL?>/img/<?=$current_post['img']?>" title="<?=$current_post['title']?>">
        <p class="post-content">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam blanditiis ipsum odit dolor voluptas, pariatur vero minima fugiat asperiores? Temporibus distinctio necessitatibus et eos deleniti, id unde perspiciatis repellat dolor!
    Labore perspiciatis voluptatem quam molestias recusandae soluta inventore alias. Exercitationem necessitatibus delectus maiores fugit! Minima, facere enim. Veritatis in illo fugiat veniam ex, consequuntur ducimus provident blanditiis itaque deleniti eos?
    Impedit minus praesentium veniam minima est quaerat labore, velit, eos tempore fuga consectetur rerum mollitia dolor? Id doloremque labore molestiae nihil mollitia ipsum voluptates, magni possimus consectetur aut, voluptas aliquid.
    Enim ipsa repudiandae sint ex consequatur laudantium, iusto in facilis nesciunt perferendis et vel itaque quasi beatae ad animi fugit corporis quaerat maxime? Harum, iste quis dolorem iure esse ea?
    Illo in hic ea. Reiciendis itaque tempore fugiat dolores. Sed dolor culpa nemo ducimus tempora eius enim obcaecati maiores dolore quidem dicta non eligendi nobis, beatae facilis quasi rem adipisci.</p>
    <p class="post-content">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam blanditiis ipsum odit dolor voluptas, pariatur vero minima fugiat asperiores? Temporibus distinctio necessitatibus et eos deleniti, id unde perspiciatis repellat dolor!
    Labore perspiciatis voluptatem quam molestias recusandae soluta inventore alias. Exercitationem necessitatibus delectus maiores fugit! Minima, facere enim. Veritatis in illo fugiat veniam ex, consequuntur ducimus provident blanditiis itaque deleniti eos?
    Impedit minus praesentium veniam minima est quaerat labore, velit, eos tempore fuga consectetur rerum mollitia dolor? Id doloremque labore molestiae nihil mollitia ipsum voluptates, magni possimus consectetur aut, voluptas aliquid.
    Enim ipsa repudiandae sint ex consequatur laudantium, iusto in facilis nesciunt perferendis et vel itaque quasi beatae ad animi fugit corporis quaerat maxime? Harum, iste quis dolorem iure esse ea?
    Illo in hic ea. Reiciendis itaque tempore fugiat dolores. Sed dolor culpa nemo ducimus tempora eius enim obcaecati maiores dolore quidem dicta non eligendi nobis, beatae facilis quasi rem adipisci.</p>
    <p class="post-content">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam blanditiis ipsum odit dolor voluptas, pariatur vero minima fugiat asperiores? Temporibus distinctio necessitatibus et eos deleniti, id unde perspiciatis repellat dolor!
    Labore perspiciatis voluptatem quam molestias recusandae soluta inventore alias. Exercitationem necessitatibus delectus maiores fugit! Minima, facere enim. Veritatis in illo fugiat veniam ex, consequuntur ducimus provident blanditiis itaque deleniti eos?
    Impedit minus praesentium veniam minima est quaerat labore, velit, eos tempore fuga consectetur rerum mollitia dolor? Id doloremque labore molestiae nihil mollitia ipsum voluptates, magni possimus consectetur aut, voluptas aliquid.
    Enim ipsa repudiandae sint ex consequatur laudantium, iusto in facilis nesciunt perferendis et vel itaque quasi beatae ad animi fugit corporis quaerat maxime? Harum, iste quis dolorem iure esse ea?
    Illo in hic ea. Reiciendis itaque tempore fugiat dolores. Sed dolor culpa nemo ducimus tempora eius enim obcaecati maiores dolore quidem dicta non eligendi nobis, beatae facilis quasi rem adipisci.</p>
    <p class="post-content">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam blanditiis ipsum odit dolor voluptas, pariatur vero minima fugiat asperiores? Temporibus distinctio necessitatibus et eos deleniti, id unde perspiciatis repellat dolor!
    Labore perspiciatis voluptatem quam molestias recusandae soluta inventore alias. Exercitationem necessitatibus delectus maiores fugit! Minima, facere enim. Veritatis in illo fugiat veniam ex, consequuntur ducimus provident blanditiis itaque deleniti eos?
    Impedit minus praesentium veniam minima est quaerat labore, velit, eos tempore fuga consectetur rerum mollitia dolor? Id doloremque labore molestiae nihil mollitia ipsum voluptates, magni possimus consectetur aut, voluptas aliquid.
    Enim ipsa repudiandae sint ex consequatur laudantium, iusto in facilis nesciunt perferendis et vel itaque quasi beatae ad animi fugit corporis quaerat maxime? Harum, iste quis dolorem iure esse ea?
    Illo in hic ea. Reiciendis itaque tempore fugiat dolores. Sed dolor culpa nemo ducimus tempora eius enim obcaecati maiores dolore quidem dicta non eligendi nobis, beatae facilis quasi rem adipisci.</p>
    <p class="post-content">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam blanditiis ipsum odit dolor voluptas, pariatur vero minima fugiat asperiores? Temporibus distinctio necessitatibus et eos deleniti, id unde perspiciatis repellat dolor!
    Labore perspiciatis voluptatem quam molestias recusandae soluta inventore alias. Exercitationem necessitatibus delectus maiores fugit! Minima, facere enim. Veritatis in illo fugiat veniam ex, consequuntur ducimus provident blanditiis itaque deleniti eos?
    Impedit minus praesentium veniam minima est quaerat labore, velit, eos tempore fuga consectetur rerum mollitia dolor? Id doloremque labore molestiae nihil mollitia ipsum voluptates, magni possimus consectetur aut, voluptas aliquid.
    Enim ipsa repudiandae sint ex consequatur laudantium, iusto in facilis nesciunt perferendis et vel itaque quasi beatae ad animi fugit corporis quaerat maxime? Harum, iste quis dolorem iure esse ea?
    Illo in hic ea. Reiciendis itaque tempore fugiat dolores. Sed dolor culpa nemo ducimus tempora eius enim obcaecati maiores dolore quidem dicta non eligendi nobis, beatae facilis quasi rem adipisci.</p>

    </div>
 
    </div>
    <aside class="nav-container">
    <h3 id="tag-title">Tags</h3>
    <ul id="tag-list">
                    <?php foreach($current_post['tags'] as $tag):?>
                        <li><a href="#"><?=$tag?></a></li> 
                    <?php endforeach;?>
    </ul>
    <h3 id="categories-title">Categorias</h3>
    <ul id="categories-list">
                    <?php foreach($categories as $category):?>
                       <li><a href="#"><?=$category?></a></li> 
                    <?php endforeach;?>
    </ul>
</aside>
</main>

<?php 
    include_once("templates/footer.php");
?>
</html>
<?php 
  include_once("templates/header.php");

  if(isset($_GET['id'])) {

    $postId = $_GET['id'];
    $currentPost;

    foreach($posts as $post) {
        if($post['id'] == $postId) {
            $currentPost = $post;
        }
    }
  }
?>
  <main id="post-container">
    <div class="content-container">
      <h1 id="main-title"><?= $currentPost['title'] ?></h1>
      <p id="post-description"><?= $currentPost['title'] ?></p>
      <div class="img-container">
        <img src="<?= $BASE_URL ?>/img/<?= $currenPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
      </div>
      <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam neque ea officia. Adipisci expedita sit facere corrupti nulla reprehenderit corporis dolor rerum? Ab aliquid, rem culpa autem inventore animi nobis.
      In voluptatibus cum saepe aperiam nesciunt debitis, sit reprehenderit corrupti, quam accusantium possimus ratione numquam. Explicabo quaerat sunt fugit iusto consectetur ducimus modi, laboriosam deleniti, quod qui officiis architecto labore.
      Et odio dolor, aspernatur ea perspiciatis reiciendis explicabo minus repudiandae consequuntur voluptas assumenda id laudantium. Tenetur fugiat totam pariatur voluptates labore eum aliquam temporibus, at soluta asperiores, necessitatibus magni expedita.
      Esse voluptatibus nisi, eveniet quisquam fugiat consequatur, magnam corrupti quae labore aut nostrum exercitationem itaque doloribus? Assumenda magni, suscipit maiores harum tempore enim temporibus, quae placeat illo consequuntur inventore ex!
      Facilis tempore a beatae, commodi expedita, nobis natus praesentium odio id vel soluta fugit ipsa nemo quos nostrum recusandae voluptate veritatis eligendi. Aut id vero, sapiente doloribus ut amet fuga!
      </p>
      <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam neque ea officia. Adipisci expedita sit facere corrupti nulla reprehenderit corporis dolor rerum? Ab aliquid, rem culpa autem inventore animi nobis.
      In voluptatibus cum saepe aperiam nesciunt debitis, sit reprehenderit corrupti, quam accusantium possimus ratione numquam. Explicabo quaerat sunt fugit iusto consectetur ducimus modi, laboriosam deleniti, quod qui officiis architecto labore.
      Et odio dolor, aspernatur ea perspiciatis reiciendis explicabo minus repudiandae consequuntur voluptas assumenda id laudantium. Tenetur fugiat totam pariatur voluptates labore eum aliquam temporibus, at soluta asperiores, necessitatibus magni expedita.
      Esse voluptatibus nisi, eveniet quisquam fugiat consequatur, magnam corrupti quae labore aut nostrum exercitationem itaque doloribus? Assumenda magni, suscipit maiores harum tempore enim temporibus, quae placeat illo consequuntur inventore ex!
      Facilis tempore a beatae, commodi expedita, nobis natus praesentium odio id vel soluta fugit ipsa nemo quos nostrum recusandae voluptate veritatis eligendi. Aut id vero, sapiente doloribus ut amet fuga!
      </p>
    </div>
    <aside id="nav-container">
    <h3 id="tags-title">Tags</h3>
    <ul id="tags-list">
      <?php foreach($currentPost['tags'] as $tag): ?>
        <li><a href="#"><?= $tag ?></a></li>
      <?php endforeach; ?>
    </ul>
    <h3 id="categories-title"></h3>
    <ul id="categories-list">
      <?php foreach($categories as $category): ?>
        <li><a href="#"><?= $category ?></a></li>
      <?php endforeach; ?>
    </ul>
    </aside>
  </main>
<?php 
  include_once("templates/footer.php")
?>
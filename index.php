<?php
// requerindo dados das paginas
require_once 'select.php';
require_once 'selectCategorias.php';
?>
<i>Categorias</i>

<ul>
    <?php foreach ($categorias as $categoria) : ?>
        <li><a href="pageCategorias.php?nome=<?= $categoria['nome'] ?>"><?= $categoria['nome'] ?> </a></li>
    <?php endforeach; ?>
</ul>
<hr>
<h1>Posts</h1>
<div>
    <?php foreach ($posts as $post) : ?>

        <a href="post.php?post_id=<?= $post['post_id'] ?>">
            <h2><?= $post['title'] ?> </h2>
            <i>Categoria: <?=$post['nome']?></i>
        </a>
        <hr>
    <?php endforeach; ?>
</div>

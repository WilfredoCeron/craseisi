<div id="content" class="demo">

    <div id="placeHolder"></div> <!--//Dentro de este DIV se crea el menu de etiquetas-->
    <ul id="container">
        <?php foreach ($cursos as $curso): ?>
            <li data-codigo="<?= h($curso->codigo) ?>" data-nombre="<?= h($curso->nombre) ?>" data-escuela="<?= h($curso->codigoEscuela) ?>">
            <p><b><?= h($curso->nombre) ?></b></p>
            <a href="<?= h($curso->urlAcotada) ?>"><?= $this->Html->image('descargar.png') ?></a></li>
        <?php endforeach; ?>
    </ul>

  </div>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"><!-- Page d'accueil -->
<h2><i class="fa fa-home"></i> Accueil</h2>

<!-- Liste des articles du blog -->
<ul class="post-list">
    <?php foreach ($posts as $post) : ?>
        <li class="post">
            <h3>
                <i class="fa fa-hand-o-right"></i>&nbsp;
                <!-- Lien vers article de blog détaillé avec les commentaires -->
                <a href="show_post.php?id=<?= intval($post['Id']) ?>" title="Consulter l'article">
                    <?= htmlspecialchars($post['Title']) ?>
                </a>
            </h3>
            <!-- Seul un extrait de l'article du blog est affiché -->
            <article><?= substr(htmlspecialchars($post['Contents']), 0, 100) ?>&nbsp;[...]</article>
            <small>
                Rédigé par <?= htmlspecialchars($post['FirstName']) ?> <?= htmlspecialchars($post['LastName']) ?>
                le <?= htmlspecialchars($post['CreationTimestamp']) ?>
            </small>
        </li>
        <!-- card simple -->
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Voyage à shanghai</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
            <img class="card-img-bottom" src="images/theme/SG.jpg" alt="Card image cap">
        </div><br>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Voyage à shanghai #2</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
            <img class="card-img-bottom" src="images/theme/SG1.jpg" alt="Card image cap">
        </div><br>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Voyage à shanghai #3</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
            <img class="card-img-bottom" src="images/theme/SG2.jpg" alt="Card image cap">
        </div>

        <div class="card mb-3">
            <img class="card-img-top" src="C:\wamp64\www\blog\src\images\theme\SG.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <!-- card nav -->
        <div class="card text-center">
            <div class="card-header">
                <ul class="nav nav-pills card-header-pills">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Active</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        <br>

        <!-- form dropdown -->

        
    <?php endforeach; ?>
</ul>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
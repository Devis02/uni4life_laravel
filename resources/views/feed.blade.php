@include('navbar')
<main class="feed">
    
    <form class="new-post" method="post" action="/feed/create">
        @csrf
        <img src="{{ asset('images/perfil.png') }}" alt="Perfil" class="profile-pic" />
        <textarea name="post-content" placeholder="No que você está pensando?"></textarea>
        <button id="Enviar" class="button_feed" type="submit">Enviar</button>
    </form>
            
    <div class="posts">
        <?php foreach($posts as $post):?>
            <div class="post">
                <div class="post-info">
                    <img src="{{ asset('images/perfil.png') }}" alt="Ícone de usuário" class="profile-pic">
                    <h4 style="margin-right:5px"><?php echo $post['name']." :"?></h4>
                    <p><?php echo $post["content"]?></p>
                </div>
                    
                <div class="post-options">
                    <span><img class="icons" src="" alt=""></span>
                    <span><img class="icons" src="" alt=""></span>
                    <span><img class="icons" src="" alt=""></span>
                    <span>
                        <?php $data = new DateTime($post["publish_date"]);
                            echo $data->format('d-m-Y');
                        ?>
                    </span>
                </div>
                    
            </div>
        <?php endforeach?>
    </div>
</main>
</body>
</html>
<div class="col-sm-12 bg-success">
    <div class="card" style="width: 18rem;">
        <?php
        $bonsoir = 12234;
        echo '<div class="card-body">
                <p class="card-text">Some '.$bonsoir.' quick example text to build on the card title and make up the bulk of the card\'s content.</p>
            </div>'
        ?>
    </div>
    <div>
        <?php
            foreach ($response as $key => $fuckingBeer) {
                echo '<li>'.$fuckingBeer->name.'</li>';
            }
        ?>
    </div>
    <button type="button" onclick="getBeerList()">Get list</button>
    <div>
        <ul id="list"></ul>
    </div>
</div>

<script>
</script>
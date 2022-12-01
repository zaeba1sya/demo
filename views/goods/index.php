<div class="container">
    <div class="row">
        <div class="d-flex flex-row flex-md-wrap justify-content-between">
            <?php foreach ($goods as $good) { ?>
            <div class="card mb-4" style="width: 20rem;">
                <img src="/web/images/<?=$good['img']?>" class="card-img-top" alt="card">
                <div class="card-body">
                    <h5 class="card-title"><?=$good['title']?></h5>
                    <p class="card-text">Price: <?=$good['price']?></p>
                    <p class="card-text">Publisher: <?=$modelPublisher->getPublisherById($good["publisher_id"])['publisher']?></p>
                    <p class="card-text">Year: <?=$good['year']?></p>
                    <p class="card-text">Antagonist: <?=$good['antagonist']?></p>
                    <div class="d-flex flex-row justify-content-between">
                        <a href="/goods/item?id=<?=$good['id']?>" class="btn btn-primary">Show more</a>
                        <button onclick=""><a href="#" data-name="<?=$good["id"] ?>" class="btn btn-success add_to_cart_index">Add to Cart</a></button>
                    </div>
                </div>
            </div>
            <? } ?>
        </div>
    </div>
</div>
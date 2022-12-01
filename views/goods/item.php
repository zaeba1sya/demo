
<div class="container">
    <div class="d-flex flex-row justify-content-between">
        <div class="img-block">
            <img src="/web/images/<?= $good["img"] ?>" style="height: 800px" alt="good">
        </div>
        <div class="m-auto text-center">
            <h3><?= $good["title"] ?></h3>
            <h3>Price: <?= $good["price"] ?></h3>
            <h3>Publisher: <?= $modelPublisher->getPublisherById($good["publisher_id"])['publisher'] ?></h3>
            <h3>Year: <?= $good["year"] ?></h3>
            <h3>Antagonist: <?= $good["antagonist"] ?></h3>
            <button type="button" data-id="<?= $good['id'] ?>" class="btn btn-primary mt-5 w-100 add_to_cart_item">Add To Cart</button>
        </div>
    </div>
</div>
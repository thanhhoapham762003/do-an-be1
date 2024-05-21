<div class="container">
    <h1>Product Management</h1>

    <?php
    if (!empty($_SESSION['alert'])) :
    ?>
    <div class="alert alert-success" role="alert">
        <?php echo $_SESSION['alert'] ?>
    </div>
    <?php
    $_SESSION['alert'] = '';
    endif;
    ?>
    
    <a href="create.php" class="btn btn-primary">Create</a>
    <table class="table">
        <thead>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Price</td>
                <td>Image</td>
                <td>Action</td>
            </tr>
        </thead>

        <tbody>
            <?php
            foreach ($products as $product) :
            ?>
                <tr>
                    <td><?php echo $product['id'] ?></td>
                    <td><?php echo $product['name'] ?></td>
                    <td><?php echo $product['price'] ?></td>
                    <td><img src="../../public/img/<?php echo $product['image'] ?>" alt="" width="100"></td>
                    <td>
                        <a href="edit.php?id=<?php echo $product['id'] ?>" class="btn btn-warning">Edit</a>
                        <form action="destroy.php" method="post" onsubmit="return confirm('Do you want to delete?')">
                            <button type="submit" class="btn btn-danger" name="productId" value="<?php echo $product['id'] ?>">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php
            endforeach
            ?>
        </tbody>
    </table>

    <nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <?php 
    $pages=ceil($total/$perPage);
    for($i=1;$i<=$pages;$i++):
    ?>
    <li class="page-item"><a class="page-link" href="index.php?page=<?php echo $i ?>"><?php echo $i ?></a></li>
    <?php
    endfor;
    ?>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav>
</div>

<script>
    const alert = document.querySelector('.alert');
    if(alert) {
        const alertTimeout = setTimeout(function () {
            alert.remove();
        }, 3000);
    }
</script>
<?php $num_page = numberPages($blog_config['post_to_page'], $conection); ?>
<div class="row">
 <div class="col-12 col-md-8 offset-md-2 ps-0">
    <nav aria-label="Page">
      <ul class="pagination">
        <?php if(actual_page() == 1){?>
        <li class="page-item disabled">
            <span class="page-link" aria-hidden="true">&laquo;</span>
        </li>
        <?php } else { ?>
         <li class="page-item">
          <a class="page-link" href="index.php?page=<?php echo actual_page() - 1; ?>" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
          </a>
        </li>
        <?php } ?>
        <?php for($i = 1; $i <= $num_page; $i++){?>
          <li class="page-item <?php echo actual_page() === $i ? 'active' : ' ';?>"><a class="page-link" href="index.php?page=<?php echo $i?>"><?php echo $i; ?></a></li>
        <?php } ?>
        <?php if(actual_page() != $num_page){?>
        <li class="page-item">
          <a class="page-link" href="index.php?page=<?php echo actual_page() + 1;?>" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
          </a>
        </li>
        <?php }else{?>
          <li class="page-item disabled">
            <span class="page-link" aria-hidden="true">&raquo;</span>
        </li>
        <?php } ?>
      </ul>
    </nav>
 </div>
</div>
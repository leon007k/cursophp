<?php $num_page = numberPages($blog_config['post_to_page'], $conection); ?>
<div class="row">
 <div class="col-12 col-md-8 offset-md-2 ps-0">
    <nav aria-label="Page">
      <ul class="pagination">
        <?php if(actual_page() == 1){?>
        <li class="page-item disabled">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
          </a>
        </li>
        <?php } else { ?>
         <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
          </a>
        </li>
        <?php } ?>
        <li class="page-item active"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
          </a>
        </li>
      </ul>
    </nav>
 </div>
</div>
<div class="card-viewer d-flex justify-content-between ">
    <div>
        <i class="fa-solid fa-calendar-days"></i>
        <span><?php echo get_the_date('Y/m/d'); ?></span>
    </div>
    <div>
        <i class="fa-solid fa-circle-chevron-down"></i>
        <span>Posted by : <?php echo get_the_author(); ?></span>
    </div>
    <div>
        <i class="fa-regular fa-message"></i>
        <span><?php echo get_comments_number(); ?></span>
    </div>
</div>
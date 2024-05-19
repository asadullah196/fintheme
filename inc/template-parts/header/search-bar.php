 <!-- navigation drop search bar -->
 <div class="search" id="search-bar">
    <form class="d-flex nav-search" action="/" method="get">
        <input type="text" name="search" placeholder="Enter your text" id="search" value="<?php the_search_query(); ?>">
        <button class="btn-hover1" type="submit">Search</button>
    </form>
    <button id="remove-btn">
        <i class="fa-solid fa-square-xmark"></i>
    </button>
</div>

<?php // check after blog part done


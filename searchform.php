 <!-- Modal -->
 <div class="modal fade custom_search_pop" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="serch_form">
            <form action="<?php echo site_url()?>" method="get">
                <input type="text" placeholder="Search" name="s" value="<?php echo get_search_query(); ?>">
                <button type="submit">search</button>
            </form>
        </div>
      </div>
    </div>
  </div>
<form method="get" action="<?php echo home_url('/')?>" class="form">
    <div class="form-group group-with-button">
        <input type="text" name="s" value="<?php echo  get_search_query(); ?>" class="form-control" placeholder="eg. ลาเต้, มอคค่า, คาปู">
        <button type="submit" class="btn btn-primary">Search</button>
    </div>
</form>
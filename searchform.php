<div class="sidebar-searchbox">
<form action="<?php bloginfo('siteurl'); ?>" id="searchform" method="get">
	<fieldset>
        <input type="text" class="sidebar-search-input" id="s" name="s" value="Buscar..." onfocus="if (this.value == 'Buscar...') this.value = '';" onblur="if (this.value == '') this.value = 'Buscar...';" />
        <input type="image" value="Search" class="sidebar-search-lupa" id="searchsubmit" src="<?php bloginfo('template_directory'); ?>/images/lupa.png" />
  </fieldset>
</form>
</div>
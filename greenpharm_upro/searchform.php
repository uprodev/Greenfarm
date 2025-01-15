<form role="search" method="get" action="<?php echo home_url( '/' ) ?>" class="seek">
	<button type="submit">
		<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path
			d="M13.1667 13.1667L16.5 16.5M1.5 8.16667C1.5 9.93478 2.20238 11.6305 3.45262 12.8807C4.70286 14.131 6.39856 14.8333 8.16667 14.8333C9.93478 14.8333 11.6305 14.131 12.8807 12.8807C14.131 11.6305 14.8333 9.93478 14.8333 8.16667C14.8333 6.39856 14.131 4.70286 12.8807 3.45262C11.6305 2.20238 9.93478 1.5 8.16667 1.5C6.39856 1.5 4.70286 2.20238 3.45262 3.45262C2.20238 4.70286 1.5 6.39856 1.5 8.16667Z"
			stroke="#BCBEC3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
		</svg>
	</button>
	<input type="hidden" name="post_type" value="product,service" />
	<input type="text" name="s" id="s" placeholder="Search">
</form>
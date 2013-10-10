<?php
elgg_invalidate_simplecache();
elgg_reset_system_cache();

$et_url = elgg_get_site_url();

forward($et_url . 'admin/plugin_settings/google-fonts');

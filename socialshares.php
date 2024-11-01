<?php
/*
Plugin Name: TLD30 Social Shares
Plugin URI: http://tld30.com/webmaster/tools/wordpress-social-shares-plugin/
Description: Easy to share your your posts, pages to social network sites. Must insert a php code. <a target="_blank" href="http://tld30.com/webmaster/tools/wordpress-social-shares-plugin/" title="Setup Information">Setup Information</a>
Author: Qorporate LLC
Author: Jason Jersey
Version: 1.0
Author URI: http://qorporate.com
Licence: Provided under the GNU General Public Licence v3.0 - http://www.gnu.org/licenses/gpl-3.0.txt
*/

/*
Copyright (C) 2010 Jason Jersey, Qorporate.com (op@qorporate.com)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/gpl-3.0.txt>.
*/

function TLD30ss() {
		
	$tld30ss =  file_get_contents("http://tld30.com/webmaster/dev-plugins/socialshares/" );
	echo $tld30ss;

	}
?>
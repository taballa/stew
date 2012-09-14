<?php
function get_user_info_by_id( $uid )

return get_line( "SELECT 'name' ,'email' , 'bod' FROM 'user' WHERE 'uid' = " . intval($uid) . " LIMIT 1 " )
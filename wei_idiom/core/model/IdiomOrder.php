<?php
 class IdiomOrder { private static $table = "\167\145\151\137\151\144\x69\157\155\137\x6f\162\x64\145\x72\163"; private static $allFields = array("\x69\x64", "\x75\x6e\151\141\x63\151\x64", "\x6f\x70\145\x6e\x69\144", "\157\162\144\x65\x72\x5f\163\156", "\x67\x6f\157\x64\x73\137\151\144", "\146\x6f\x72\x6d\x5f\151\144", "\x67\157\x6f\x64\163\137\156\141\x6d\145", "\143\x6f\x73\x74\137\x62\x61\154\x61\x6e\143\145", "\x72\x65\x6d\x61\x72\x6b", "\163\x65\156\144\137\x74\151\x6d\145", "\151\156\163\145\162\x74\x5f\164\x69\155\x65", "\163\164\x61\164\165\163"); private static $frontFields = array("\151\144", "\x6f\x72\144\x65\x72\x5f\163\x6e", "\147\x6f\x6f\144\x73\x5f\x69\x64", "\147\157\157\x64\163\137\x6e\141\155\145", "\x63\x6f\163\x74\137\142\141\154\x61\156\143\x65", "\x72\x65\x6d\141\162\x6b", "\x73\x65\x6e\x64\137\x74\x69\x6d\145", "\x69\156\x73\145\x72\164\x5f\164\x69\x6d\145", "\163\164\x61\x74\x75\x73"); const STATUS_DEFAULT = 0; const STATUS_SEND = 1; public static $MAP_STATUS_DESC = array(self::STATUS_DEFAULT => "\xe6\234\252\xe5\217\x91\350\264\247", self::STATUS_SEND => "\xe5\xb7\262\xe5\x8f\221\xe8\264\xa7"); public static function getStatusDesc($status) { goto xFy7K; m7eSq: khv0w: goto xD52Q; xFy7K: $status = intval($status); goto elYx6; a8pdS: return self::$MAP_STATUS_DESC[$status]; goto m7eSq; xD52Q: return "\346\234\xaa\xe7\237\xa5"; goto DlcVS; elYx6: if (!key_exists($status, self::$MAP_STATUS_DESC)) { goto khv0w; } goto a8pdS; DlcVS: } public static function create($uniacid, $openid, $order_sn, $goods_id, $form_id, $goods_name, $cost_balance) { goto y7F2X; ZUCCj: $res = pdo_insert(self::$table, $data); goto sUg0P; VAok1: $data = compact("\165\x6e\x69\x61\x63\151\144", "\157\x70\x65\156\x69\144", "\x6f\x72\x64\x65\162\x5f\x73\x6e", "\x67\157\157\144\x73\x5f\x69\x64", "\146\157\162\155\137\151\x64", "\x67\157\x6f\144\x73\x5f\156\x61\x6d\x65", "\x63\x6f\x73\x74\137\142\141\154\141\156\x63\145", "\x69\156\163\145\162\164\137\x74\x69\155\145"); goto ZUCCj; y7F2X: $insert_time = date("\x59\x2d\x6d\55\144\40\x48\x3a\151\72\x73"); goto VAok1; sUg0P: return false != $res; goto DmY6q; DmY6q: } public static function getById($uniacid, $id) { $res = pdo_get(self::$table, ["\x69\x64" => $id, "\x75\x6e\x69\141\x63\x69\x64" => $uniacid], self::$allFields); return false == $res ? [] : $res; } public static function getByWithdrawNo($uniacid, $withdraw_no) { $res = pdo_get(self::$table, ["\167\x69\x74\x68\x64\x72\x61\x77\x5f\156\157" => $withdraw_no, "\x75\x6e\x69\x61\x63\x69\x64" => $uniacid], self::$allFields); return false == $res ? [] : $res; } public static function getUnSendList($uniacid) { goto MixO0; Hr7kG: $res = pdo_getall(self::$table, $where, self::$allFields); goto DoXIZ; DoXIZ: return false == $res ? [] : $res; goto lWmsH; MixO0: $where = ["\x75\x6e\x69\x61\143\151\x64" => $uniacid, "\x73\164\x61\x74\x75\163" => self::STATUS_DEFAULT]; goto Hr7kG; lWmsH: } public static function updateById($uniacid, $id, $pairs) { $where = compact("\165\156\x69\x61\143\151\144", "\x69\144"); return pdo_update(self::$table, $pairs, $where); } public static function getMyOrder($openid, $uniacid) { goto uQqbF; uQqbF: $where = ["\x6f\160\x65\x6e\x69\x64" => $openid, "\165\156\151\x61\143\151\x64" => $uniacid]; goto xwfDY; ZZfjQ: return false == $list ? [] : $list; goto kEvOM; xwfDY: $list = pdo_getall(self::$table, $where, self::$frontFields, '', "\151\x64\40\x44\x45\x53\103"); goto ZZfjQ; kEvOM: } public static function getOrderList($uniacid, $where, $pageIndex, $pageSize) { goto uofwr; VPD2j: $start = ($pageIndex - 1) * $pageSize; goto InH50; bVbfM: return false == $list ? [] : $list; goto CeNBF; uofwr: $where["\x75\x6e\151\x61\x63\151\144"] = $uniacid; goto VPD2j; InH50: $list = pdo_getall(self::$table, $where, self::$allFields, '', "\151\144\x20\104\105\123\x43", "{$start}\54{$pageSize}"); goto bVbfM; CeNBF: } public static function getOrderCount($uniacid, $where) { $where["\x75\156\151\x61\x63\151\144"] = $uniacid; return pdo_count(self::$table, $where); } }
<?php
 class IdiomEgg { private static $table = "\x77\x65\x69\x5f\151\144\x69\157\x6d\137\x65\147\x67\163"; private static $allFields = array("\151\144", "\165\156\x69\141\143\x69\144", "\157\x70\145\x6e\151\x64", "\164\x6f\160\151\143\x5f\151\x64", "\153\153\x69\144", "\x62\x61\154\x61\x6e\x63\145", "\151\x6e\x73\145\162\164\137\164\151\x6d\145"); const STATUS_DEFAULT = 1; const STATUS_USED = 2; public static function add($uniacid, $openid, $topic_id, $kkid, $balance) { goto Gorpp; Gorpp: $data = ["\x75\x6e\x69\x61\x63\x69\144" => $uniacid, "\x6f\x70\x65\156\x69\144" => $openid, "\x74\157\160\151\143\137\151\x64" => $topic_id, "\x6b\x6b\x69\144" => $kkid, "\142\141\154\141\x6e\143\x65" => $balance, "\x69\156\x73\145\x72\164\137\x74\x69\155\145" => date("\131\55\x6d\55\144\x20\110\72\x69\x3a\x73"), "\163\x74\141\164\x75\163" => self::STATUS_DEFAULT]; goto o_Beq; o_Beq: $res = pdo_insert(self::$table, $data); goto f20JW; f20JW: return false != $res; goto wkiM2; wkiM2: } public static function updateById($uniacid, $id, $data) { goto Jy1p3; Lhter: return pdo_update(self::$table, $data, $where); goto VlPHw; Jy1p3: $data["\165\x70\144\x61\164\x65\x5f\x74\x69\155\145"] = date("\x59\55\155\55\x64\40\110\72\151\72\x73"); goto gHYGl; gHYGl: $where = ["\151\144" => $id, "\165\x6e\151\141\143\151\x64" => $uniacid]; goto Lhter; VlPHw: } public static function getByOpenidKkid($uniacid, $openid, $kkid) { goto oL2Dv; t1JUf: return false == $res ? [] : $res; goto sQBGF; oL2Dv: $where = compact("\x75\156\151\x61\143\151\144", "\157\160\145\x6e\151\x64", "\153\153\x69\x64"); goto z_ZtS; z_ZtS: $res = pdo_get(self::$table, $where, self::$allFields); goto t1JUf; sQBGF: } public static function getForBroad($uniacid) { goto PkRIs; PkRIs: $sql = "\x53\105\x4c\105\103\x54\x20\x74\61\56\x69\144\54\164\61\x2e\x6f\x70\x65\156\x69\x64\54\x74\61\x2e\x62\x61\154\141\156\143\x65\40\x46\122\x4f\x4d\x20" . tablename(self::$table) . "\40\101\123\40\164\61\x20\112\x4f\x49\116\x20\50\x53\105\114\105\103\x54\40\122\x4f\x55\116\x44\x28\122\x41\x4e\104\x28\51\40\x2a\40\50\x53\105\114\x45\x43\x54\40\115\x41\x58\50\151\x64\x29\x20\x46\122\117\x4d\40" . tablename(self::$table) . "\x29\x29\40\101\123\40\x69\x64\x29\x20\101\x53\x20\164\62\x20" . "\x20\127\110\x45\x52\x45\x20\x74\61\x2e\151\144\x20\76\75\x20\x74\62\56\151\x64\40\101\x4e\104\x20\164\x31\56\165\156\x69\141\x63\151\144\40\x3d\40{$uniacid}\40\101\116\x44\x20\x74\x31\56\x62\x61\x6c\141\156\143\145\40\x3e\x20\60\x2e\66\x20\x47\122\117\125\120\x20\102\131\x20\x74\x31\56\157\160\x65\x6e\x69\144\40\x4f\122\104\105\x52\40\102\x59\40\x74\61\x2e\x69\144\40\101\123\x43\x20\114\111\115\111\x54\x20\63\73"; goto BNcvP; BNcvP: $list = pdo_fetchall($sql); goto Bq6id; Bq6id: return $list; goto WJCja; WJCja: } }
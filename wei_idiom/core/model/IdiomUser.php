<?php
 class IdiomUser { private static $table = "\x77\145\151\x5f\x69\144\151\157\x6d\x5f\165\x73\x65\x72\x73"; private static $allFields = array("\x69\144", "\x75\156\x69\141\x63\151\x64", "\x6f\160\x65\156\x69\x64", "\x76\151\144", "\151\156\166\151\164\x65\137\156\x75\x6d", "\156\x69\143\x6b\x6e\x61\x6d\x65", "\x68\x65\141\x64\151\x6d\147\165\x72\x6c", "\147\x65\156\144\x65\x72", "\162\x65\x61\154\156\x61\x6d\145", "\155\x6f\142\151\154\145", "\167\x78\x69\x64", "\154\145\x76\145\154", "\147\157\154\x64\137\156\x75\155", "\142\141\154\141\x6e\x63\145", "\141\x6c\x6c\x5f\x67\145\164\x5f\142\141\x6c\141\156\x63\x65", "\151\x6e\x73\145\162\164\137\x74\151\155\x65", "\165\160\x64\x61\x74\145\x5f\x74\151\x6d\145", "\x73\164\141\164\x75\x73"); private static $smallFields = array("\151\144", "\165\156\151\141\x63\151\x64", "\x6f\160\145\x6e\151\x64", "\151\156\166\151\x74\x65\x5f\156\165\155", "\156\x69\143\153\156\141\155\145", "\x68\x65\x61\x64\x69\x6d\x67\x75\x72\154", "\154\145\x76\145\154", "\x67\x6f\154\144\x5f\156\x75\155", "\x62\141\x6c\x61\156\143\145", "\x61\x6c\x6c\137\147\145\x74\x5f\x62\x61\154\141\x6e\143\x65", "\162\145\x61\x6c\x6e\x61\x6d\145", "\155\x6f\142\151\x6c\145", "\x77\170\x69\144", "\163\164\x61\x74\165\x73"); private static $rankFields = array("\151\144", "\x6e\151\143\153\x6e\141\155\x65", "\x68\145\141\144\x69\x6d\147\x75\x72\154", "\154\x65\x76\145\154"); const STATUS_DEFAULT = 1; const STATUS_FORBID = -1; public static function create($uniacid, $openid, $fans, $vid = 0, $gold_num = 0) { goto sNt0W; HdoEy: return false != $res ? $user : false; goto Yds3t; sNt0W: $user = ["\x75\156\x69\x61\143\x69\x64" => $uniacid, "\x6f\x70\x65\x6e\x69\144" => $openid, "\x76\151\144" => $vid, "\156\151\143\153\x6e\141\x6d\145" => $fans["\x6e\x69\143\153\156\x61\x6d\145"], "\x68\145\x61\x64\x69\x6d\147\165\162\x6c" => $fans["\150\x65\x61\144\151\155\147\165\162\154"], "\147\x65\x6e\144\145\162" => $fans["\147\145\156\144\145\162"], "\x6c\x65\x76\x65\x6c" => 0, "\x62\x61\x6c\141\x6e\143\x65" => 0, "\147\157\x6c\144\137\x6e\x75\x6d" => $gold_num, "\151\x6e\163\145\x72\164\x5f\x74\x69\x6d\x65" => date("\x59\55\x6d\55\x64\x20\x48\72\x69\72\x73"), "\163\164\141\x74\165\x73" => self::STATUS_DEFAULT]; goto C9kWW; C9kWW: $res = pdo_insert(self::$table, $user); goto HdoEy; Yds3t: } public static function update($uniacid, $openid, $fans) { $user = ["\156\151\143\x6b\x6e\x61\x6d\145" => $fans["\x6e\x69\x63\153\x6e\x61\155\x65"], "\x68\145\141\x64\151\x6d\x67\165\162\x6c" => $fans["\x68\145\141\144\151\155\147\165\162\x6c"], "\147\145\x6e\x64\145\162" => $fans["\147\x65\156\x64\145\x72"], "\165\x70\x64\141\x74\x65\x5f\x74\x69\x6d\145" => date("\x59\55\155\x2d\144\40\x48\x3a\x69\x3a\x73")]; return pdo_update(self::$table, $user, ["\x6f\x70\145\x6e\x69\144" => $openid, "\x75\x6e\151\141\x63\151\144" => $uniacid]); } public static function getById($uniacid, $id) { goto qQRCA; YU6WT: $user = pdo_get(self::$table, ["\151\144" => $id, "\165\x6e\x69\x61\143\x69\x64" => $uniacid], $fields); goto p_Tpr; p_Tpr: return false == $user ? [] : $user; goto vAQ5W; qQRCA: $fields = ["\151\144", "\165\156\x69\141\x63\151\144", "\x6f\160\145\156\x69\x64", "\156\x69\143\x6b\156\141\x6d\x65", "\150\145\141\x64\151\155\147\165\x72\154", "\x67\162\141\156\x74\137\x73\164\x61\x74\x75\163", "\x73\164\141\162\x5f\x63\x6f\x69\x6e", "\x69\x6e\163\x65\x72\x74\x5f\164\151\155\x65", "\x73\x74\141\164\165\x73"]; goto YU6WT; vAQ5W: } public static function updateByOpenid($uniacid, $openid, $pairs) { goto SaI2d; vjTaR: return pdo_update(self::$table, $pairs, $where); goto UfA7q; SaI2d: $where = compact("\x75\156\151\x61\x63\x69\x64", "\157\160\x65\156\x69\x64"); goto y0ZML; y0ZML: $pairs["\x75\160\144\x61\x74\145\x5f\164\151\x6d\x65"] = date("\131\x2d\x6d\55\144\40\x48\72\151\x3a\163"); goto vjTaR; UfA7q: } public static function getUser($uniacid, $openid) { $user = pdo_get(self::$table, ["\x6f\160\x65\x6e\151\x64" => $openid, "\x75\156\x69\x61\x63\x69\144" => $uniacid], self::$smallFields); return false == $user ? [] : $user; } public static function incrGoldNumById($uniacid, $id, $num) { goto Nwhnv; ryu3p: return pdo_update(self::$table, $data, $where); goto b5ISc; Ji9lD: $where = ["\151\x64" => $id, "\165\x6e\x69\141\143\151\144" => $uniacid]; goto ryu3p; Nwhnv: $data = ["\x75\x70\144\x61\x74\145\137\x74\x69\155\x65" => date("\x59\55\155\55\x64\x20\x48\x3a\151\x3a\x73"), "\x67\x6f\154\x64\x5f\156\x75\155\40\53\x3d" => $num]; goto Ji9lD; b5ISc: } public static function incrGoldNumAndInviteNum($uniacid, $id, $gold_num, $invite_num = 1) { goto O8QK5; jkFd9: return pdo_update(self::$table, $data, $where); goto UNgcD; Pdbf8: $where = ["\151\x64" => $id, "\165\x6e\x69\141\143\x69\144" => $uniacid]; goto jkFd9; O8QK5: $data = ["\x75\x70\x64\141\164\145\137\x74\151\x6d\x65" => date("\x59\x2d\x6d\x2d\x64\40\110\x3a\151\72\163"), "\x67\157\x6c\x64\x5f\156\165\x6d\40\53\75" => $gold_num, "\x69\156\x76\x69\x74\145\137\x6e\x75\155\x20\x2b\75" => $invite_num]; goto Pdbf8; UNgcD: } public static function decrUserGoldNum($uniacid, $openid, $num) { goto rWsAc; YhrAK: return pdo_update(self::$table, $data, $where); goto hop2R; rWsAc: $data = ["\x75\160\x64\141\164\x65\137\164\151\155\x65" => date("\x59\x2d\155\55\x64\40\x48\x3a\x69\72\163"), "\x67\157\154\144\137\156\x75\155\x20\55\x3d" => $num]; goto nAuV5; nAuV5: $where = ["\x6f\160\x65\x6e\x69\144" => $openid, "\x75\x6e\x69\x61\143\x69\144" => $uniacid]; goto YhrAK; hop2R: } public static function incrUserBalance($uniacid, $openid, $num) { goto Wn7f2; PCTaV: $where = ["\x6f\x70\145\x6e\x69\144" => $openid, "\x75\x6e\x69\x61\x63\x69\144" => $uniacid]; goto Z3h2s; Wn7f2: $data = ["\x75\160\144\141\164\x65\x5f\164\151\x6d\145" => date("\131\55\x6d\x2d\144\x20\x48\72\151\x3a\x73"), "\142\x61\154\x61\x6e\x63\x65\40\53\x3d" => $num, "\x61\154\x6c\x5f\147\x65\x74\x5f\x62\x61\x6c\141\x6e\143\145\40\x2b\75" => $num]; goto PCTaV; Z3h2s: return pdo_update(self::$table, $data, $where); goto tcBTO; tcBTO: } public static function decrUserBalance($uniacid, $openid, $num) { goto UeyFa; w1IN_: $where = ["\157\x70\145\x6e\151\144" => $openid, "\165\x6e\x69\x61\143\151\144" => $uniacid]; goto OGfYP; UeyFa: $data = ["\165\160\144\141\164\145\x5f\164\151\x6d\x65" => date("\131\x2d\155\x2d\144\40\x48\x3a\151\72\163"), "\142\x61\154\141\x6e\143\x65\x20\55\x3d" => $num]; goto w1IN_; OGfYP: return pdo_update(self::$table, $data, $where); goto GxBSI; GxBSI: } public static function incrUserLevel($uniacid, $openid) { goto yVhNw; AQaUA: $where = ["\x6f\160\x65\x6e\x69\144" => $openid, "\165\x6e\151\x61\143\151\x64" => $uniacid]; goto S1cCP; yVhNw: $data = ["\165\x70\x64\141\x74\145\137\164\151\x6d\145" => date("\x59\55\x6d\x2d\x64\x20\x48\x3a\151\x3a\x73"), "\x6c\x65\x76\x65\154\40\x2b\x3d" => 1]; goto AQaUA; S1cCP: return pdo_update(self::$table, $data, $where); goto HQgCp; HQgCp: } public static function getLevelRank($uniacid, $page, $page_size) { goto Z24xB; Z24xB: $where = ["\x75\156\x69\141\143\151\x64" => $uniacid, "\154\145\166\145\154\40\76" => 0]; goto XZOpa; XZOpa: $start = ($page - 1) * $page_size; goto kYOR2; kYOR2: $res = pdo_getall(self::$table, $where, self::$rankFields, '', "\154\145\x76\x65\154\x20\144\145\163\x63\54\151\144\x20\141\x73\x63", "\x6c\x69\x6d\151\164\x20{$start}\x2c{$page_size}"); goto WVH3Y; WVH3Y: return false == $res ? [] : $res; goto cEm_S; cEm_S: } public static function getMyLevelRank($uniacid, $my_level, $my_id) { goto GRiI3; M4kV5: return $res["\162\141\156\x6b"]; goto v1snz; GRiI3: $sql = "\x53\x45\114\105\103\x54\40\x43\x4f\125\116\x54\x28\x2a\51\x20\x61\163\x20\162\x61\x6e\153\40\106\x52\117\x4d\x20" . tablename(self::$table) . "\x20\x57\110\x45\122\x45\40\165\156\x69\141\143\x69\x64\x3d{$uniacid}\x20\x41\116\x44\40" . "\x20\x28\x6c\x65\166\145\154\x3e{$my_level}\40\x4f\x52\x20\50\154\145\166\145\x6c\40\75\40{$my_level}\40\x61\x6e\144\x20\x69\x64\x3c{$my_id}\51\x29"; goto h9aUk; h9aUk: $res = pdo_fetch($sql); goto M4kV5; v1snz: } public static function getInviteRank($uniacid, $page, $page_size) { goto Q4ZFu; I39To: $start = ($page - 1) * $page_size; goto HDosx; HDosx: $res = pdo_getall(self::$table, $where, self::$smallFields, '', "\x69\x6e\166\151\x74\145\137\156\165\x6d\x20\x64\145\163\x63", "\x6c\151\155\151\164\x20{$start}\x2c{$page_size}"); goto AlBN6; AlBN6: return false == $res ? [] : $res; goto W6EXs; Q4ZFu: $where = ["\165\156\x69\141\x63\151\x64" => $uniacid, "\x69\156\166\x69\x74\145\137\156\165\155\x20\76" => 0]; goto I39To; W6EXs: } public static function getMyInviteRank($uniacid, $my_invite_num, $my_id) { goto P_hSH; MGXU9: return $res["\x72\x61\156\153"]; goto RfWd8; mmtb3: $res = pdo_fetch($sql); goto MGXU9; P_hSH: $sql = "\x53\105\x4c\x45\103\124\40\x43\x4f\x55\116\x54\x28\x2a\x29\40\141\x73\x20\x72\x61\x6e\x6b\x20\x46\x52\x4f\115\40" . tablename(self::$table) . "\40\127\x48\x45\x52\105\40\x75\x6e\151\x61\x63\x69\x64\x3d{$uniacid}\x20\x41\116\104\x20" . "\x20\x28\151\x6e\166\x69\x74\x65\137\156\165\155\x3e{$my_invite_num}\40\117\122\40\x28\x69\x6e\x76\151\164\145\x5f\156\165\x6d\40\75\x20{$my_invite_num}\40\x61\156\x64\x20\x69\x64\74{$my_id}\x29\x29"; goto mmtb3; RfWd8: } public static function getMyInvite($uniacid, $vid) { goto rwZNg; j0Mvy: $res = pdo_getall(self::$table, $where, ["\x69\144", "\156\151\x63\x6b\x6e\141\x6d\145", "\150\x65\x61\x64\x69\x6d\147\x75\x72\154"], '', "\151\144\40\x44\105\123\x43", "\x6c\x69\x6d\x69\x74\x20\66"); goto HM1lS; HM1lS: return false == $res ? [] : $res; goto eGfL2; rwZNg: $where = ["\165\x6e\151\x61\x63\151\144" => $uniacid, "\x76\151\x64" => $vid]; goto j0Mvy; eGfL2: } public static function getUserList($uniacid, $where, $pageIndex, $pageSize) { goto E_PEQ; jnKer: return false == $list ? [] : $list; goto oX3Uf; PQuAk: $start = ($pageIndex - 1) * $pageSize; goto F3sZk; F3sZk: $list = pdo_getall(self::$table, $where, self::$allFields, '', "\151\x64\40\x44\x45\123\103", "{$start}\54{$pageSize}"); goto jnKer; E_PEQ: $where["\165\156\151\141\x63\x69\144"] = $uniacid; goto PQuAk; oX3Uf: } public static function getUserCount($uniacid, $where) { $where["\165\156\x69\x61\x63\151\x64"] = $uniacid; return pdo_count(self::$table, $where); } }
<?php
 goto jNFa_; Tl1PQ: goto v0ftT; goto lpo8w; nMTFn: $res = IdiomSetting::update($_W["\x75\156\x69\141\x63\151\x64"], $data); goto V9CDP; V9CDP: v0ftT: goto MOJjj; IM1Sp: RU5bz: goto hiUGU; GMiEu: gH1GT: goto tP4R6; JRgq7: if (empty($settings)) { goto gH1GT; } goto hDMVI; hiUGU: load()->func("\154\x6f\x67\147\151\x6e\147"); goto OvRJy; OvRJy: $data = $_GPC["\x64\x61\x74\141"]; goto T9xM5; eGjKm: if ($is_setting) { goto dcAgC; } goto Qvi4N; tZ4NC: if ($res) { goto H8xsg; } goto WGloC; Nywoz: message("\xe4\xbf\235\xe5\xad\230\xe6\210\220\345\x8a\237\357\xbc\201", $this->createWebUrl("\x53\x65\164\x74\151\x6e\147")); goto MKJhT; v7bMO: EHHS8: goto kdrNO; MKJhT: WxwHw: goto v7bMO; MOJjj: logging_run($data, "\x74\x72\x61\x63\x65", "\x69\x64\x69\157\155\137\163\145\164\x74\151\156\x67\x5f\165\x70\x64\x61\164\x65"); goto tZ4NC; T9xM5: $is_setting = isset($_GPC["\x73\164\x61\164\x75\x73"]) && $_GPC["\163\164\x61\x74\x75\x73"] == "\x31" ? "\61" : ''; goto eGjKm; mmPFG: H8xsg: goto Nywoz; jNFa_: global $_W, $_GPC; goto rq0MO; xdkDg: $settings = IdiomSetting::getSetting($_W["\x75\x6e\151\141\x63\x69\x64"]); goto JRgq7; hDMVI: $is_setting = 1; goto GMiEu; WGloC: message("\xe4\xbf\235\xe5\255\x98\345\xa4\xb1\xe8\xb4\245\357\274\x81"); goto mmPFG; Qvi4N: $res = IdiomSetting::create($_W["\x75\156\x69\x61\x63\x69\144"], $data); goto Tl1PQ; oHEK2: if (!($op == "\x62\141\x73\151\143")) { goto EHHS8; } goto KrRgA; tP4R6: goto WxwHw; goto IM1Sp; KrRgA: if (checksubmit("\163\165\x62\155\151\x74")) { goto RU5bz; } goto xdkDg; rq0MO: $op = $_GPC["\157\x70"] ? $_GPC["\x6f\x70"] : "\x62\141\163\x69\x63"; goto oHEK2; lpo8w: dcAgC: goto nMTFn; kdrNO: include $this->template("\167\x65\x62\x2f\x73\x65\x74\164\151\156\x67");
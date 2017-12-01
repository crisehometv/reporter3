-- Adminer 4.2.5 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `article`;
CREATE TABLE `article` (
  `sn` smallint(6) unsigned NOT NULL AUTO_INCREMENT COMMENT '流水號',
  `title` varchar(300) NOT NULL COMMENT '文章標題',
  `content` text NOT NULL COMMENT '文章內容',
  `username` varchar(65) NOT NULL COMMENT '新增的',
  `create_time` datetime NOT NULL COMMENT '建立時間',
  `update_time` datetime NOT NULL COMMENT '最後更新時間',
  PRIMARY KEY (`sn`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `article` (`sn`, `title`, `content`, `username`, `create_time`, `update_time`) VALUES
(1,	'老化指數續升 嘉義縣老人比率最高',	'（中央社記者謝佳珍台北28日電）內政部今天公布最新統計，台灣老化指數今年2月底首度破百達100.18後，持續攀升到9月的103.66，超過百歲人瑞達3224人；各縣市以嘉義縣老年人口比率最高，其次是雲林縣。\r\n\r\n內政部在農曆9月9日重陽節上午於官方網站公布老年人口統計指出，衛生醫療水準持續提升，生活環境和習慣改善，及各界提倡規律運動，國民平均壽命自民國90年76.75歲上升到105年80歲。\r\n\r\n不過，高齡化程度也越趨明顯。台灣老化指數（每百位幼年人口所當老年人口數）持續攀升，自90年底42.33上升到106年2月底首度破百達100.18（即老年人口數已超越幼年人口數），106年9月底更升到103.66。\r\n\r\n台灣65歲以上老年人口，自90年底197萬3000人逐年遞增到105年底310萬6000人，占總人口數比例也從8.81%上升到13.2%。\r\n\r\n截至今年9月底，戶籍登記65歲以上老年人口322萬人，占總人口13.7%，其中女性占54%，多於男性的46%。全國老年人口有66.1%集中在6直轄市；各縣市老年人口占縣市總人口比率以嘉義縣占18.29%最多，雲林縣占17.4%次之，南投縣占16.35%居第三。\r\n\r\n老年人口性比例（每百女子所當男子數）自民國94年9月底低於100，今年9月底更降到85.2（男性老年人口數約女性的8成5）。除連江縣男性老人多於女性，其餘縣市都以女性老人較多。\r\n\r\n內政部說，今年9月底超過百歲人瑞達3224人，依衛生福利部今年重陽節敬老活動實際訪視結果，男性最高齡者為111歲，女性為114歲。1061028',	'',	'2017-10-28 16:30:00',	'2017-10-28 16:30:00'),
(2,	'是否行使自由球員 黃浩然還在考慮',	'（中央社記者謝靜雯桃園3日電）Lamigo桃猿隊今天舉辦封王慶功宴，陣中捕手黃浩然、野手林智平今年季後都符合自由球員資格。至於是否行使，黃浩然說，還在考慮中，「當球員就是把球打好，爭取好的薪水」。\r\n\r\n中華職棒總冠軍賽結束，中職下週將公布符合自由球員資格名單，根據中職規章，球員在一軍登錄滿125天算一年，中職年資滿9年可行使自由球員權利。今年季後除了桃猿隊黃浩然、林智平外，統一獅隊投手潘威倫、中信兄弟隊野手陳江和等人都符合資格。\r\n\r\n桃猿隊捕手黃浩然今年球季結束將取得自由球員資格，他表示，會不會行使自由球員權利還在考慮。黃浩然解釋，以打球為工作，打到一定的資歷，薪水越來越高當然是一個目標，「但還需要再評估」。\r\n\r\n桃猿隊昨天拿下隊史第5冠，今天舉辦封王慶功宴，遊行活動5日登場，黃浩然表示，「現階段球隊還有很多活動，等球隊活動告一段落後，再來慢慢考慮」。1061103',	'',	'2017-11-04 11:58:21',	'2017-11-04 11:58:21'),
(3,	'Jackson換Bledsoe？ 活塞教頭否認',	'鳳凰城太陽宣布要將後衛Eric Bledsoe交易出去後，至今（4日）仍未找到交易對象。昨天有傳聞指出，底特律活塞可能拿Reggie Jackson出來交換，對此活塞總教練Stan Van Gundy馬上出面澄清，表示他們並沒有做這個交易的打算。\r\n\r\n昨天《ESPN》記者Marc Stein報導，有消息來源人士認為，底特律應該被加進對Bledsoe有興趣的球隊名單中，但要成交需要以Jackson為代價。隨後另1位《ESPN》記者Adrian Wojnarowski則報導，有消息來源人士指出，如果要與活塞交易，太陽可能會希望有第3隊接手Jackson。\r\n\r\n對於這些傳聞，Van Gundy今天出面澄清，活塞並沒有要拿Jackson交易Bledsoe。他也透露，昨天練球結束後看到相關傳聞，他就立刻聯繫Jackson闢謠。Van Gundy說：「昨天很瘋狂。」\r\n\r\n「昨天練習完離開之後，就看到Riggie和Bledsoe的傳聞，所以我得馬上回家打電話給Reggie，說我們沒有要拿你交換Bledsoe。」Van Gundy說：「我通常不會回應這些傳聞，但現在球季才剛開始。交易大限前，你無法回應所有傳聞，但我覺得有必要回應這個傳聞。」\r\n\r\nJackson本人則表示，其實在Van Gundy打電話給他之前，他都沒有看到那些傳聞，他也不會在意：「我不會去注意，也不在乎。這年頭每個人都是媒體，誰都可以在網路上寫任何東西，這就是網路的美麗與墮落之處。有誰在乎？我還在底特律，還會在這裡拚戰，讓球隊做到最好。如果有什麼事情發生，那就發生吧，我不會去擔心那些。」\r\n\r\nVan Gundy指出，球隊總經理Jeff Bower很盡責，隨時都會與其他球隊接觸，或許他也曾就交易Bledsoe的可能性與太陽初步談過，但這些都是很正常的對話，大多不會有結果。他也說：「如果Jeff Bower跟任何人，像是跟（波士頓塞爾蒂克總裁）Danny Ainge聊過，就會出現跟波士頓有關的交易傳聞。但這些人每天都會交談，這就是他們的工作。」',	'',	'2017-11-04 11:59:41',	'2017-11-04 11:59:41'),
(4,	'冷空氣來襲 北台灣今晚至明晨溫度下探17度',	'氣象專家吳德榮今天表示，受冷空氣影響，北台灣今天的天氣陰涼，今晚至明晨氣溫降至最低，嘉義以北最低氣溫約可降至17度左右。此外，桃園以北、宜花仍有局部雨，新竹以南天氣穩定。',	'',	'2017-11-04 15:34:08',	'2017-11-04 15:34:08'),
(5,	'',	'<p>陳姓男子前晚駕贓車違規超車，結果被超的是警車，陳因此被逮，無保飭回後，漏夜到新北市偷車，昨開贓車回宜蘭，想起手機遺忘在派出所，取手機時又被員警瞄到車牌被逮；陳兩天兩度自投羅網，大嘆倒楣到家。全案依竊盜罪嫌移送宜檢，訊後仍無保飭回，警方表示如查獲陳再犯，會建請預防性羈押。</p>\r\n\r\n<p>四十歲的陳姓男子設籍花蓮，大前天在花蓮偷了輛轎車，沿蘇花公路開到新北市八里，因車子沒油，棄車偷一輛沒掛牌的待售小貨車。</p>\r\n\r\n<p>陳把贓車車牌改掛小貨車上，前晚欲開回花蓮，在澳花隧道前的漢本路段，遇上巡邏的蘇澳警分局澳花所所長胡傳明等人。陳竟違規超越警車，一路狂奔而去，員警追逐將他攔下，查出陳涉嫌偷車，還在車內查獲安非他命與吸食器具。</p>\r\n\r\n<p>警方前晚將陳依涉竊盜與吸食毒品罪嫌移送宜蘭地檢署，檢方無保飭回，陳竟漏夜趕回新北市，又偷一輛汽車要開回花蓮，因他手機還在澳花派出所，昨天到派出所領取，胡傳明問他「怎麼來的？」陳回說「開車」，胡看了陳的車牌，一查發現竟然又是贓車。</p>\r\n\r\n<p>陳供稱，車輛被警方查獲，沒有代步工具返家，因對新北市淡水、林口一帶比較熟悉，返回新北市林口區，「借」了一輛車子使用，沒想到又被警方察覺。警方在陳偷來的贓車內，起出一批失竊火車零件，正調查來源。</p>\r\n',	'',	'2017-11-11 14:49:17',	'2017-11-11 14:49:17'),
(6,	'兩天被逮兩次 開贓車超警車、上警局自投羅網',	'<p>陳姓男子前晚駕贓車違規超車，結果被超的是警車，陳因此被逮，無保飭回後，漏夜到新北市偷車，昨開贓車回宜蘭，想起手機遺忘在派出所，取手機時又被員警瞄到車牌被逮；陳兩天兩度自投羅網，大嘆倒楣到家。全案依竊盜罪嫌移送宜檢，訊後仍無保飭回，警方表示如查獲陳再犯，會建請預防性羈押。</p>\r\n\r\n<p>四十歲的陳姓男子設籍花蓮，大前天在花蓮偷了輛轎車，沿蘇花公路開到新北市八里，因車子沒油，棄車偷一輛沒掛牌的待售小貨車。</p>\r\n\r\n<p><span style=\"background-color:#2ecc71\">陳把贓車車牌改掛小貨車上，前晚欲開回花蓮，在澳花隧道前的漢本路段，遇上巡邏的蘇澳警分局澳花所所長胡傳明等人。陳竟違規超越警車，一路狂奔而去，員警追逐將他攔下，查出陳涉嫌偷車，還在車內查獲安非他命與吸食器具。</span></p>\r\n\r\n<p>警方前晚將陳依涉竊盜與吸食毒品罪嫌移送宜蘭地檢署，檢方無保飭回，陳竟漏夜趕回新北市，又偷一輛汽車要開回花蓮，因他手機還在澳花派出所，昨天到派出所領取，胡傳明問他「怎麼來的？」陳回說「開車」，胡看了陳的車牌，一查發現竟然又是贓車。</p>\r\n\r\n<p>陳供稱，車輛被警方查獲，沒有代步工具返家，因對新北市淡水、林口一帶比較熟悉，返回新北市林口區，「借」了一輛車子使用，沒想到又被警方察覺。警方在陳偷來的贓車內，起出一批失竊火車零件，正調查來源。</p>\r\n',	'',	'2017-11-11 14:50:16',	'2017-11-11 14:50:16'),
(7,	'pic test',	'<p><img alt=\"\" src=\"/reporter/elFinder/php/../files/Jellyfish.jpg\" style=\"height:585px; width:780px\" /></p>\r\n',	'',	'2017-11-11 16:27:25',	'2017-11-11 16:27:25');

DROP TABLE IF EXISTS `loginattempts`;
CREATE TABLE `loginattempts` (
  `IP` varchar(20) NOT NULL,
  `Attempts` int(11) NOT NULL,
  `LastLogin` datetime NOT NULL,
  `Username` varchar(65) DEFAULT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `members`;
CREATE TABLE `members` (
  `id` char(23) NOT NULL,
  `username` varchar(65) NOT NULL DEFAULT '',
  `password` varchar(65) NOT NULL DEFAULT '',
  `email` varchar(65) NOT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT '0',
  `mod_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username_UNIQUE` (`username`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- 2017-11-18 01:27:38

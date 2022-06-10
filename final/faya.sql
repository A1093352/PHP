-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2022-06-06 09:30:25
-- 伺服器版本： 10.4.24-MariaDB
-- PHP 版本： 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫: `faya`
--

-- --------------------------------------------------------

--
-- 資料表結構 `article`
--

CREATE TABLE `article` (
  `aNo` int(10) NOT NULL,
  `aTitle` varchar(50) NOT NULL,
  `aNPO` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `aDate` date NOT NULL,
  `aUrl` varchar(2000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `article`
--

INSERT INTO `article` (`aNo`, `aTitle`, `aNPO`, `aDate`, `aUrl`) VALUES
(1, '種下希望的種子', '', '2022-03-13', 'https://www.facebook.com/100346345957025/photos/a.100396359285357/100396212618705'),
(2, '用愛灌溉種子-故事', '', '2022-03-22', 'https://www.facebook.com/permalink.php?story_fbid=106089222049404&id=100346345957025&__cft__[0]=AZXZtCW372xFymFO6wAMJDPC3JY55hrDOz5FqDk2wjoB9A9_gfbXBvV2oMyOSu-NvXDf0om2HP3QN-M707pZCejuemBteY0ZfNZ2VA9rjDlWTwAYhi_oRPISkZaLgW0467RrNUll2V9sx_wj_Dk8peDjpDJxoIDycdJmjyhUatosmA&__tn__=%2CO%2CP-R'),
(3, '用愛灌溉種子-NPO', '', '2022-03-23', 'https://www.facebook.com/permalink.php?story_fbid=pfbid0bFA31ybeMXk9ZK3HuxSyrS9nqMZKPiwoJxbMx6gNUaFisuSHWZc7LestC4YeNrPTl&id=100346345957025&__cft__[0]=AZX7wNDLiM2tQREwFB1AVHkH5Vd2FzX-Jb-kdKVpctHGJO89DS7_fUkyz4RL2kBD9DKm66-XCci-fxGFQznoPTP_Yev324YYB9ufvaaicTyDV4p6LXtuWTlVJu3bR5YvI5eTq5vGcDT2YUPA2T20MywxeDRuGp6g9SgtH5Ij--p-oQ&__tn__=%2CO%2CP-R'),
(4, '用愛灌溉種子-SDGs', '', '2022-03-25', 'https://www.instagram.com/p/CbhJ9n2v5S-/?utm_source=ig_web_copy_link'),
(6, '破土_一切的開始-介紹npo chann', '', '2022-03-28', 'https://www.instagram.com/p/CbpBsjEP-tg/?utm_source=ig_web_copy_link'),
(7, '破土_一切的開始-介紹歌曲\'we are the world\'', '', '2022-03-28', 'https://www.instagram.com/p/CbpB0MVPfcZ/?utm_source=ig_web_copy_link'),
(8, '發出小芽_逐步成長-介紹兒童節由來', '', '2022-04-04', 'https://www.instagram.com/p/Cb5R_o8PRmA/?utm_source=ig_web_copy_link'),
(9, '發出小芽_逐步成長-影片', '', '2022-04-04', 'https://fb.watch/dsxkHDp3Nd/'),
(10, '施肥-財團法人勵馨社會福利基金會', '財團法人勵馨社會福利基金會', '2022-04-11', 'https://www.facebook.com/permalink.php?story_fbid=pfbid0q7Adt5GkvVBqjBuMxzGSiaU15oyLefsTUdJYgvhyNWzD7kLfnuDqWAETw9ZRWpy5l&id=100346345957025&__cft__[0]=AZV9RqYg5Vu_ST5SgheM3chgt7sjTxpeIsAMtAodvKeMCnjimtXkxWbvakZPWrKZT3Ohb5_N9Z5jLk4cRzfaq-ADfd8PEv3i9z6eE0PHWI0c3WdjzbfbmF-kCBfjRKclueJ5mi50pS0bZFX7aKLm0rGjVbGgX6H0LTd4jbpBftiqsFmQxcCQdUzxyTnx1UkTwB33S0OHGqW79b4mi1OKg0vnMk0ElssjWWvY-BIVw1gh-A&__tn__=%2CO%2CP-R'),
(11, '施肥-財團法人勵馨社會福利基金會捐款計畫', '財團法人勵馨社會福利基金會', '2022-04-11', 'https://www.facebook.com/permalink.php?story_fbid=pfbid0wjaznhaYdGq5gRoqNMJgJLT2Tw5Qgw2kpPiZPgs5VYm8zczhNUHZL1Dw3YykNKaLl&id=100346345957025&__cft__[0]=AZXbp2yykZrIwdy1-uqRUoQ3jvH5WxhRN6xxRIWU4zbZyJQLrSwfzBRCqpacG_54KrD02ej3tdWCfkROj8abzFC3HbP8QV-yfOWfVy3wE82wgmjVfgmbO_KoOHIbFOFh4bhB1CGFPVqH3VM7WAb_NmeHtxlBNOxXoVMrERUXKFLJWuieBsvERyASfnsBETh88W-sogIvjJlxq7T88ccDZ3-5uTBLd96MvRPkjuXF0DAEgA&__tn__=%2CO%2CP-R'),
(12, '成長-社團法人世界和平會', '社團法人世界和平會', '2022-04-17', 'https://www.facebook.com/permalink.php?story_fbid=pfbid0eu938eVc5FPWadqU27offoxM5zd6JhMjNGSbBfdPNRjtvf5F3RMhupVpNapq7SWZl&id=100346345957025&__cft__[0]=AZXA7c35bhOHPp1fzUrnUrt3JyW0mujLxRQyHhqsInEbQnOLhDTn17rJSfRk1Xn8icIHSyrczCVgx7iU_cmA_xr5oxF7GNcw4cSF6hkGDQm78-nD1aZC_SoIiMjlXEjsWkZu9D5Axt827zm1wqIsi4mbvhNpV5LUvLTcmwaOJsHDczfhFAJfD4YvDqAU2gmSBOD2azSORTT7VudElfp4wq6Z&__tn__=%2CO%2CP-R'),
(13, '成長-學無貧頸計畫', '社團法人世界和平會', '2022-04-20', 'https://www.facebook.com/permalink.php?story_fbid=pfbid02tGrgHjqX1WiBRiqi8nyhd87FAx9KRu5rNqkkZmF4Tc4wmFyG9JVpEDzVEesqGxCBl&id=100346345957025&__cft__[0]=AZVmzyKLbqdJV6sLKneNd7jy0-StiwD6HhS2O7fYTmYp1RzPGyUSKtkyPvfin160jiXf0pS3VXDpOCCf7vl5D6F5kx7SOE8buY4_WpUC97zIeQed4Jn_e7deqfgiTZAoXhrpb91kVoc66fDSwQ51w1qcu4V6AeR1lGW_3ms5bGkOWmU8t6juq1_MewLxsRCgJRm5C6hBRlmigi1fP89ZWe8A&__tn__=%2CO%2CP-R'),
(14, '茁壯-社團法人台灣彩虹雙福協會', '社團法人台灣彩虹雙福協會', '2022-04-25', 'https://www.facebook.com/permalink.php?story_fbid=pfbid036E86LGtrJMomaAfNw1m3taKkaK5J8k35KP9HZoR7H3uWxLzqzscHgVVz3FNjXyt6l&id=100346345957025&__cft__[0]=AZVV_SkwlBuSmI_bvVdW6ZnJS1lnMOodVhBvzV6J_IfsdAEEDD011qcmfwXKrqHFiqSfeR3tS3knVvabL08IuPGsflGZJE-MkY-kMFfC8V1Xh5jXRzuzJbzOHx_wWobBR0zoNW7lWlpIk17vGUI-W5nuEyqWgpMSZZnfzNFJVxI3ZRpPDTyGKS4Ufim6w-yyu-s5K50reVQaRIz497gvYmfl&__tn__=%2CO%2CP-R'),
(15, '茁壯-社團法人台灣彩虹雙福協會捐款計畫', '社團法人台灣彩虹雙福協會', '2022-04-27', 'https://www.facebook.com/permalink.php?story_fbid=pfbid0vnSD37oFxdyyQfszZki3BiqY8838Jxtn9zaAJ5rqWE9iFPXFis884yxJFRXoyssgl&id=100346345957025&__cft__[0]=AZWLoNeoDeiTYdO02TRV5C4mgB1sjdBKLBLln6z_XUOK8XOi4hB0_LkkjD2Q1CqQw0KNSyTbIMEFFtR7tNtW7tYf06dWDqrag6Y7tFeF0wLIiDstxwBHl7SbDPTEJJT2QmNH2dyetetLZMZq00PDxIDiPS2w4tl67hSJ6HDm0-_1bvEUtQ1REGffkrYYbKVLLogca0Sp9f7skqk9b6QHPEcd&__tn__=%2CO%2CP-R'),
(16, '花朵盛開-財團法人彩虹愛家協會', '財團法人彩虹愛家協會', '2022-05-03', 'https://www.instagram.com/p/CdEcf0OBrO9/?utm_source=ig_web_copy_link'),
(17, '花朵盛開-財團法人彩虹愛家協會捐款計畫', '財團法人彩虹愛家協會', '2022-05-03', 'https://www.instagram.com/p/CdEcs2ah7ll/?utm_source=ig_web_copy_link'),
(18, '結果-社團法人臺灣兒童健康暨身心發展協會', '社團法人臺灣兒童健康暨身心發展協會', '2022-05-10', 'https://www.facebook.com/permalink.php?story_fbid=pfbid02RZVbsj3z59x3aVY6UbroZ2SKZqkLhqdqDXjXFsLZaysXXwrkRZgz9xvjHBThZhdNl&id=100346345957025&__cft__[0]=AZV5RsYZ69o4A7oW8jqiW7_METSRV9dhY_XMjOxgxvA0iANL8JlkpsnPA7n5jQeXtIOypc4fu8lIcSJaGuhLuWvhve42ne2ZaZSAHsZ1TRymFFdXV-6OS3lUcQsswe84PvYQSnPhaPLGs2r_PRlcUsqHPWlHtHHdQEcZgfW2oYVvpCiv19UU_ceDcU7Sj9iKNkQf25cq7eB6ebwC9678M5UC&__tn__=%2CO%2CP-R'),
(19, '結果-社團法人臺灣兒童健康暨身心發展協會捐款計畫', '社團法人臺灣兒童健康暨身心發展協會', '2022-05-13', 'https://www.instagram.com/p/CdfnAzOPEaW/?utm_source=ig_web_copy_link'),
(20, '再生-十週的成果', '', '2022-05-14', 'https://www.facebook.com/permalink.php?story_fbid=pfbid02dNEx4TEtwyTik6SjKXGSqY56dRVKJn4EfeCaxJ64R4EkbcyTFo1QrAsvZS3LGiKEl&id=100346345957025&__cft__[0]=AZVSuA4HKEDXp58Bs-jrRzyAQ3_0QYlySn6OmSyDAwlehmjvG5FH9Mq-mSr4BJ_5ZO4h8_OrCznOBQijgBKa16iGa3G__gEJnb0yNzx_j95Uze_o-i-fg0xIup1adfUFqL7Hpswytr74HsCwndR2k5F4AbIQPHWqXN9MhA41ey04rjGD3DvgKEHn2pNqwm1QUpEfkUZ-Cw7zj-YDc2010Tnz&__tn__=%2CO%2CP-R');

-- --------------------------------------------------------

--
-- 資料表結構 `liked`
--

CREATE TABLE `liked` (
  `lNo` int(10) NOT NULL,
  `pNo` int(10) NOT NULL,
  `uNo` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `plan`
--

CREATE TABLE `plan` (
  `pNo` int(10) NOT NULL,
  `pName` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pNPO` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pTag` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pLink` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pDescription` varchar(2000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `plan`
--

INSERT INTO `plan` (`pNo`, `pName`, `pNPO`, `pTag`, `pLink`, `pDescription`) VALUES
(1, '「陪伴就是愛」-每個孩子都需要被珍惜', '社團法人台灣彩虹愛家生命教育協會', '#社團法人台灣彩虹愛家生命教育協會#彩虹愛家生命教育協會#愛家生命教育協會#陪伴#生命教育#孩子', 'https://www.npochannel.net/Fundraising/Article?CARD_ID=20220225162650562', '阿發是個低自尊、低成就的小男孩，因為身上總是髒髒的，喜歡打架、鬧事，人際關係並不好，也時常遭同學冷言冷語謾罵，時間久了，他漸漸開始懷疑自己存在的價值，心中甚至出現死亡念頭.....'),
(2, '逆境中發光！發現台灣生命小勇士陪伴計畫', '社團法人台灣彩虹愛家生命教育協會', '#社團法人台灣彩虹愛家生命教育協會#彩虹愛家生命教育協會#愛家生命教育協會#兒童#生命教育', 'https://www.npochannel.net/Fundraising/Article?CARD_ID=20220225154525203', '男孩阿萬自出生以來就不曾見過生母，生父也鮮少聯繫，自小由祖父母撫養長大，而祖父母因忙於生計，沒有太多心力陪伴教養阿萬，使阿萬缺乏人際溝通能力，在學校常講髒話，遇到問題就以用暴力解決，甚至上課帶頭搗亂，是老師眼中的「頭痛人物」。'),
(3, '打破貧窮世襲！兒童財商教育計畫', '社團法人台灣彩虹愛家生命教育協會', '#社團法人台灣彩虹愛家生命教育協會#彩虹愛家生命教育協會#愛家生命教育協會#兒童#財商教育', 'https://www.npochannel.net/Fundraising/Article?CARD_ID=20220225160425843', '幫助失落在人生起跑點的孩子，給他們一個翻轉未來人生的機會❤ 男孩小逸的爸爸在工地工作，收入微薄且不穩定，姊姊患有嚴重的癲癇症，安置於愛心之家，媽媽是外籍配偶，為了照顧家人無法上班，目前一家五口包含祖母均由爸爸一人扶養，家庭負擔沈重。'),
(4, '為兒童開啟-村莊學習之路', '社團法人臺灣兒童健康暨身心發展協會', '#社團法人臺灣兒童健康暨身心發展協會#兒童健康暨身心發展協會#柬埔寨#兒童#幼兒園', 'https://www.npochannel.net/Fundraising/Article?CARD_ID=20220223150559265', '有了你我的支持，孩子們的學習才能夠持續在村莊發生。 現在，我們打算集結大眾的力量，誠心地邀請大家一同支持這個計畫。 邀請你們和我們一起，讓Pro-hut的孩子們可以持續擁有這樣的環境，享有快樂學習的機會。'),
(5, '助弱勢孩子走出家庭負面循環', '社團法人台灣彩虹雙福協會', '#社團法人台灣彩虹雙福協會#彩虹雙福協會#弱勢#孩子#負面情緒#南投縣#南投', 'https://www.npochannel.net/Fundraising/Article?CARD_ID=20220428152725671', '南投縣有許多家庭因經濟弱勢、酗酒、婚姻失敗等原因，導致家庭失能、單親、隔代教養，因為缺乏資源，影響孩子的學習及成長，彩虹雙福協會用愛陪伴130位弱勢孩子，提升課業能力，有美好的品格，幫助孩子走出負面循環。'),
(6, '「急難救助」幫助孩子度過難關', '社團法人世界和平會', '#社團法人世界和平會#世界和平會#救助#突發狀況#急難救助', 'https://www.npochannel.net/Fundraising/Article?CARD_ID=20210913172112196', '安定、平順的生活是多麼的可貴，邀請您愛心捐助急難救助方案，拉貧弱急難家庭一把，帶給他們繼續生活的希望。'),
(7, '疫情升溫，急募孩子的營養防疫箱', '社團法人世界和平會', '#社團法人世界和平會#世界和平會#疫情#貧困#弱勢', 'https://www.npochannel.net/Fundraising/Article?CARD_ID=20220518164001890', '近日疫情延燒，許多服務的辛苦家庭確診或被匡列，小朋友無法到校食用愛心餐點，許多負責家裡經濟來源的家長也無法外出工作而沒有收入，疫情波及貧弱家庭經濟的處境將無法避免的重現。'),
(8, '【搶救危機兒】幫助孩子安心學習', '社團法人世界和平會', '#社團法人世界和平會#世界和平會#貧困#弱勢#兒童', 'https://www.npochannel.net/Fundraising/Article?CARD_ID=20220224152651062', '許多貧弱孩童因為家中經濟貧困，開學繳不出學雜費、買不起書籍、文具與制服，讓孩子無法正常接受教育。世界和平會邀請您一起資助貧弱孩童安心的上學。'),
(9, '【搶救受飢兒】吃飽才有希望！', '社團法人世界和平會', '#社團法人世界和平會#世界和平會#貧困#弱勢#飢餓', 'https://www.npochannel.net/Fundraising/Article?CARD_ID=20220224153455217', '你我身邊就有許多受飢兒，因家中經濟困難、疏忽、無力照顧，中午依靠學校或政府補助的餐點，晚餐打包午餐的剩菜飯，但是早上總是餓著肚子上學。如果受疫情影響，各級學校停課改為居家線上學習的話，孩子們的用餐將更容易出現問題。'),
(10, '支持勵馨 一份馨 八倍勵', '財團法人勵馨社會福利事業基金會', '#財團法人勵馨社會福利事業基金會#勵馨金會#勵馨#性侵#女性#性侵害', 'https://www.npochannel.net/Fundraising/Article?CARD_ID=20220119142454265', '勵馨基金會創辦三十年來，遇見超過十萬位被暴力深深傷害的女性朋友，從最早的雛妓救援到家暴庇護，勵馨努力接住許多受傷的靈魂，回首過去一路走來，我們想知道這幾年勵馨到底創造多少成效與社會影響力，因此投入心力，聘請專家評估近三年來社會投資報酬成果，最後得到SROI=8的數字，代表您的每一塊錢投入，可以創造八倍的社會淨價值，而近三年勵馨更是創造出百億的社會淨價值。'),
(11, '培力女孩創造未來', '財團法人勵馨社會福利事業基金會', '#財團法人勵馨社會福利事業基金會#勵馨金會#勵馨#女性#身體自主權#健康權#受教權#性別刻板印象', 'https://www.npochannel.net/Fundraising/Article?CARD_ID=20220118112321593', '女孩，改變世界無限可能。你的支持就是她們的話筒！讓女孩為自己向全世界發聲！'),
(12, '助印兒童保護新觀點手冊缺你不可', '財團法人勵馨社會福利事業基金會', '#財團法人勵馨社會福利事業基金會#勵馨金會#勵馨#熟人性侵害#性侵害#性侵', 'https://www.npochannel.net/Fundraising/Article?CARD_ID=20220118120902999', '在台灣平均每37分鐘就有一個性侵通報案件，其中18歲以下的受害者佔六成，加害者與受害者為相識關係者高達九成。勵馨發展兒童保護新觀點手冊教材，與大家一起看見「防治熟人性侵害的重要性」，學習尊重孩子的身體自主權、提升大人的敏感度以建置友善環境。'),
(13, '幫助目睹暴力兒少 迎向陽光綻放笑容', '財團法人勵馨社會福利事業基金會', '#財團法人勵馨社會福利事業基金會#勵馨金會#勵馨#家庭暴力#兒少#向日葵小屋#家暴', 'https://www.npochannel.net/Fundraising/Article?CARD_ID=20220118115153093', '在台灣平均每37分鐘就有一個性侵通報案件，其中18歲以下的受害者佔六成，加害者與受害者為相識關係者高達九成。勵馨發展兒童保護新觀點手冊教材，與大家一起看見「防治熟人性侵害的重要性」，學習尊重孩子的身體自主權、提升大人的敏感度以建置友善環境。'),
(14, '助學家暴兒少 一塊翻轉命運', '財團法人勵馨社會福利事業基金會', '#財團法人勵馨社會福利事業基金會#勵馨金會#勵馨#兒少#家暴#家庭暴力', 'https://www.npochannel.net/Fundraising/Article?CARD_ID=20220118115153093', '台灣每年約有7萬名孩子暴露在家庭暴力之中，目睹兒雖然不一定直接遭受暴力，但在目睹家人受暴的過程中，傷害也烙印在孩子的心裡。為了幫助他們，勵馨基金會成立「向日葵小屋」，給他們一個溫暖安全的空間接受專業服務，幫助他們能早日從暴力的陰影中走出來，迎向陽光。'),
(15, '蒲公英飛揚計畫─揚起蒲公英 帶走性傷痛', '財團法人勵馨社會福利事業基金會', '#財團法人勵馨社會福利事業基金會#勵馨金會#勵馨#身體自主權#性侵害#性侵', 'https://www.npochannel.net/Fundraising/Article?CARD_ID=20220118114417999', '台灣每37分鐘就有一個性侵通報案件，除了身體上的痛、心靈上的創傷更是嚴重！我們不能漠視，請一起站出來。勵馨基金會呼籲尊重身體自主權─「說不就是不！」、「他/她說願意才是願意！」'),
(16, '女孩的幸福中繼站', '財團法人勵馨社會福利事業基金會', '#財團法人勵馨社會福利事業基金會#勵馨金會#勵馨#家庭暴力#性侵#性侵害#少女', 'https://www.npochannel.net/Fundraising/Article?CARD_ID=20220118113624733', '2019年，約4萬名十八歲以下兒少遭受「性」或「家庭」的暴力威脅。其中逾1萬6千名少女獨自面對家庭暴力、虐待或疏忽照顧等危險處境。勵馨接住了這群少女，幫助她們走出創傷，跨越生存，重拾自信，邁向自立。誠摯邀請您支持「女孩的幸福中繼站」計畫，給弱勢少女一個溫暖的家。'),
(17, '受暴婦幼生活重建 需要您相挺', '財團法人勵馨社會福利事業基金會', '#財團法人勵馨社會福利事業基金會#勵馨金會#勵馨#家庭暴力#婦女#婦幼', 'https://www.npochannel.net/Fundraising/Article?CARD_ID=20220510113041500', '度過暴力危機後，如何生存？受暴婦女脫離暴力家庭或安置家園後，生活變成了一場單打獨鬥的拚搏，月薪大多落在2萬以下，薪水除了付房租，還要負擔孩子的托育費、學費、生活費等，往往脫離暴力後，就會落入貧窮的深淵。勵馨誠摯邀請您，多拉一把，多陪一里路，一同支持受暴婦幼。'),
(18, '勵馨基金會 寶貝小腳ㄚ助養人計畫', '財團法人勵馨社會福利事業基金會', '#財團法人勵馨社會福利事業基金會#勵馨金會#勵馨#未成年媽媽#未成年懷孕#青少女懷孕#青少年父母#未成年性行', 'https://www.npochannel.net/Fundraising/Article?CARD_ID=20220119142200843', '台灣每年約有2500位新生兒由未成年小媽媽所生，依據本會服務經驗，約有90%選擇留養，她們在極度壓力與援助匱乏的環境下，咬牙緊撐，全為了小腳丫。'),
(19, '逆境青年勵志就業', '財團法人勵馨社會福利事業基金會', '#財團法人勵馨社會福利事業基金會#勵馨金會#勵馨#青年就業#職業探索#職能養成#職場接軌', 'https://www.npochannel.net/Fundraising/Article?CARD_ID=20220330110904859', '誠摯邀請您一同守護逆境青年就業權益，幫助他們脫離失學又失業的貧窮循環！');

-- --------------------------------------------------------

--
-- 資料表結構 `subscriber`
--

CREATE TABLE `subscriber` (
  `sNo` int(10) NOT NULL,
  `sEmail` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `subscriber`
--

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE `user` (
  `uNo` int(10) NOT NULL,
  `uName` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `tel` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `uPwd` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `uRole` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `uPhoto` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `user`
--

INSERT INTO `user` (`uNo`, `uName`, `birthday`, `tel`, `email`, `uPwd`, `uRole`, `uPhoto`) VALUES
(1, 'user', '2022-06-07', '12345', 'a1093352@mail.nuk.edu.tw', 'php1234', 'user', 'photo.jpg'),
(2, 'admin', '2022-06-01', '12345', 'otz3016@gmail.com', 'php1234', 'admin', 'photo.jpg');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`aNo`);

--
-- 資料表索引 `liked`
--
ALTER TABLE `liked`
  ADD PRIMARY KEY (`lNo`);

--
-- 資料表索引 `plan`
--
ALTER TABLE `plan`
  ADD PRIMARY KEY (`pNo`);

--
-- 資料表索引 `subscriber`
--
ALTER TABLE `subscriber`
  ADD PRIMARY KEY (`sNo`);

--
-- 資料表索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uNo`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `article`
--
ALTER TABLE `article`
  MODIFY `aNo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `liked`
--
ALTER TABLE `liked`
  MODIFY `lNo` int(10) NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `plan`
--
ALTER TABLE `plan`
  MODIFY `pNo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `subscriber`
--
ALTER TABLE `subscriber`
  MODIFY `sNo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `user`
--
ALTER TABLE `user`
  MODIFY `uNo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

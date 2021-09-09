<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>苹果</title>
  <style type="text/css">
    html,
    body,
    div,
    ul,
    img {
      padding: 0;
      margin: 0;
    }
    
    header {
      background: lightgreen;
      height: 50px;
      text-align: center;
      line-height: 50px;
      font: bold 24px/50px Arial;
    }
    
    nav {
      background: lightblue;
      height: 30px;
      line-height: 30px;
      padding-left: 180px;
    }
    
    section {
      background: lightyellow;
    }
    
    footer {
      background: lightgray;
      height: 50px;
      text-align: center;
      line-height: 50px;
    }
    
    #container {
      width: 1010px;
      height: auto;
      margin: auto;
      background: #E2F9AA;
      padding-bottom: 10px;
    }
    
    #container img {
      margin: auto;
      display: block;
      padding-top: 10px;
    }
    
    #container p {
      margin: 10px;
    }
  </style>
</head>

<body>
  <header>蔬菜水果网上超市</header>
  <nav>
    <a href="../index.php">水果</a>
    <a href="../index.php">蔬菜</a>
    <a href="../index.php">干果</a>
  </nav>
  <section>

    <?php
$arr['banana'] = array('path' => 'img/banana2.jpg','content1' => '&nbsp;&nbsp;香蕉（学名1：Musa nana Lour.）芭蕉科芭蕉属植物，又指其果实。热带地区广泛栽培食用。香蕉味香、富含营养，终年可收获，在温带地区也很受重视。','content2' => '&nbsp;&nbsp;香蕉皮变黑其实是香蕉炭疽病的表现，因与人炭疽病症状相似而得名，病原菌是香蕉盘长孢，这种菌并不会对人体产生任何作用。这种症状只有在香蕉成熟时才会表现出来，表皮出现黑点说明香蕉已完全成熟，此时口感和风味最好。同时未成熟的香蕉中含有大量鞣酸，易导致便秘，成熟后鞣酸含量大大降低，因此表皮出现黑斑时是香蕉最佳食用时机。但当果肉也出现发黑、腐烂等现象时则不建议食用。');

$arr['apple'] = array('path' => 'img/apple2.jpg','content1'=>'&nbsp;&nbsp;烟台苹果于1871年由美国传教士引进，最早以青香蕉、红香蕉两个品种为主，以后又发展了小国光、金帅，改革开放以来引进了红富士、乔纳金等。','content2'=>'&nbsp;&nbsp;甜而闻名于世，历来为国内外市场所喜欢，是中国最重要的苹果产地。产地以烟台辖区内的栖霞、莱阳、莱西、龙口、招远、蓬莱、海阳、牟平、福山为主。其中烟台苹果的主产区是栖霞市、莱阳市、莱西市、莱州市，苹果个头大、皮薄，全区采用无公害套袋技术，山东栖霞市素有“胶东屋脊”之称，面积2017平方公里，主要地形为丘陵山地，有“六山一水三分田”之特点。这样的地理自然环境，非常适宜栽植苹果，栖霞人栽苹果的悠久历史有100多年。改革开放以来，栖霞加快产业结构调整，大力发展苹果产业，果园面积迅速增加到65万亩，年产苹果10亿公斤,成为支柱产业。栖霞因此享有“中国苹果之都"和“中国苹果第一市”之称。');

$arr['orange'] = array('path' => 'img/orange2.jpg','content1'=>'&nbsp;&nbsp;橘子原产地中国，数千年的栽培历史不能说清楚具体位置。由阿拉伯人传遍欧亚大陆，橘子至今在荷兰、德国都还被称为“中国苹果”。中国是橘子果的重要原产地之一，柑橘资源丰富，优良品种繁多，有4000多年的栽培历史。据考证，直到公元1471年，橘、柑、橙等柑橘类果树才从中国传入葡萄牙，公元1665年才传入美国。','content2'=>'&nbsp;&nbsp;橘子果树生长发育、开花结果与温度、日照、水分(湿度)、土壤以及风、海拔、地形和坡向等环境条件紧密相关，这些条件影响最大的数温度。即使差异0.5℃的气温有时会出现截然不同的结果。橘子果生长发育要求12.5～37℃的温度。秋季花芽分化要求昼夜温度分别为20℃左右和10℃左右，根系生长的土温与地上部大致相同。过低的温度会使橘子果受冻，甜橙-4℃，温州蜜柑-5℃时会使枝叶受冻，甜橙-5℃以下，温州蜜柑-6℃以下会冻伤大枝和枝干，甜橙-6.5℃以下，温州蜜柑-9℃以下会使植株冻死。');

$arr['pineapple'] = array('path' => 'img/pineapple2.jpg','content1'=>'&nbsp;&nbsp;菠萝原产于南美洲巴西、巴拉圭的亚马逊河流域一带，16世纪从巴西传入中国。 现在已经流传到整个热带地区。其可食部分主要由肉质增大之花序轴、螺旋状排列于外周的花组成，花通常不结实，宿存的花被裂片围成一空腔，腔内藏有萎缩的雄蕊和花柱。叶的纤维甚坚韧，可供织物、制绳、结网和造纸','content2'=>'&nbsp;&nbsp;凤梨与菠萝在生物学上是同一种水果，[2]  台湾称凤梨，大陆称菠萝。我国水果市场上，凤梨一般是指卡因种，多为进口，菠萝一般是指巴厘种，多为国产。不过在台湾，无论是卡因种还是巴厘种，都称为凤梨。巴厘种菠萝削皮后有“内刺”需要剔除；而卡因种凤梨消掉外皮后没有“内刺”，不需要用到划出一道道沟。论风味，巴厘种优于卡因种，但由于运输原因，进口凤梨只有卡因种。');

$arr['mango'] = array('path' => 'img/mango2.jpg','content1'=>'&nbsp;&nbsp;芒果是杧果（中国植物志）的通俗名（拉丁学名：Mangifera indica L.），芒果是一种原产印度的漆树科常绿大乔木，叶革质，互生；花小，杂性，黄色或淡黄色，成顶生的圆锥花序。核果大，压扁，长5-10厘米，宽3-4.5厘米，成熟时黄色，味甜，果核坚硬。','content2'=>'&nbsp;&nbsp;芒果为著名热带水果之一，芒果果实含有糖、蛋白质、粗纤维，芒果所含有的维生素A的前体胡萝卜素成分特别高，是所有水果中少见的。其次维生素C含量也不低。矿物质、蛋白质、脂肪、糖类等，也是其主要营养成分。可制果汁、果酱、罐头、腌渍、酸辣泡菜及芒果奶粉、蜜饯等。');
$arr['grape'] = array('path' => 'img/grape2.jpg','content1'=>'&nbsp;&nbsp;葡萄（学名：Vitis vinifera L.）为葡萄科葡萄属木质藤本植物，小枝圆柱形，有纵棱纹，无毛或被稀疏柔毛，叶卵圆形，圆锥花序密集或疏散，基部分枝发达，果实球形或椭圆形，花期4-5月，果期8-9月。','content2'=>'&nbsp;&nbsp;葡萄是世界最古老的果树树种之一，葡萄的植物化石发现于第三纪地层中，说明当时已遍布于欧、亚及格陵兰。[2]  葡萄原产亚洲西部，世界各地均有栽培，[1]  世界各地的葡萄约95%集中分布在北半球。');
$arr['pomelo'] = array('path' => 'img/pomelo2.jpg','content1'=>'&nbsp;&nbsp;柚子（学名：Citrus maxima (Burm) Merr.），又名柚、文旦、香栾、朱栾、内紫等。为芸香科柑橘属乔木。嫩枝、叶背、花梗、花萼及子房均被柔毛，嫩叶通常暗紫红色，嫩枝扁且有棱。叶质颇厚，色浓绿，阔卵形或椭圆形；总状花序，有时兼有腋生单花；花蕾淡紫红色，稀乳白色；花萼不规则5-3浅裂；花柱粗长，柱头略较子房大。果圆球形，扁圆形，梨形或阔圆锥状，横径通常10厘米以上；种子多达200余粒，亦有无子的，形状不规则，通常近似长方形；子叶乳白色，单胚。花期4-5月，果期9-12月。','content2'=>'&nbsp;&nbsp;中国长江以南各地，最北限见于河南省信阳及南阳一带，全为栽培。东南亚各国有栽种。
果肉含维生素C较高。有消食、解酒毒功效。');
$arr['pawpaw'] = array('path' => 'img/pawpaw2.jpg','content1'=>'&nbsp;&nbsp;木瓜（学名：Chaenomeles sinensis (Thouin)Koehne）：蔷薇科木瓜属，灌木或小乔木，高达5－10米，叶片椭圆卵形或椭圆长圆形，稀倒卵形，长5－8厘米，宽3.5－5.5厘米，叶柄长5－10毫米，微被柔毛，有腺齿；果实长椭圆形，长10－15厘米，暗黄色，木质，味芳香，果梗短。花期4月，果期9－10月。','content2'=>'&nbsp;&nbsp;产山东、陕西、河南（桐柏）、湖北、江西、安徽、江苏、浙江、广东、广西。[1]
习见栽培供观赏，果实味涩，水煮或浸渍糖液中供食用，入药有解酒、去痰、顺气、止痢之效。果皮干燥后仍光滑，不皱缩，故有光皮木瓜之称。木材坚硬可作床柱用。');
$arr['kivi'] = array('path' => 'img/kivi2.jpg','content1'=>'&nbsp;&nbsp;猕猴桃（学名：Actinidia chinensis Planch），也称奇异果（奇异果是猕猴桃的一个人工选育品种，因使用广泛而成为了猕猴桃的代称）[1]  ，果形一般为椭圆状，早期外观呈绿褐色，成熟后呈红褐色，表皮覆盖浓密绒毛，可食用，其内是呈亮绿色的果肉和一排黑色或者红色的种子。因猕猴喜食，故名猕猴桃；亦有说法是因为果皮覆毛，貌似猕猴而得名，是一种品质鲜嫩，营养丰富，风味鲜美的水果。','content2'=>'&nbsp;&nbsp;猕猴桃的质地柔软，口感酸甜。味道被描述为草莓、香蕉、菠萝三者的混合。猕猴桃除含有猕猴桃碱、蛋白水解酶、单宁果胶和糖类等有机物，以及钙、钾、硒、锌、锗等微量元素和人体所需17种氨基酸外，还含有丰富的维生素C、葡萄酸、果糖、柠檬酸、苹果酸、脂肪。');
$arr['persimmon'] = array('path' => 'img/persimmon2.jpg','content1'=>'&nbsp;&nbsp;柿子，是柿科植物干果类水果，成熟季节在十月左右，果实形状较多，如球形、扁桃、近似锥形、方形等，不同的品种颜色从浅橘黄色到深橘红色不等，大小从2厘米到10厘米，重量从100克到450克。','content2'=>'&nbsp;&nbsp;原产地在中国，栽培已有一千多年的历史。');
$arr['lemon'] = array('path' => 'img/lemon2.jpg','content1'=>'&nbsp;&nbsp;柠檬（学名：Citrus limon (L.) Burm. f.），芸香科柑橘属植物，柠檬又称柠果、洋柠檬、益母果等。[1]  小乔木，枝少刺或近于无刺，嫩叶及花芽暗紫红色，叶片厚纸质，卵形或椭圆形。单花腋生或少花簇生。果椭圆形或卵形，果皮厚，通常粗糙，柠檬黄色，果汁酸至甚酸，种子小，卵形，端尖；种皮平滑，子叶乳白色，通常单或兼有多胚。花期4-5月，果期9-11月。','content2'=>'&nbsp;&nbsp;柠檬产中国长江以南，[2]  原产东南亚，主要产地为美国、意大利、西班牙和希腊。');
$arr['pomegranate'] = array('path' => 'img/pomegranate2.jpg','content1'=>'&nbsp;&nbsp;石榴（学名：Punica granatum L.）落叶乔木或灌木；单叶，通常对生或簇生，无托叶。花顶生或近顶生，单生或几朵簇生或组成聚伞花序，近钟形，裂片5-9，花瓣5-9，多皱褶，覆瓦状排列；胚珠多数。浆果球形，顶端有宿存花萼裂片，果皮厚；种子多数，浆果近球形，果熟期9-10月。外种皮肉质半透明，多汁；内种皮革质。','content2'=>'&nbsp;&nbsp;性味甘、酸涩、温，具有杀虫、收敛、涩肠、止痢等功效。石榴果实营养丰富，维生素C含量比苹果、梨要高出一二倍。');
$arr['pear'] = array('path' => 'img/pear2.jpg','content1'=>'&nbsp;&nbsp;梨，通常品种是一种落叶乔木或灌木，极少数品种为常绿，属于被子植物门双子叶植物纲蔷薇科苹果亚科。叶片多呈卵形，大小因品种不同而各异。花为白色，或略带黄色、粉红色，有五瓣。','content2'=>'&nbsp;&nbsp;果实形状有圆形的，也有基部较细尾部较粗的，即俗称的“梨形”；不同品种的果皮颜色大相径庭，有黄色、绿色、黄中带绿、绿中带黄、黄褐色、绿褐色、红褐色、褐色，个别品种亦有紫红色；野生梨的果径较小，在1到4厘米之间，而人工培植的品种果径可达8厘米，长度可达18厘米。');
$arr['strawberry'] = array('path' => 'img/strawberry2.jpg','content1'=>'&nbsp;&nbsp;草莓（学名：Fragaria × ananassa Duch.），多年生草本，高10-40厘米。茎低于叶或近相等，密被开.展黄色柔毛。叶三出，小叶具短柄，质地较厚，倒卵形或菱形，上面深绿色，几无毛，下面淡白绿色，疏生毛，沿脉较密；叶柄密被开展黄色柔毛。聚伞花序，花序下面具一短柄的小叶；花两性；萼片卵形，比副萼片稍长；花瓣白色，近圆形或倒卵椭圆形。聚合果大，宿存萼片直立，紧贴于果实；瘦果尖卵形，光滑。花期4-5月，果期6-7月。','content2'=>'&nbsp;&nbsp;原产南美，中国各地及欧洲等地广为栽培。草莓营养价值高，含有多种营养物质 ，且有保健功效。');
$arr['blueberry'] = array('path' => 'img/blueberry2.jpg','content1'=>'&nbsp;&nbsp;英文名称：Blueberry，意为蓝色浆果，属杜鹃花科，越橘属植物。起源于北美，多年生灌木小浆果果树。因果实呈蓝色，故称为蓝莓','content2'=>'&nbsp;&nbsp;其中，由于蓝莓富含花青素，具有活化视网膜功效，可以强化视力，防止眼球疲劳而备受注目。也是世界粮农组织推荐的五大健康水果之一。并且据美国、日本、欧洲科学家研究，经常食用蓝莓制品，还可明显地增强视力，消除眼睛疲劳。医学临床报告也显示，蓝莓中的花青素可以促进视网膜细胞中的视紫质再生，预防近视，增进视力。');
$arr['waxberry'] = array('path' => 'img/waxberry2.jpg','content1'=>'&nbsp;&nbsp;杨梅属于杨梅科杨梅属小乔木或灌木植物，又称圣生梅、白蒂梅、树梅具有很高的药用和食用价值，在中国华东和湖南、广东、广西、贵州等地区均有分布。杨梅原产中国浙江余姚，1973年余姚境内发掘新石器时代的河姆渡遗址时发现杨梅属花粉，说明在7000多年以前该地区就有杨梅生长。该属有50多个种，中国已知的有杨梅、白杨梅、毛杨梅、青杨梅和矮杨梅，经济栽培主要是杨梅。','content2'=>'&nbsp;&nbsp;杨梅枝繁叶茂，树冠圆整，初夏又有红果累累，十分可爱，是园林绿化结合生产的优良树种。孤植、丛植于草坪、庭院，或列植于路边都很合适；若采用密植方式来分隔空间或起遮蔽作用也很理想。经济用途果味酸甜适中，既可直接食用，又可加工成杨梅干、酱、蜜饯等，还可酿酒，有止渴、生津、助消化等功能。');
$arr['peach'] = array('path' => 'img/peach2.jpg','content1'=>'&nbsp;&nbsp;是一种果实作为水果的落叶小乔木，花可以观赏，果实多汁，可以生食或制桃脯、罐头等，核仁也可以食用。果肉有白色和黄色的，桃有多种品种，一般果皮有毛，“油桃”的果皮光滑；“蟠桃”果实是扁盘状；“碧桃”是观赏花用桃树，有多种形式的花瓣。','content2'=>'&nbsp;&nbsp;原产中国，各省区广泛栽培。世界各地均有栽植。');
$arr['coconut'] = array('path' => 'img/coconut2.jpg','content1'=>'&nbsp;&nbsp;椰子（学名：Cocos nucifera L. ）棕榈科椰子属植物，植株高大，乔木状，高15-30米，茎粗壮，有环状叶痕，基部增粗，常有簇生小根。叶柄粗壮，花序腋生，果卵球状或近球形，果腔含有胚乳（即“果肉”或种仁），胚和汁液（椰子水），花果期主要在秋季。','content2'=>'&nbsp;&nbsp;椰子原产于亚洲东南部、印度尼西亚至太平洋群岛，中国广东南部诸岛及雷州半岛、海南、台湾及云南南部热带地区均有栽培。');
$arr['apricot'] = array('path' => 'img/apricot2.jpg','content1'=>'&nbsp;&nbsp;杏（学名：Armeniaca vulgaris Lam.）落叶乔木。地生，植株无毛。叶互生，阔卵形或圆卵形叶子，边缘有钝锯齿；近叶柄顶端有二腺体；淡红色花单生或2-3个同生，白色或微红色。圆、长圆或扁圆形核果，果皮多为白色、黄色至黄红色，向阳部常具红晕和斑点；','content2'=>'&nbsp;&nbsp;暗黄色果肉，味甜多汁；核面平滑没有斑孔，核缘厚而有沟纹。种仁多苦味或甜味。花期3-4月，果期6-7月。中国各地多有栽培。。');
$arr['cherry'] = array('path' => 'img/cherry2.jpg','content1'=>'&nbsp;&nbsp;樱桃（学名：Cerasus pseudocerasus），是某些李属类植物的统称，包括樱桃亚属、酸樱桃亚属、桂樱亚属等。乔木，高2-6米，树皮灰白色。小枝灰褐色，嫩枝绿色，无毛或被疏柔毛。冬芽卵形，无毛。','content2'=>'&nbsp;&nbsp;果实可以作为水果食用，外表色泽鲜艳、晶莹美丽、红如玛瑙，黄如凝脂，果实富含糖、蛋白质、维生素及钙、铁、磷、钾等多种元素。');
?>

      <?php
// 获取 通过 get提交 到 当前页的数据
$flag = $_GET['flag'];//banana
// echo $flag;
// 获取 对应的值即可
// 获取 水果 对应的 数组
$fruit = $arr[$flag];
// print_r($fruit);
?>
        <div id="container">
          <img src="<?php echo  $fruit['path']  ?>">
          <p>
            &nbsp;&nbsp;
            <?php echo $fruit['content1'] ?>
          </p>
          <p>
            &nbsp;&nbsp;
            <?php echo $fruit['content2'] ?>
          </p>
        </div>


  </section>
  <footer>※版权所有<a href="http://www.baidu.com">百度</a></footer>
</body>

</html>
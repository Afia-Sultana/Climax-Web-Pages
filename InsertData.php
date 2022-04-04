<?php

$con = mysqli_connect("localhost", "root", "", "climaxshop");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql ="INSERT INTO `product`(`ID`, `Name`, `Picture`, `Price`, `Size`, `Quantity`, `Description`, `Color`, `Material`, `Category`) VALUES ('1','Pink Dress','Dress1','1200','S,M,L','30','Pink Shirt with white trouser','pink','Lawn','Clothing')";
mysqli_query($con, $sql);

$sql ="INSERT INTO `product`(`ID`, `Name`, `Picture`, `Price`, `Size`, `Quantity`, `Description`, `Color`, `Material`, `Category`) VALUES ('2','Yellow Dress','Dress4','1200','S,M,L','30','Yellow Shirt with white trouser','yellow','Lawn','Clothing')";
mysqli_query($con, $sql);

$sql ="INSERT INTO `product`(`ID`, `Name`, `Picture`, `Price`, `Size`, `Quantity`, `Description`, `Color`, `Material`, `Category`) VALUES ('3','Orange Dress','Dress2','1200','S,M,L','30','Orange Shirt with white trouser','orangered','Lawn','Clothing')";
mysqli_query($con, $sql);

$sql ="INSERT INTO `product`(`ID`, `Name`, `Picture`, `Price`, `Size`, `Quantity`, `Description`, `Color`, `Material`, `Category`) VALUES ('4','Blue Kurta','Dress6','1200','S,M,L','30','Blue frock with white trouser','blue','Lawn','Clothing')";
mysqli_query($con, $sql);

$sql ="INSERT INTO `product`(`ID`, `Name`, `Picture`, `Price`, `Size`, `Quantity`, `Description`, `Color`, `Material`, `Category`) VALUES ('5','DeepPink Kurta','Dress5','1200','S,M,L','30','DeepPink Shirt with white trouser','deeppink','Lawn','Clothing')";
mysqli_query($con, $sql);

$sql ="INSERT INTO `product`(`ID`, `Name`, `Picture`, `Price`, `Size`, `Quantity`, `Description`, `Color`, `Material`, `Category`) VALUES ('6','Brown Dress','Dress3','1200','S,M,L','30','Brown Shirt with white trouser','wheat','Lawn','Clothing')";
mysqli_query($con, $sql);

$sql ="INSERT INTO `product`(`ID`, `Name`, `Picture`, `Price`, `Size`, `Quantity`, `Description`, `Color`, `Material`, `Category`) VALUES ('7','Kurta Shalwar','Dress9','899','S,M,L','30','Green Shirt with white trouser','green','Raw Silk','Clothing')";
mysqli_query($con, $sql);

$sql ="INSERT INTO `product`(`ID`, `Name`, `Picture`, `Price`, `Size`, `Quantity`, `Description`, `Color`, `Material`, `Category`) VALUES ('8','Dupatta','Dress10','899','S,M,L','30','Black silk Dupatta','black','Raw Silk','Clothing')";
mysqli_query($con, $sql);

$sql ="INSERT INTO `product`(`ID`, `Name`, `Picture`, `Price`, `Size`, `Quantity`, `Description`, `Color`, `Material`, `Category`) VALUES ('9','Shirt','Dress11','899','S,M,L','30','Pink shirt','deeppink','Raw Silk','Clothing')";
mysqli_query($con, $sql);

$sql ="INSERT INTO `product`(`ID`, `Name`, `Picture`, `Price`, `Size`, `Quantity`, `Description`, `Color`, `Material`, `Category`) VALUES ('10','Women Sandal','shoe1','1900','34,35,36,37,38,39','50','Womens sandal, leather upper and leather sole. Padded insole. Closed heel and zip to ease the fit. Band play and front weave','silver','Leather','Shoes')";
mysqli_query($con, $sql);

$sql ="INSERT INTO `product`(`ID`, `Name`, `Picture`, `Price`, `Size`, `Quantity`, `Description`, `Color`, `Material`, `Category`) VALUES ('11','Women Sneaker','shoe2','2200','34,35,36,37,38,39','50','Women shoe with leather upper and rubber sole. Oversized bottom sneaker model, laced on the front.','white','Leather,Rubber','Shoes')";
mysqli_query($con, $sql);

$sql ="INSERT INTO `product`( `ID`,`Name`, `Picture`, `Price`, `Size`, `Quantity`, `Description`, `Color`, `Material`, `Category`) VALUES ('12','Women Sandal','shoe3','1500','34,35,36,37,38,39','50','Woman sandal with leather upper and leather sole. Heel strap and open toe, particular oversized neckline','black','Leather','Shoes')";
mysqli_query($con, $sql);

$sql ="INSERT INTO `product`( `ID`,`Name`, `Picture`, `Price`, `Size`, `Quantity`, `Description`, `Color`, `Material`, `Category`) VALUES ('13','Women Shoe','shoe4','2100','34,35,36,37,38,39','50','Woman shoe with leather upper and leather sole. Moccasin model with decorative band inserts in leather','pink','Leather','Shoes')";
mysqli_query($con, $sql);
$sql ="INSERT INTO `product`(`ID`, `Name`, `Picture`, `Price`, `Size`, `Quantity`, `Description`, `Color`, `Material`, `Category`) VALUES ('14','Women Shoe','shoe5','2100','34,35,36,37,38,39','50','Woman shoe with leather upper and leather sole. Open heel and pointed toe, sweetheart neckline and strap on the back','black','Leather','Shoes')";
mysqli_query($con, $sql);

$sql ="INSERT INTO `product`(`ID`, `Name`, `Picture`, `Price`, `Size`, `Quantity`, `Description`, `Color`, `Material`, `Category`) VALUES ('15','Ankle Boot','shoe6','2500','34,35,36,37,38,39','50','Woman ankle boot with leather upper and leather bottom. Texan boot with rhinestones on the top','burlywood','Leather','Shoes')";
mysqli_query($con, $sql);

$sql ="INSERT INTO `product`(`ID`, `Name`, `Picture`, `Price`, `Size`, `Quantity`, `Description`, `Color`, `Material`, `Category`) VALUES ('16','Woman Shoe','shoe7','2500','34,35,36,37,38,39','50','Womans sandal in leather and leather sole. Front bands embellished with jewel accessory. Ankle closure.','peru','Leather','Shoes')";
mysqli_query($con, $sql);

$sql ="INSERT INTO `product`( `ID`,`Name`, `Picture`, `Price`, `Size`, `Quantity`, `Description`, `Color`, `Material`, `Category`) VALUES ('17','Women Shoes','shoe10','2500','34,35,36,37,38,39','50','Woman shoe in leather and leather sole. Stiletto heel and sweetheart neckline','silver','Leather','Shoes')";
mysqli_query($con, $sql);

$sql ="INSERT INTO `product`( `ID`,`Name`, `Picture`, `Price`, `Size`, `Quantity`, `Description`, `Color`, `Material`, `Category`) VALUES ('18','Pearl Pendant Necklace','jewel1','499','default','50','Details Necklace with circular pearl pendant Featuring easy clasp fastening with extender chains ','gold','Default','Jewellery')";
mysqli_query($con, $sql);

$sql ="INSERT INTO `product`( `ID`,`Name`, `Picture`, `Price`, `Size`, `Quantity`, `Description`, `Color`, `Material`, `Category`) VALUES ('19','Layered Necklace','jewel2','799','default','50','Details Layered necklace with drop pendants and metallic detail Featuring easy clasp fastening with extender chains','gold','Default','Jewellery')";
mysqli_query($con, $sql);



$sql ="INSERT INTO `product`( `ID`,`Name`, `Picture`, `Price`, `Size`, `Quantity`, `Description`, `Color`, `Material`, `Category`) VALUES ('20','Chunky Beaded Necklace','jewel3','799','default','50','Necklace with large beads in different textures  Featuring easy clasp fastening with extender chains','pink','Default','Jewellery')";
mysqli_query($con, $sql);


$sql ="INSERT INTO `product`( `ID`,`Name`, `Picture`, `Price`, `Size`, `Quantity`, `Description`, `Color`, `Material`, `Category`) VALUES ('21','RHINESTONE PEARL NECKLACE','jewel4','799','default','50','Long necklace with adjustable rhinestone pearl flower pendant and hanging pearls','gold','Gold','Jewellery')";
mysqli_query($con, $sql);


$sql ="INSERT INTO `product`( `ID`,`Name`, `Picture`, `Price`, `Size`, `Quantity`, `Description`, `Color`, `Material`, `Category`) VALUES ('22','DROP BEADS NECKLACE','jewel5','899','default','50','Necklace with textured drop shaped beads and diamante','red','Default','Jewellery')";
mysqli_query($con, $sql);

$sql ="INSERT INTO `product`( `ID`,`Name`, `Picture`, `Price`, `Size`, `Quantity`, `Description`, `Color`, `Material`, `Category`) VALUES ('23','Pearl Earrings','jewel6','799','default','50','Details Short drop earrings adorned with pearls','white','Default','Jewellery')";
mysqli_query($con, $sql);

$sql ="INSERT INTO `product`( `ID`,`Name`, `Picture`, `Price`, `Size`, `Quantity`, `Description`, `Color`, `Material`, `Category`) VALUES ('24','Multi Toned Earrings','jewel7','699','default','50','Geometric shaped multi toned earrings','brown','Default','Jewellery')";
mysqli_query($con, $sql);

$sql ="INSERT INTO `product`( `ID`,`Name`, `Picture`, `Price`, `Size`, `Quantity`, `Description`, `Color`, `Material`, `Category`) VALUES ('25','Beaded Hoops','jewel8','899','default','50','Basic hoop earrings with hanging beads on bottom','red','Default','Jewellery')";
mysqli_query($con, $sql);

$sql ="INSERT INTO `product`( `ID`,`Name`, `Picture`, `Price`, `Size`, `Quantity`, `Description`, `Color`, `Material`, `Category`) VALUES ('26','Multi Pack Bracelets','jewel9','699','default','50','4 bracelets in various designs
Featuring easy clasp fastening with extender chain','golden','Gold','Jewellery')";
mysqli_query($con, $sql);


$sql ="INSERT INTO `product`( `ID`,`Name`, `Picture`, `Price`, `Size`, `Quantity`, `Description`, `Color`, `Material`, `Category`) VALUES ('27','Pearl Coin Bracelet','jewel10','699','default','50','Pearl and chain bracelet with metallic coin Featuring t-bar closure','gold','Gold','Jewellery')";
mysqli_query($con, $sql);


$sql ="INSERT INTO `product`( `ID`,`Name`, `Picture`, `Price`, `Size`, `Quantity`, `Description`, `Color`, `Material`, `Category`) VALUES ('28','Textured Top Handle Bag','bag1','2999','default','50','Pearl and chain bracelet with metallic coin Featuring t-bar closure','white','Leather','Bags')";
mysqli_query($con, $sql);

$sql ="INSERT INTO `product`( `ID`,`Name`, `Picture`, `Price`, `Size`, `Quantity`, `Description`, `Color`, `Material`, `Category`) VALUES ('29','Studded Round Bottom Handbag','bag2','2999','default','50','Bag with textured metallic twin handles Zip on top Adjustable and detachable','tea','Leather','Bags')";
mysqli_query($con, $sql);

$sql ="INSERT INTO `product`( `ID`,`Name`, `Picture`, `Price`, `Size`, `Quantity`, `Description`, `Color`, `Material`, `Category`) VALUES ('30','Trapeze Shoulder Bag','bag3','2899','default','50','Bag with twin handles Zip on top Two pockets with magnetic fasteners Adjustable and detachable shoulder strap','blue','Leather','Bags')";
mysqli_query($con, $sql);


$sql ="INSERT INTO `product`( `ID`,`Name`, `Picture`, `Price`, `Size`, `Quantity`, `Description`, `Color`, `Material`, `Category`) VALUES ('31','Plain Shoulder Bag','bag4','1999','default','50',' Bag with twin handles Zip on top One side zip pocket inside','pink','Default','Bags')";
mysqli_query($con, $sql);


$sql ="INSERT INTO `product`( `ID`,`Name`, `Picture`, `Price`, `Size`, `Quantity`, `Description`, `Color`, `Material`, `Category`) VALUES ('32','Geometric Patterned Clutch','bag5','1799','default','50','Flap with magnetic fastener Long gold chain as shoulder strap','pink','Default','Bags')";
mysqli_query($con, $sql);


$sql ="INSERT INTO `product`( `ID`,`Name`, `Picture`, `Price`, `Size`, `Quantity`, `Description`, `Color`, `Material`, `Category`) VALUES ('33','Pearl Glitter Clutch','bag6','2999','default','50','Hard box clutch with metallic pearl finished top closure Detachable gold chain as shoulder strap','midnightblue','Default','Bags')";
mysqli_query($con, $sql);


$sql ="INSERT INTO `product`( `ID`,`Name`, `Picture`, `Price`, `Size`, `Quantity`, `Description`, `Color`, `Material`, `Category`) VALUES ('34','Luminous Silk Compact Blusher','cosmetic1','493','default','50','Paraben free, Dermatologically tested, Infused with botanicals, Vegan','pink','Default','Cosmetics')";
mysqli_query($con, $sql);

$sql ="INSERT INTO `product`( `ID`,`Name`, `Picture`, `Price`, `Size`, `Quantity`, `Description`, `Color`, `Material`, `Category`) VALUES ('35','Perfecting Contouring Powder Palette','cosmetic2','943','default','50','Contouring palette is a kit of three shades that help to define your cheekbones, nose and jawline.','multi','Default','Cosmetics')";
mysqli_query($con, $sql);

$sql ="INSERT INTO `product`( `ID`,`Name`, `Picture`, `Price`, `Size`, `Quantity`, `Description`, `Color`, `Material`, `Category`) VALUES ('36','Total Look Brow Kit','cosmetic3','643','default','50','Creates fuller, thicker and more defined eyebrows with all in one kit.','brown','Default','Cosmetics')";
mysqli_query($con, $sql);

$sql ="INSERT INTO `product`( `ID`,`Name`, `Picture`, `Price`, `Size`, `Quantity`, `Description`, `Color`, `Material`, `Category`) VALUES ('37','Perfect Lash Mascara','cosmetic4','824','default','50','Fragrance & paraben free and Dermatologically tested','black','Default','Cosmetics')";
mysqli_query($con, $sql);

$sql ="INSERT INTO `product`( `ID`,`Name`, `Picture`, `Price`, `Size`, `Quantity`, `Description`, `Color`, `Material`, `Category`) VALUES ('38','Mineral Semi Matte Lipstick','cosmetic5','1585','default','50','Velvety texture provides a long-lasting high coverage with a semi-matte finish','maroon','Default','Cosmetics')";
mysqli_query($con, $sql);

$sql ="INSERT INTO `product`( `ID`,`Name`, `Picture`, `Price`, `Size`, `Quantity`, `Description`, `Color`, `Material`, `Category`) VALUES ('39','Mineral Lip Gloss','cosmetic6','643','default','50','Special creamy texture provides a silky soft feeling to the lips that lasts all-day-long','peachpuff','Default','Cosmetics')";
mysqli_query($con, $sql);


mysqli_close($con);
?>
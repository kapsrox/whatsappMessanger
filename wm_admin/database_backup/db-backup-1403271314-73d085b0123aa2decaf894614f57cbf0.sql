DROP TABLE acc_type;

CREATE TABLE `acc_type` (
  `client_id` int(10) NOT NULL AUTO_INCREMENT,
  `client_name` varchar(30) NOT NULL,
  `client_pass` varchar(255) NOT NULL,
  `client_cat_id` int(10) NOT NULL,
  PRIMARY KEY (`client_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO acc_type VALUES("1","kapil","kapil","1");



DROP TABLE categories;

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(100) NOT NULL,
  `cat_img` varchar(100) NOT NULL,
  `client_id` int(11) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

INSERT INTO categories VALUES("1","Apparel & Fashion","images/cat/Apparel-&-Fashion.png","0");
INSERT INTO categories VALUES("2","Automobile","images/cat/Automobile.png","0");
INSERT INTO categories VALUES("3","Beauty & Personal Care","images/cat/Beauty-&-Personal-Care.png","0");
INSERT INTO categories VALUES("4","Computers & Hardware","","0");
INSERT INTO categories VALUES("5","Construction & Maintenance","images/cat/Construction-&-Maintenance.png","0");
INSERT INTO categories VALUES("6","Education & Training","images/cat/Education-&-Training.png","0");
INSERT INTO categories VALUES("7","Electronics & Electrical","images/cat/Electronics-&-Electrical.png","0");
INSERT INTO categories VALUES("8","Entertainment & Media","images/cat/Entertainment-&-Media.png","0");
INSERT INTO categories VALUES("9","Financial Services","images/cat/Financial-Services.png","0");
INSERT INTO categories VALUES("10","Hotel, Restaurants, Clubs & Resorts","images/cat/Hotel,-Restaurants,-Clubs-&-Resorts.png","0");
INSERT INTO categories VALUES("11","Gifts & Crafts","images/cat/Gifts-&-Crafts.png","0");
INSERT INTO categories VALUES("12","Health & Medicine","images/cat/Health-&-Medicine.png","0");
INSERT INTO categories VALUES("13","Home & Garden","images/cat/Home-&-Garden.png","0");
INSERT INTO categories VALUES("14","Industrial Supplies","images/cat/Industrial-Supplies.png","0");
INSERT INTO categories VALUES("15","Information Technology","images/cat/Information-Technology.png","0");
INSERT INTO categories VALUES("16","Internet & Online","","0");
INSERT INTO categories VALUES("17","Jewellery & Gems","images/cat/Jewellery-&-Gems.png","0");
INSERT INTO categories VALUES("18","Machinery & Equipment","images/cat/Machinery-&-Equipment.png","0");
INSERT INTO categories VALUES("19","Metals & Minerals","","0");
INSERT INTO categories VALUES("20","Office Supplies","images/cat/Office-Supplies.png","0");
INSERT INTO categories VALUES("21","Packaging & Paper","images/cat/Packaging-&-Paper.png","0");
INSERT INTO categories VALUES("22","Plastic & Rubber","","0");
INSERT INTO categories VALUES("23","Printing & Publishing","images/cat/Printing-&-Publishing.png","0");
INSERT INTO categories VALUES("24","Professional Services","images/cat/Professional-Services.png","0");
INSERT INTO categories VALUES("25","Real Estate","images/cat/Real-Estate.png","0");
INSERT INTO categories VALUES("26","Retail & Consumer Services","","0");
INSERT INTO categories VALUES("27","Security & Protection","images/cat/Security-&-Protection.png","0");
INSERT INTO categories VALUES("28","Telecommunications","images/cat/Telecommunications.png","0");
INSERT INTO categories VALUES("29","Transportation & Logistics","images/cat/Transportation-&-Logistics.png","0");
INSERT INTO categories VALUES("30","Tours & Travel ","images/cat/Tours-&-Travel.png","0");



DROP TABLE client_cat;

CREATE TABLE `client_cat` (
  `client_cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `client_cat_name` varchar(30) NOT NULL,
  `client_cat_priority` tinyint(4) NOT NULL,
  PRIMARY KEY (`client_cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO client_cat VALUES("1","free","4");
INSERT INTO client_cat VALUES("2","silver","3");
INSERT INTO client_cat VALUES("3","gold","2");
INSERT INTO client_cat VALUES("4","platinum","1");



DROP TABLE company_info;

CREATE TABLE `company_info` (
  `info_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` int(11) NOT NULL,
  `subc_id` int(11) NOT NULL,
  `info_logo` varchar(100) NOT NULL DEFAULT 'images/nologo.png',
  `info_information` text NOT NULL,
  `info_address` text NOT NULL,
  `info_url` varchar(255) NOT NULL,
  `info_tube` text NOT NULL,
  `info_prod_desc` text NOT NULL,
  `info_timing` varchar(100) NOT NULL,
  `info_staff` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`info_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO company_info VALUES("1","4","44","images/nologo.png","<p>sdsdgsgssgsgsgsg</p>","sgsgsgsgsgsgsgsgsgsgsgsgsgsdg","http://www.facebook.com"," ","<p>sgsgsgsg</p>","10:00 AM to 7:00 PM","","5");
INSERT INTO company_info VALUES("2","5","59","images/nologo.png","<p>sdhsdhfjfgjtkfkfkfk</p>","jfjfjfjfjfjffkfkkfkfgkfkfgk","www.facebook.com"," ","<p>ffkfkfkkfkkk</p>","10:00 AM to 7:00 PM","","6");
INSERT INTO company_info VALUES("3","9","94","images/nologo.png","<p>affafaafafafafaf</p>","sgsgsgsgsgsgshjtjjfjgfjgfjgfjgjsssdgdsgdg","http://www.facebook.com","  ","<p>fdfhddhdhdhdh</p>","","","9");
INSERT INTO company_info VALUES("4","15","152","images/nologo.png","<p>dafsfsafsfsafsfsfsfsfsf</p>","dgshhffhfhfdfdhfhfhfdhf","www.facebook.com","","<p>ssafsasafsafsafsfdgdsgdgdsgdsgdsgsg</p>","","","7");



DROP TABLE images;

CREATE TABLE `images` (
  `img_id` int(11) NOT NULL AUTO_INCREMENT,
  `img_image` varchar(255) NOT NULL,
  PRIMARY KEY (`img_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO images VALUES("1","images/articles/searchmypage.jpg");
INSERT INTO images VALUES("2","images/articles/searchmypage1.jpg");
INSERT INTO images VALUES("3","images/articles/searchmypage2.png");
INSERT INTO images VALUES("4","images/articles/searchmypage4.png");
INSERT INTO images VALUES("5","images/articles/html5.png");
INSERT INTO images VALUES("6","images/articles/searchmypage3.jpg");
INSERT INTO images VALUES("7","images/articles/article5_bl.png");
INSERT INTO images VALUES("8","images/articles/article1a.png");



DROP TABLE info_images;

CREATE TABLE `info_images` (
  `info_slide_id` int(11) NOT NULL AUTO_INCREMENT,
  `info_img` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `plan_id` int(11) NOT NULL,
  PRIMARY KEY (`info_slide_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO info_images VALUES("1","users_img/Hydrangeas.jpg","5","4");
INSERT INTO info_images VALUES("2","users_img/Koala.jpg","5","4");
INSERT INTO info_images VALUES("3","users_img/Lighthouse.jpg","5","4");
INSERT INTO info_images VALUES("4","users_img/Penguins.jpg","5","4");
INSERT INTO info_images VALUES("5","users_img/Jellyfish.jpg","5","4");
INSERT INTO info_images VALUES("6","Chrysanthemum_0.jpg","8","4");



DROP TABLE info_pdf;

CREATE TABLE `info_pdf` (
  `info_pdf_id` int(11) NOT NULL AUTO_INCREMENT,
  `info_pdf` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `plan_id` int(11) NOT NULL,
  PRIMARY KEY (`info_pdf_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO info_pdf VALUES("1","users_pdf/rsrtc_0.pdf","8","4");
INSERT INTO info_pdf VALUES("2","rsrtc_1.pdf","8","4");



DROP TABLE new_user;

CREATE TABLE `new_user` (
  `new_id` int(11) NOT NULL AUTO_INCREMENT,
  `new_name` varchar(100) NOT NULL,
  `new_time` int(11) NOT NULL,
  `new_status` tinyint(4) NOT NULL DEFAULT '0',
  `client_cat_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`new_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

INSERT INTO new_user VALUES("2","kapil R Chhangani","1403074630","0","1","1");
INSERT INTO new_user VALUES("3","nikhil","1403076634","0","1","3");
INSERT INTO new_user VALUES("5","devilkaps","1403089411","0","4","4");
INSERT INTO new_user VALUES("6","s_admin","1403089751","0","4","6");
INSERT INTO new_user VALUES("7","Mohibur Rehman","1403089918","0","4","6");
INSERT INTO new_user VALUES("8","Jodhpur Coat 2","1403092716","0","3","7");
INSERT INTO new_user VALUES("9","Rahul Mathur","1403093708","0","4","8");
INSERT INTO new_user VALUES("10","Waist coat","1403093864","0","2","9");



DROP TABLE s_admin;

CREATE TABLE `s_admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(100) NOT NULL,
  `admin_pass` varchar(100) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO s_admin VALUES("1","s_admin","$2y$12$819905572537709ffa5e4up9PGN1m.KDMn.YpTfvVk89cURjztl8e");



DROP TABLE subcategories;

CREATE TABLE `subcategories` (
  `subc_id` int(11) NOT NULL AUTO_INCREMENT,
  `subc_name` varchar(100) NOT NULL,
  `cat_id` int(11) NOT NULL,
  PRIMARY KEY (`subc_id`)
) ENGINE=InnoDB AUTO_INCREMENT=286 DEFAULT CHARSET=latin1;

INSERT INTO subcategories VALUES("1","Baby & Children Clothing","1");
INSERT INTO subcategories VALUES("2","Boutiques","1");
INSERT INTO subcategories VALUES("3","Denim","1");
INSERT INTO subcategories VALUES("4","Ethnic & Bridal Wear","1");
INSERT INTO subcategories VALUES("5","Footwear & Accessories","1");
INSERT INTO subcategories VALUES("6","Hosiery","1");
INSERT INTO subcategories VALUES("7","Knitwear","1");
INSERT INTO subcategories VALUES("8","Leather Bags & Accessories","1");
INSERT INTO subcategories VALUES("9","Leather Garments & Accessories","1");
INSERT INTO subcategories VALUES("10","Lingerie & Nightwear ","1");
INSERT INTO subcategories VALUES("11","Mens Clothing","1");
INSERT INTO subcategories VALUES("12","Readymade Garments","1");
INSERT INTO subcategories VALUES("13","Saree","1");
INSERT INTO subcategories VALUES("14","Scarves, Stoles And Made-ups ","1");
INSERT INTO subcategories VALUES("15","Shawls ","1");
INSERT INTO subcategories VALUES("16","Shirts","1");
INSERT INTO subcategories VALUES("17","Silk ","1");
INSERT INTO subcategories VALUES("18","Skirts & Dresses","1");
INSERT INTO subcategories VALUES("19","Sportswear & Accessories","1");
INSERT INTO subcategories VALUES("20","Swimwear & Beachwear ","1");
INSERT INTO subcategories VALUES("21","T-Shirts ","1");
INSERT INTO subcategories VALUES("22","Uniforms & Workwear","1");
INSERT INTO subcategories VALUES("23","Wollen & Outer Wear","1");
INSERT INTO subcategories VALUES("24","Womens Clothing","1");
INSERT INTO subcategories VALUES("25","Car Rentals","2");
INSERT INTO subcategories VALUES("26","Dealers & Agents ","2");
INSERT INTO subcategories VALUES("27","Makers","2");
INSERT INTO subcategories VALUES("28","Parts & Accessories","2");
INSERT INTO subcategories VALUES("29","Repairs & Service","2");
INSERT INTO subcategories VALUES("30","Two Wheelers & Parts","2");
INSERT INTO subcategories VALUES("31","Tyres","2");
INSERT INTO subcategories VALUES("32","Used Vehicles","2");
INSERT INTO subcategories VALUES("33","Bath & Body","3");
INSERT INTO subcategories VALUES("34","Beauty Salons","3");
INSERT INTO subcategories VALUES("35","Cosmetics ","3");
INSERT INTO subcategories VALUES("36","Fitness Equipment","3");
INSERT INTO subcategories VALUES("37","Gym & Fitness Centers ","3");
INSERT INTO subcategories VALUES("38","Hair Care","3");
INSERT INTO subcategories VALUES("39","Perfumes & Fragrances","3");
INSERT INTO subcategories VALUES("40","Skin Care","3");
INSERT INTO subcategories VALUES("41","Spa ","3");
INSERT INTO subcategories VALUES("42","Weight Loss","3");
INSERT INTO subcategories VALUES("43","Yoga","3");
INSERT INTO subcategories VALUES("44"," Computer Stationery","4");
INSERT INTO subcategories VALUES("45","Data Recovery","4");
INSERT INTO subcategories VALUES("46","Laptop Repair","4");
INSERT INTO subcategories VALUES("47","Networking","4");
INSERT INTO subcategories VALUES("48","Peripherals","4");
INSERT INTO subcategories VALUES("49","Repair & Maintenance","4");
INSERT INTO subcategories VALUES("50","Architects","5");
INSERT INTO subcategories VALUES("51","Bathroom Fittings & Sanitaryware","5");
INSERT INTO subcategories VALUES("52","Cement Manufacturers","5");
INSERT INTO subcategories VALUES("53","Decorative Laminates","5");
INSERT INTO subcategories VALUES("54","Doors And Windows","5");
INSERT INTO subcategories VALUES("55","Elevators And Escalators","5");
INSERT INTO subcategories VALUES("56","Flooring & Tiles","5");
INSERT INTO subcategories VALUES("57","Gates, Grills & Fences ","5");
INSERT INTO subcategories VALUES("58","Glass & Fiber","5");
INSERT INTO subcategories VALUES("59","Interior Designers","5");
INSERT INTO subcategories VALUES("60","Marble & Granite","5");
INSERT INTO subcategories VALUES("61","Paints, Powder & Varnishes","5");
INSERT INTO subcategories VALUES("62","Pipes & Pipe Fittings","5");
INSERT INTO subcategories VALUES("63","Plywood & Veneer","5");
INSERT INTO subcategories VALUES("64","Roofing Supplies","5");
INSERT INTO subcategories VALUES("65","Waterproofing","5");
INSERT INTO subcategories VALUES("66","Aviation","6");
INSERT INTO subcategories VALUES("67","Business Schools","6");
INSERT INTO subcategories VALUES("68","Coaching Centres","6");
INSERT INTO subcategories VALUES("69","Colleges & Universities","6");
INSERT INTO subcategories VALUES("70","Computer Institutes","6");
INSERT INTO subcategories VALUES("71","Distance Learning","6");
INSERT INTO subcategories VALUES("72","Engineering Colleges & Institutes","6");
INSERT INTO subcategories VALUES("73","Fashion Design","6");
INSERT INTO subcategories VALUES("74","Finance & Investment ","6");
INSERT INTO subcategories VALUES("75","Hotel Management","6");
INSERT INTO subcategories VALUES("76","Law ","6");
INSERT INTO subcategories VALUES("77","Medical Colleges & Institutes","6");
INSERT INTO subcategories VALUES("78","Montessori And Kindergarten","6");
INSERT INTO subcategories VALUES("79","Overseas Education Consultants ","6");
INSERT INTO subcategories VALUES("80","Schools","6");
INSERT INTO subcategories VALUES("81","Cables, Wires & Accessories","7");
INSERT INTO subcategories VALUES("82","Circuit Boards","7");
INSERT INTO subcategories VALUES("83","Control Panels & Distribution","7");
INSERT INTO subcategories VALUES("84","Generators & Spare Parts","7");
INSERT INTO subcategories VALUES("85","Insulation Material & Accessories","7");
INSERT INTO subcategories VALUES("86","Inverters, UPS & Rectifiers","7");
INSERT INTO subcategories VALUES("87","Lighting & Display","7");
INSERT INTO subcategories VALUES("88","Switches & Sockets","7");
INSERT INTO subcategories VALUES("89","Switchgear & Allied Products","7");
INSERT INTO subcategories VALUES("90","Transformers","7");
INSERT INTO subcategories VALUES("91","Voltage Stabilizers & Surge Protection","7");
INSERT INTO subcategories VALUES("92","Financial Consultants","9");
INSERT INTO subcategories VALUES("93","Stock Brokers","9");
INSERT INTO subcategories VALUES("94","Venture Capital","9");
INSERT INTO subcategories VALUES("95","Ayurvedic & Herbal Products","12");
INSERT INTO subcategories VALUES("96","Dentistry","12");
INSERT INTO subcategories VALUES("97","Dental Care","12");
INSERT INTO subcategories VALUES("98","Eye Care","12");
INSERT INTO subcategories VALUES("99","Homeopathy ","12");
INSERT INTO subcategories VALUES("100","Hospital Furniture","12");
INSERT INTO subcategories VALUES("101","Hospitals & Clinics","12");
INSERT INTO subcategories VALUES("102","Laboratory Equipment","12");
INSERT INTO subcategories VALUES("103","Medical Equipment","12");
INSERT INTO subcategories VALUES("104","Pharmaceuticals","12");
INSERT INTO subcategories VALUES("105","Pharmacy","12");
INSERT INTO subcategories VALUES("106","Surgical Instruments","12");
INSERT INTO subcategories VALUES("107","Veterinary Medicine","12");
INSERT INTO subcategories VALUES("108","Aquarium, Aquaculture & Accessories","13");
INSERT INTO subcategories VALUES("109","Bedding & Furnishings","13");
INSERT INTO subcategories VALUES("110","Carpets, Rugs & Durries","13");
INSERT INTO subcategories VALUES("111","Decor & Design","13");
INSERT INTO subcategories VALUES("112","Fountains","13");
INSERT INTO subcategories VALUES("113","Home Appliances","13");
INSERT INTO subcategories VALUES("114","Home Furniture","13");
INSERT INTO subcategories VALUES("115","Imported Furniture","13");
INSERT INTO subcategories VALUES("116","Incense & Agarbatti","13");
INSERT INTO subcategories VALUES("117","Kitchen & Dining","13");
INSERT INTO subcategories VALUES("118","Kitchen Appliances","13");
INSERT INTO subcategories VALUES("119","Lamps And Lampshades","13");
INSERT INTO subcategories VALUES("120","Lawn & Garden","13");
INSERT INTO subcategories VALUES("121","Metal Furniture","13");
INSERT INTO subcategories VALUES("122","Mosquito Repellent","13");
INSERT INTO subcategories VALUES("123","Pest Control","13");
INSERT INTO subcategories VALUES("124","Plastic & Moulded Furniture","13");
INSERT INTO subcategories VALUES("125","Soap And Detergents","13");
INSERT INTO subcategories VALUES("126","Stainless Steel Utensils ","13");
INSERT INTO subcategories VALUES("127","Umbrella And Rainwear ","13");
INSERT INTO subcategories VALUES("128","Abrasives","14");
INSERT INTO subcategories VALUES("129","Bearings","14");
INSERT INTO subcategories VALUES("130","Boilers ","14");
INSERT INTO subcategories VALUES("131","Burners & Incinerators","14");
INSERT INTO subcategories VALUES("132","Ceramics","14");
INSERT INTO subcategories VALUES("133","Clips & Clamps","14");
INSERT INTO subcategories VALUES("134","Containers, Barrels & Drums","14");
INSERT INTO subcategories VALUES("135","Conveyors & Conveyor Belts","14");
INSERT INTO subcategories VALUES("136","Cooling Tower & Heat Exchangers","14");
INSERT INTO subcategories VALUES("137","Cutting Tools","14");
INSERT INTO subcategories VALUES("138","Die Casting Services","14");
INSERT INTO subcategories VALUES("139","Fiberglass Products","14");
INSERT INTO subcategories VALUES("140","Gases","14");
INSERT INTO subcategories VALUES("141","Gaskets And Seals","14");
INSERT INTO subcategories VALUES("142","Industrial Gauges","14");
INSERT INTO subcategories VALUES("143","LPG Regulators & Accessories","14");
INSERT INTO subcategories VALUES("144","Magnetic Equipments","14");
INSERT INTO subcategories VALUES("145","Nuts & Bolts","14");
INSERT INTO subcategories VALUES("146","Oil, Grease & Lubricants","14");
INSERT INTO subcategories VALUES("147","Pumps & Pumping Equipment","14");
INSERT INTO subcategories VALUES("148","Sheet Metal Components","14");
INSERT INTO subcategories VALUES("149","Springs & Coils","14");
INSERT INTO subcategories VALUES("150","Storage Systems","14");
INSERT INTO subcategories VALUES("151","Valves","14");
INSERT INTO subcategories VALUES("152","BPO, Call Centres, ITES ","15");
INSERT INTO subcategories VALUES("153","CAD/CAM","15");
INSERT INTO subcategories VALUES("154","Domain Name Services","15");
INSERT INTO subcategories VALUES("155","Internet Service Providers (ISP)","15");
INSERT INTO subcategories VALUES("156","Medical Transcription","15");
INSERT INTO subcategories VALUES("157","Multimedia, Animation & Graphics","15");
INSERT INTO subcategories VALUES("158","SEO - Search Engine Optimization","15");
INSERT INTO subcategories VALUES("159","Software Development ","15");
INSERT INTO subcategories VALUES("160","Software Testing","15");
INSERT INTO subcategories VALUES("161","Web Development ","15");
INSERT INTO subcategories VALUES("162","Web Hosting ","15");
INSERT INTO subcategories VALUES("163","Bollywood ","16");
INSERT INTO subcategories VALUES("164","Business/Trade Directories","16");
INSERT INTO subcategories VALUES("165","Classifieds","16");
INSERT INTO subcategories VALUES("166","Educational","16");
INSERT INTO subcategories VALUES("167","Entertainment","16");
INSERT INTO subcategories VALUES("168","Games ","16");
INSERT INTO subcategories VALUES("169","Job Portals","16");
INSERT INTO subcategories VALUES("170","Matrimonial/Match Making","16");
INSERT INTO subcategories VALUES("171","Movies","16");
INSERT INTO subcategories VALUES("172","News Portals","16");
INSERT INTO subcategories VALUES("173","Online Shopping","16");
INSERT INTO subcategories VALUES("174","Real Estate Portals","16");
INSERT INTO subcategories VALUES("175","Sports - Cricket ","16");
INSERT INTO subcategories VALUES("176","Travel Portals","16");
INSERT INTO subcategories VALUES("177","Yellow Pages","16");
INSERT INTO subcategories VALUES("178","Diamond & Diamond Jewellery","17");
INSERT INTO subcategories VALUES("179","Gemstones","17");
INSERT INTO subcategories VALUES("180","Gold & Gold Jewellery","17");
INSERT INTO subcategories VALUES("181","Imitation & Artificial Jewellery","17");
INSERT INTO subcategories VALUES("182","Jewellers","17");
INSERT INTO subcategories VALUES("183","Jewellery Cases & Boxes ","17");
INSERT INTO subcategories VALUES("184","Jewellery Showrooms","17");
INSERT INTO subcategories VALUES("185","Pearls","17");
INSERT INTO subcategories VALUES("186","Silver & Silver Jewellery","17");
INSERT INTO subcategories VALUES("187","Agricultural Machinery & Tools","18");
INSERT INTO subcategories VALUES("188","Building & Construction Machinery","18");
INSERT INTO subcategories VALUES("189","Cement Plant Machinery","18");
INSERT INTO subcategories VALUES("190","Chemical Processing Plants & Machinery","18");
INSERT INTO subcategories VALUES("191","CNC Machine Tools & Lathes","18");
INSERT INTO subcategories VALUES("192","Cranes, Forklifts & Lifting Equipments","18");
INSERT INTO subcategories VALUES("193","Earth Moving Machinery & Equipment","18");
INSERT INTO subcategories VALUES("194","Electric Motors","18");
INSERT INTO subcategories VALUES("195","Food Processing Machinery","18");
INSERT INTO subcategories VALUES("196","Hydraulic & Pneumatic Equipment","18");
INSERT INTO subcategories VALUES("197","Machine Tools","18");
INSERT INTO subcategories VALUES("198","Mining & Drilling Machinery","18");
INSERT INTO subcategories VALUES("199","Oil Mill Machinery","18");
INSERT INTO subcategories VALUES("200","Packaging & Lamination Machinery","18");
INSERT INTO subcategories VALUES("201","Pharmaceutical Machinery ","18");
INSERT INTO subcategories VALUES("202","Plastic Processing Machinery","18");
INSERT INTO subcategories VALUES("203","Printing Machinery","18");
INSERT INTO subcategories VALUES("204","Sewing & Knitting Machinery","18");
INSERT INTO subcategories VALUES("205","Steel Plant Machinery & Supplies","18");
INSERT INTO subcategories VALUES("206","Tea Machinery","18");
INSERT INTO subcategories VALUES("207","Textile & Garment Machinery","18");
INSERT INTO subcategories VALUES("208","Weighing Machines","18");
INSERT INTO subcategories VALUES("209","Welding Consumables","18");
INSERT INTO subcategories VALUES("210","Wire Machinery","18");
INSERT INTO subcategories VALUES("211","Woodworking Machinery","18");
INSERT INTO subcategories VALUES("212","Aluminium & Foils","19");
INSERT INTO subcategories VALUES("213","Coal & Coke","19");
INSERT INTO subcategories VALUES("214","Iron & Steel","19");
INSERT INTO subcategories VALUES("215","Mica","19");
INSERT INTO subcategories VALUES("216","Scrap","19");
INSERT INTO subcategories VALUES("217","Office Furniture","20");
INSERT INTO subcategories VALUES("218","Paper Cup Machines","20");
INSERT INTO subcategories VALUES("219","Rubber Stamps & Seals","20");
INSERT INTO subcategories VALUES("220","Stationery & Paper","20");
INSERT INTO subcategories VALUES("221","Toner & Cartridges","20");
INSERT INTO subcategories VALUES("222","Writing Instruments","20");
INSERT INTO subcategories VALUES("223","Barcodes, Labels & Stickers","21");
INSERT INTO subcategories VALUES("224","Caps & Closures","21");
INSERT INTO subcategories VALUES("225","Cotton/Canvas Bags ","21");
INSERT INTO subcategories VALUES("226","Holograms & Holographic Films","21");
INSERT INTO subcategories VALUES("227","Jute Bags","21");
INSERT INTO subcategories VALUES("228","Paper & Paper Products","21");
INSERT INTO subcategories VALUES("229","PP & HDPE Sacks","21");
INSERT INTO subcategories VALUES("230","PVC Films","21");
INSERT INTO subcategories VALUES("231","Thermocol","21");
INSERT INTO subcategories VALUES("232","Reclaim Rubber","22");
INSERT INTO subcategories VALUES("233","Rubber Rollers","22");
INSERT INTO subcategories VALUES("234","Barcodes, Stickers & Labels","23");
INSERT INTO subcategories VALUES("235","Binding & Finishing","23");
INSERT INTO subcategories VALUES("236","Book Publishers","23");
INSERT INTO subcategories VALUES("237","Digital Printing","23");
INSERT INTO subcategories VALUES("238","Foil Stamping","23");
INSERT INTO subcategories VALUES("239","Greeting, Wedding & Invitation Cards","23");
INSERT INTO subcategories VALUES("240","Printer Cartridge Refilling ","23");
INSERT INTO subcategories VALUES("241","Printing Ink & Supplies","23");
INSERT INTO subcategories VALUES("242","Printing Services","23");
INSERT INTO subcategories VALUES("243","Screen Printing ","23");
INSERT INTO subcategories VALUES("244","Accounting, Auditing & Bookkeeping","24");
INSERT INTO subcategories VALUES("245"," Advertising Agency","24");
INSERT INTO subcategories VALUES("246","Catering","24");
INSERT INTO subcategories VALUES("247","Exhibitions And Fairs","24");
INSERT INTO subcategories VALUES("248","Immigration","24");
INSERT INTO subcategories VALUES("249","Patent & Trademark Consultants","24");
INSERT INTO subcategories VALUES("250","Placement Consultants","24");
INSERT INTO subcategories VALUES("251","Translators & Interpreters","24");
INSERT INTO subcategories VALUES("252","Builders & Developers","25");
INSERT INTO subcategories VALUES("253","Commercial Property","25");
INSERT INTO subcategories VALUES("254","IT Parks & Buildings","25");
INSERT INTO subcategories VALUES("255","Land Developer","25");
INSERT INTO subcategories VALUES("256","Real Estate Agents","25");
INSERT INTO subcategories VALUES("257","Residential Property","25");
INSERT INTO subcategories VALUES("258","Bookstore","26");
INSERT INTO subcategories VALUES("259","Flowers","26");
INSERT INTO subcategories VALUES("260","Gifts & Occasions","26");
INSERT INTO subcategories VALUES("261","Luggage & Bags","26");
INSERT INTO subcategories VALUES("262","Shopping Malls","26");
INSERT INTO subcategories VALUES("263","Sporting Goods","26");
INSERT INTO subcategories VALUES("264","Toys & Games","26");
INSERT INTO subcategories VALUES("265","Alarm Systems","27");
INSERT INTO subcategories VALUES("266","Fire Fighting & Protection Equipment","27");
INSERT INTO subcategories VALUES("267","Identification & Access Control Systems","27");
INSERT INTO subcategories VALUES("268","Locks And Safes","27");
INSERT INTO subcategories VALUES("269","Loss Prevention & Tamper Proofing","27");
INSERT INTO subcategories VALUES("270","Security Services & Agencies","27");
INSERT INTO subcategories VALUES("271","Surveillance Equipment","27");
INSERT INTO subcategories VALUES("272","Workwear","27");
INSERT INTO subcategories VALUES("273","Bulk SMS Services ","28");
INSERT INTO subcategories VALUES("274","Fax Machines","28");
INSERT INTO subcategories VALUES("275","Mobile Phones, Accessories & Parts","28");
INSERT INTO subcategories VALUES("276","Aviation","29");
INSERT INTO subcategories VALUES("277","Clearing & Forwarding Agents","29");
INSERT INTO subcategories VALUES("278","Courier Services","29");
INSERT INTO subcategories VALUES("279","Packers & Movers","29");
INSERT INTO subcategories VALUES("280","Road Transportation","29");
INSERT INTO subcategories VALUES("281","Shipping","29");
INSERT INTO subcategories VALUES("282","Warehousing & Storage","29");
INSERT INTO subcategories VALUES("283","Guest House","30");
INSERT INTO subcategories VALUES("284","Hotels","30");
INSERT INTO subcategories VALUES("285","Tour Operators","30");



DROP TABLE tags;

CREATE TABLE `tags` (
  `tags_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` int(11) NOT NULL,
  PRIMARY KEY (`tags_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

INSERT INTO tags VALUES("1","3");
INSERT INTO tags VALUES("2","0");
INSERT INTO tags VALUES("3","3");
INSERT INTO tags VALUES("4","2");
INSERT INTO tags VALUES("5","0");
INSERT INTO tags VALUES("6","2");
INSERT INTO tags VALUES("7","0");
INSERT INTO tags VALUES("8","0");
INSERT INTO tags VALUES("9","1");
INSERT INTO tags VALUES("10","2");
INSERT INTO tags VALUES("11","2");
INSERT INTO tags VALUES("12","7");
INSERT INTO tags VALUES("13","0");



DROP TABLE test;

CREATE TABLE `test` (
  `test_id` int(11) NOT NULL AUTO_INCREMENT,
  `test_add` text NOT NULL,
  PRIMARY KEY (`test_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO test VALUES("1","gagsgsg\nsg\nsg\ns\ngs\ng\nsg\nsgsgsgsgsgsgsg");
INSERT INTO test VALUES("2","<p><strong>Crypt Technology</strong> is a web solutions company providing various services such as web design and development, graphics design, online marketing, consulting and other allied services. We focus on creative and eye-catching designs, and web solutions that make business sense. Our strong expertise in aesthetics and user experience, combined with latest technology helps us create solutions that have a positive and lasting impact on the company bottom line.</p>\n\n<p>Address:</p>\n\n<p>21-D Bhaskar Circle</p>\n\n<p>Near Ratanada</p>\n\n<p>Jodhpur</p>\n");



DROP TABLE users;

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(30) NOT NULL,
  `user_pass` varchar(512) NOT NULL,
  `user_email` varchar(1024) NOT NULL,
  `user_code` varchar(100) NOT NULL,
  `user_comp_name` varchar(100) NOT NULL,
  `user_number` bigint(20) NOT NULL,
  `city` varchar(100) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `user_time` int(11) NOT NULL,
  `user_confirmed` int(11) NOT NULL,
  `admin_confirmed` tinyint(1) NOT NULL DEFAULT '0',
  `user_ip` varchar(32) NOT NULL,
  `client_cat_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

INSERT INTO users VALUES("3","nikhil","$2y$12$422069951253a1401945auXZizFjx/kmENQFOnI/GlB3ISdnWdcYe","nikhil@gmail.com","","devrox","8890958008","jodhpur","aaaaaaaaaaaa","1403076633","1","1","127.0.0.1","1");
INSERT INTO users VALUES("5","devilkaps","$2y$12$701134269453a17202962en0FrHrW/CWXYCbrM8IzjviTMxCz49xe","devilkaps@gmail.com","","devrox","8890958008","jodhpur","111111111111","1403089410","1","1","127.0.0.1","4");
INSERT INTO users VALUES("6","Mohibur Rehman","$2y$12$41049472153a173fd9ebaeMsfqvsOVdiRgMIFKt.wv3A8x1X.feEO","rahul.mathur09@gmail.com","","Crypt Technology","8890958008","jodhpur","11111111111","1403089917","0","0","127.0.0.1","4");
INSERT INTO users VALUES("7","Jodhpur Coat 2","$2y$12$744194310953a17eec141uMZ784gG3ZryXqpoeHBZ61Zihb2RTRjC","yashtam0907@gmail.com","","devrox","8890958008","jodhpur","1111111111111","1403092716","0","0","127.0.0.1","3");
INSERT INTO users VALUES("8","Rahul Mathur","$2y$12$219128823153a182cb6d1OARtOGGuCYCBPEfGsXEcOCZJCXhdnDza","yashwant1992@gmail.com","","devroxxxxx","8890958008","jodhpur","1111111111111","1403093707","0","0","127.0.0.1","4");
INSERT INTO users VALUES("9","Waist coat","$2y$12$24328355753a18367ca5cuI87N7nGlmdctpMZlVqW0EKFwlp9oPEq","kamilqureshi@in.com","","Crypt Technology","8890958008","jodhpur","222222222222","1403093863","0","0","127.0.0.1","2");






CREATE TABLE `booked_home` (
  `id` int NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `family_member` int DEFAULT NULL,
  `children` int NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `house_id` int NOT NULL,
  `payment` int DEFAULT '0',
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `message` varchar(2000) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `identityCard` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `username` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `rentingMethod` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `see` varchar(30) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'no',
  `approval` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO booked_home VALUES("39","Efrem Hirko","+251938606334","hirkoefrem@gmail.com","2","0","burayyuu, dirree","Apartement","0.4","39","1","2023-02-17","2024-02-17","In a competitive rental market, writing a rental cover letter is a great way to stand out from other potential renters and leave a lasting, positive impression on your future landlord.","back.jpg","WIN_20230105_18_30_12_Pro.jpg","rented","lelisa","Yearly","yes","1");
INSERT INTO booked_home VALUES("40","efrem hirko","+251938606334","hirkoefrem@gmail.com","1","0","bishooftu","Condominium","4","40","1","2023-03-01","2024-03-01","Tenancy is defined as the right to use property for a specified amount of time, as granted by the owner. Tenancy rights mean that you do not need to own the .","back.jpg","WIN_20230105_18_30_12_Pro.jpg","rented","lelisa","Yearly","yes","1");
INSERT INTO booked_home VALUES("41","gutama nagesso","+251964606397","cpalelisa@gmail.com","1","0","bule hora","One room house","1500","41","0","2023-03-02","2023-04-02"," When renting a home, you may have access to various amenities depending on the property. Some of the most desirable amenities for rental properties include smart homes, communal spaces, and fitness centers[1]. According to the Residential Tenants' Rights Guide by the New York State Attorney General's Office, landlords must provide tenants with a written lease that includes information about rent and other fees, security deposits, and maintenance responsibilities[2]. Other common rental property amenities include washer/dryer units or hookups, air conditioning, furniture, patios or balconies, and hardwood floors[3][4]. Luxury rental buildings across the US are also offering amenities such as co-working spaces and high-speed internet to make remote work more convenient for tenants[5].","back.jpg","WIN_20230210_18_02_51_Pro.jpg","booked","lelisa","Monthly","yes","1");



CREATE TABLE `contact` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `message` varchar(2000) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `see` varchar(30) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'no',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO contact VALUES("2","Lelisa shashura","shlelisa123@gmail.com","2023-02-11","what is your main topic of this house rental system project used for?","yes");
INSERT INTO contact VALUES("3","muleta nagessa","muratanagessa6@gmail.com","2023-02-12","what is your mission?","yes");
INSERT INTO contact VALUES("5","lelisa shashura","lelisa123sh@gmail.com","2023-02-16","what is your mission and mission also goal of your company?","yes");



CREATE TABLE `new_user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `expDate` datetime DEFAULT NULL,
  `code` int NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `see` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO new_user VALUES("4","lelisa shashura dirriba","Male","+251970463204","cpalelisa@gmail.com","lelisa","b9bb90e6cde7066d4d80c509098ec540","admin","back.jpg","","795055","verified","yes");
INSERT INTO new_user VALUES("12","Gutama nagesso","male","+2519649215022","gutamanagesso@gmail.com","gute","ce45d5fe4e354442a1ff32c908cb6e5d","user","","","762362","notverified","yes");
INSERT INTO new_user VALUES("13","lalisa shashura","male","+251970463204","shlelisa123@gmail.com","laloo","b9bb90e6cde7066d4d80c509098ec540","user","","","570526","verified","yes");
INSERT INTO new_user VALUES("15","murata nagessa","male","+25191212121212","muratanagessa6@gmail.com","murata","0f142f93b98df838bcef578695faa8e6","user","","","598988","verified","yes");
INSERT INTO new_user VALUES("16","Efrem Hirko","male","+251938606334","hirkoefrem@gmail.com","efrem","7327ecc588e5de1803027c0ae0e9969d","user","","","347592","verified","yes");
INSERT INTO new_user VALUES("17","Barie Wakjira","Male","+251921361845","wakjirabarie@gmail.com","barie","0ac9b0c1fb52de261e09861f9448cffa","user","","","0","notverified","yes");



CREATE TABLE `news` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `detail` varchar(2000) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO news VALUES("3","Social media restricted in Ethiopia as church rift turns violent","Access to social media platforms has been restricted in Ethiopia, the Internet watchdog NetBlocks says, after violent protests sparked by a rift within the country’s Orthodox Church.

The protests broke out in the Oromia region when three church officials declared themselves archbishops last month and set up their own governing body. Some demonstrators have opposed their move while others have supported it.","news1.png","2023-02-13");
INSERT INTO news VALUES("5","Eritrea persecuted relatives of military draft dodgers, rights group says","Eritrea has punished the family members of thousands of alleged draft evaders during a conscription drive intended to bolster its military campaign in neighboring Ethiopia, Human Rights Watch said on Thursday.

Women as old as 71 were arbitrarily detained and expelled from their homes as the authorities sought to locate their missing relatives, the US-based rights group said in a report.

Information Minister Yemane Gebremeskel did not respond to a request for comment about the report.

The HRW report, based on interviews with more than a dozen people who had fled the country and relatives of people caught up in the conscription drive, provides a glimpse into how the secretive country powered its military campaign in Ethiopia’s Tigray region.

It said security forces went door to door to identify draft dodgers and detained people who could not account for missing family members.

“Everyone has always lived with the dreadful feeling of the risk of being conscripted, but this is at a whole different level,” one resident of the capital Asmara told Human Rights Watch. <a href="https://www.cnn.com/2023/02/09/africa/eritrea-military-draft-dodgers-intl/index.html" >Read more</a>","news2.png","2023-02-06");



CREATE TABLE `rent_home` (
  `id` int NOT NULL AUTO_INCREMENT,
  `category` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `rent` decimal(10,0) NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `rentingMethod` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `bedroom` int NOT NULL,
  `bathroom` int NOT NULL,
  `home_location` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `home_number` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `home_image` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `bed_image` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `bath_image` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `toilet_image` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `kitchen_image` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `about_home` varchar(2000) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `additional_facility` varchar(1000) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `payment` int DEFAULT '0',
  `username` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `identityCard` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `OwnerPhoto` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `homeOwnership` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `see` varchar(30) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'no',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO rent_home VALUES("37","Apartement","60000","714 square feet","Six_Month","100","100","https://goo.gl/maps/EZkvdxUe6W3FHvny5","3232","appartama1.png","bedroom1.png","bathroom1.png","toilet1.png","kitchen1.png","I, [reference’s name] am [renter’s name]’s direct supervisor at [company name] from April 15, 2015, until present day. [Renter] is an exemplary employee, always arriving on time and exceeding expectations on their projects. 

They are trustworthy, and they consistently meet deadlines. Their relationships with their co-workers is polite and respectful. I have no hesitation in acting as a reference on their behalf, and I am sure that the attributes that make them a valuable employee will also make them an outstanding renter for your apartment. 

Please contact me if you have any further questions.","water and electricity","active","0","lelisa","WIN_20230210_18_02_51_Pro.jpg","63e6690ea67c2.png","WIN_20230210_18_02_51_Pro.jpg","2023-02-10","2023-08-10","yes");
INSERT INTO rent_home VALUES("39","Apartement","1","800 square feet","Yearly","10","10","https://goo.gl/maps/qz7SubnYLoBFUiYU8","3224","appartama2.png","bedroom1.png","bathroom1.png","toilet1.png","kitchen1.png","Whether it is your first time going through the daunting process of finding a new apartment, or you are an experienced renter, contacting the landlord is one of the most difficult, yet important things to do in order to find your perfect new home. It can be hard to know exactly what to say when inquiring about an apartment, but we’re here to help you out!","      - Laundry Facilities
- Laundry Services
- Package Lockers
- Gated Community
- Security Guards/Doormen
- Community Events/Classes
- Extra Storage Space
- Online Rent Payments
- Online Maintenance Requests","rented","1","lelisa","WIN_20230210_18_02_51_Pro.jpg","63ea924fb6c3a.png","WIN_20230210_18_02_51_Pro.jpg","2023-02-17","2024-02-17","yes");
INSERT INTO rent_home VALUES("40","Condominium","4","800 square feet","Yearly","123","123","https://goo.gl/maps/qz7SubnYLoBFUiYU8","3224","condominium.png","bedroom1.png","bathroom1.png","toilet1.png","kitchen1.png","Tenancy is defined as the right to use property for a specified amount of time, as granted by the owner. Tenancy rights mean that you do not need to own the .","weereere erertrtetereerer fgfgfgfgfg","rented","1","barie","about-page.jpg","63fd99eb519be.png","about-page.jpg","2023-03-01","2024-03-01","yes");
INSERT INTO rent_home VALUES("41","One room house","1500","216 square ","Monthly","1","1","https://goo.gl/maps/Efdug7F1JZmFLFhx5","3224","OneRoom.jpg","bedroom1.png","bathroom1.png","toilet1.png","kitchen1.png","My name is [Your Name], and I'm writing to express my interest in the home at [Address or Property Name]. I would love to live in this place because [Reasons for wanting to live there]. I have a steady job and good credit, and I'm confident that I can be a responsible tenant. Thank you for considering my application, and please let me know if you need any additional information. I look forward to hearing from you soon."","When renting a home, you may have access to various amenities depending on the property. Some of the most desirable amenities for rental properties include smart homes, communal spaces, and fitness centers[1]. According to the Residential Tenants' Rights Guide by the New York State Attorney General's Office, landlords must provide tenants with a written lease that includes information about rent and other fees, security deposits, and maintenance responsibilities[2]. Other common rental property amenities include washer/dryer units or hookups, air conditioning, furniture, patios or balconies, and hardwood floors[3][4]. Luxury rental buildings across the US are also offering amenities such as co-working spaces and high-speed internet to make remote work more convenient for tenants[5].","active","0","barie","WIN_20230210_18_02_51_Pro.jpg","63ff50b909bae.png","WIN_20230210_18_02_51_Pro.jpg","2023-03-01","2024-02-01","yes");
INSERT INTO rent_home VALUES("42","Normal House","3000","200 square feet","Monthly","3","3","https://goo.gl/maps/qz7SubnYLoBFUiYU8","3432","normal_house.png","bedroom1.png","bathroom1.png","toilet1.png","kitchen1.png","electricity, television,water and etc","electricity, television,water and etc","active","0","barie","WIN_20230210_18_02_51_Pro.jpg","63ffc0c92d30a.png","WIN_20230210_18_02_51_Pro.jpg","2023-03-02","2023-04-02","yes");



CREATE TABLE `rentprocess` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Ownerusername` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `category` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `rentingMethod` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `price` int NOT NULL DEFAULT '0',
  `deliveryFee` int NOT NULL DEFAULT '0',
  `photoLessor` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fullnameLessor` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `phoneLessor` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `emailLessor` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `photoHomeowner` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fullnameHomeowner` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `phoneHomeowner` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `emailHomeowner` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `currentDay` date DEFAULT NULL,
  `endDate` date DEFAULT NULL,
  `see` varchar(255) COLLATE utf8mb4_general_ci DEFAULT 'no',
  `status` varchar(255) COLLATE utf8mb4_general_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO rentprocess VALUES("23","lelisa","Apartement","Yearly","1","0","","Efrem Hirko","+251938606334","","back.jpg","lelisa shashura dirriba","+251970463204","lelisa123sh@gmail.com","2023-02-17","2024-02-17","no","0");
INSERT INTO rentprocess VALUES("24","barie","Condominium","Yearly","4","0","back.jpg","efrem hirko","+251938606334","hirkoefrem@gmail.com","","Barie Wakjira","+251921361845","wakjirabarie@gmail.com","2023-03-01","2024-03-01","no","0");


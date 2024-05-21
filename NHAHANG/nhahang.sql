-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 28, 2023 at 03:11 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nhahang`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Food'),
(2, 'Drink'),
(3, 'Dessert');

-- --------------------------------------------------------

--
-- Table structure for table `category_product`
--

DROP TABLE IF EXISTS `category_product`;
CREATE TABLE IF NOT EXISTS `category_product` (
  `category_id` int NOT NULL,
  `product_id` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_product`
--

INSERT INTO `category_product` (`category_id`, `product_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 5),
(1, 6),
(1, 8),
(1, 12),
(2, 4),
(2, 7),
(3, 9),
(3, 10),
(3, 11);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `description`, `image`) VALUES
(1, 'Burger', 20, '<p>A hamburger is a popular meal made by placing a grilled ground beef patty inside a bun.</p> \n<br>\n<p>The origins of the hamburger are hotly debated, with conflicting claims made by Wisconsin; Hamburg, Germany; Hamburg, New York; and Athens, Texas, among others. Regardless, it is quite certain that hamburgers have been around since the late nineteenth century.</p>\n<br>\n<p>Hamburgers are quickly served and easily eaten. This convenience has made them a favorite food for generations of Americans. If not obtained from a grocer, it is served at diners and fast-food outlets and also sold in stalls at games, beaches, and other outdoor locales.</p>', 'buger.jpg'),
(2, 'Pasta', 20, '<p>Pasta (US: /ˈpɑːstə/, UK: /ˈpæstə/; Italian pronunciation: [ˈpasta]) is a type of food typically made from an unleavened dough of wheat flour mixed with water or eggs, and formed into sheets or other shapes, then cooked by boiling or baking. Rice flour, or legumes such as beans or lentils, are sometimes used in place of wheat flour to yield a different taste and texture, or as a gluten-free alternative. Pasta is a staple food of Italian cuisine.</p>\r\n<br>\r\n<p>Pastas are divided into two broad categories: dried (pasta secca) and fresh (pasta fresca). Most dried pasta is produced commercially via an extrusion process, although it can be produced at home. Fresh pasta is traditionally produced by hand, sometimes with the aid of simple machines.Fresh pastas available in grocery stores are produced commercially by large-scale machines.</p>\r\n<br>\r\n<p>Both dried and fresh pastas come in a number of shapes and varieties, with 310 specific forms known by over 1,300 documented names.In Italy, the names of specific pasta shapes or types often vary by locale. For example, the pasta form cavatelli is known by 28 different names depending upon the town and region. Common forms of pasta include long and short shapes, tubes, flat shapes or sheets, miniature shapes for soup, those meant to be filled or stuffed, and specialty or decorative shapes.</p>\r\n<br>\r\n<p>As a category in Italian cuisine, both fresh and dried pastas are classically used in one of three kinds of prepared dishes: as pasta asciutta (or pastasciutta), cooked pasta is plated and served with a complementary sauce or condiment; a second classification of pasta dishes is pasta in brodo, in which the pasta is part of a soup-type dish. A third category is pasta al forno, in which the pasta is incorporated into a dish that is subsequently baked in the oven.Pasta dishes are generally simple, but individual dishes vary in preparation. Some pasta dishes are served as a small first course or for light lunches, such as pasta salads. Other dishes may be portioned larger and used for dinner. Pasta sauces similarly may vary in taste, color and texture.</p>\r\n<br>\r\n<p>In terms of nutrition, cooked plain pasta is 31% carbohydrates (mostly starch), 6% protein, and low in fat, with moderate amounts of manganese, but pasta generally has low micronutrient content. Pasta may be enriched or fortified, or made from whole grains.</p>', 'pasta.jpg'),
(3, 'Lasagna', 20, '<p>Lasagna is a wide, flat sheet of pasta. Lasagna can refer to either the type of noodle or to the typical lasagna dish which is a dish made with several layers of lasagna sheets with sauce and other ingredients, such as meats and cheese, in between the lasagna noodles.</p>\r\n<br>\r\n<p>Originally, the word lasagna was used to describe a pot in which food was being cooked rather than the pasta itself.  Lasagna recipes have been around for ages, dating back to as early as the thirteenth century.  Today, lasagnas come in all kinds of varieties from veggies and cream sauces to traditional sauce and cheese lasagnas as well as meat lasagnas.</p>\r\n<br>\r\n<p>Originated in Italy during the middle ages, lasagna has been attributed to the city of Naples.</p>', 'lasagna.jpg'),
(4, 'Chocolate drink', 10, '<p>There’s nothing more satisfying on a cold winter’s day than a steaming mug of hot chocolate unless of course, it’s a mug of rich, molten drinking chocolate. The terms drinking chocolate and hot chocolate are often used interchangeably, but the reality is the two drinks are quite different.  Hot chocolate starts in powder form (usually a blend of cocoa powder, sugar, and often includes dairy powder and flavorings or spices) and is typically made with water.  Drinking chocolate, or sipping chocolate, is exactly what it sounds like – luxurious, melted chocolate you can drink! This extraordinary winter beverage is made from two simple ingredients (melted dark chocolate and milk) and is richer and thicker, with a more intense chocolate flavor than its counterpart.</p>\r\n<br>\r\n<p>Drinking Chocolate is perfect for those in search of a full-bodied, deeply satisfying chocolate experience. Preparation for this decadent winter beverage takes a little more time, but the efforts are well worth it. Plus, because this drink is super-rich, you only need a small amount to get your soul-soothing, winter chocolate fix.</p> ', 'chocolate_Drink.jpg'),
(5, 'Pizza', 20, '<p>Pizza, dish of Italian origin consisting of a flattened disk of bread dough topped with some combination of olive oil, oregano, tomato, olives, mozzarella or other cheese, and many other ingredients, baked quickly—usually, in a commercial setting, using a wood-fired oven heated to a very high temperature—and served hot.</p>\r\n<br>\r\n<p>Uncover the chemistry behind the delicious taste of pizza\r\nUncover the chemistry behind the delicious taste of pizza\r\nDiscover the science of why pizza tastes good.See all videos for this article\r\nOne of the simplest and most traditional pizzas is the Margherita, which is topped with tomatoes or tomato sauce, mozzarella, and basil. Popular legend relates that it was named for Queen Margherita, wife of Umberto I, who was said to have liked its mild fresh flavour and to have also noted that its topping colours—green, white, and red—were those of the Italian flag.</p>', 'pizza.jpg'),
(6, 'Hot Dog', 20, '<p>A hot dog is a dish consisting of a grilled, steamed, or boiled sausage served in the slit of a partially sliced bun.The term hot dog can refer to the sausage itself. The sausage used is a wiener (Vienna sausage) or a frankfurter (Frankfurter Würstchen, also just called frank). The names of these sausages commonly refer to their assembled dish.Hot dog preparation and condiments vary worldwide. Typical condiments include mustard, ketchup, relish, onions in tomato sauce, and cheese sauce. Other toppings include sauerkraut, diced onions, jalapeños, chili, grated cheese, coleslaw, bacon and olives. Hot dog variants include the corn dog and pigs in a blanket. The hot dog\'s cultural traditions include the Nathan\'s Hot Dog Eating Contest and the Oscar Mayer Wienermobile.</p>\r\n<br>\r\n<p>These types of sausages were culturally imported from Germany and became popular in the United States. It became a working-class street food in the U.S., sold at stands and carts. The hot dog became closely associated with baseball and American culture. Although particularly connected with New York City and its cuisine, the hot dog eventually became ubiquitous throughout the US during the 20th century. Its preparation varies regionally in the country, emerging as an important part of other regional cuisines, including Chicago street cuisine.</p>', 'Hot_dog.jpg'),
(7, 'Juice', 10, '<p>Juice is a drink made from the extraction or pressing of the natural liquid contained in fruit and vegetables. It can also refer to liquids that are flavored with concentrate or other biological food sources, such as meat or seafood, such as clam juice. Juice is commonly consumed as a beverage or used as an ingredient or flavoring in foods or other beverages, such as smoothies. Juice emerged as a popular beverage choice after the development of pasteurization methods enabled its preservation without using fermentation (which is used in wine production).The largest fruit juice consumers are New Zealand (nearly a cup, or 8 ounces, each day) and Colombia (more than three quarters of a cup each day). Fruit juice consumption on average increases with a country\'s income level.</p>', 'juse.jpg'),
(8, 'Biryani', 20, '<p>Biryani (/bɜːrˈjɑːni/) is a mixed rice dish that was thought to have originated from Iran before settling in modern India.It is made with rice, some type of meat (chicken, beef, goat, lamb, prawn, or fish) and spices. To cater to vegetarians, in some cases, it is prepared by substituting vegetables for the meat.Sometimes eggs and/or potatoes are added.</p>\r\n<br>\r\n<p>Biryani is one of the most popular dishes in South Asia, as well as among the diaspora from the region. Similar dishes are also prepared in other parts of the world such as in Iraq, Myanmar, Thailand, and Malaysia.Biryani is the single most-ordered dish on Indian online food ordering and delivery services, and has been labelled as the most popular dish overall in India.</p>', 'biryani.jpg'),
(9, 'Chocolate', 15, '<p>Chocolate, from the cacao pod, contains a small amount of caffeine, theobromine and theophylline. A typical 8-ounce cup of hot chocolate has about 5 milligrams of caffeine, as does 8 ounces of chocolate milk. In comparison, a typical 1.55-ounce milk chocolate bar has about 9 milligrams of caffeine, and 1 ounce of semisweet dark chocolate has about 20 milligrams of caffeine—about one-fourth that of coffee. The amount of caffeine will vary depending on the type of chocolate that is used in beverages, cooking, or baking.</p>\r\n<br>\r\n<p>Chocolate has a rich and complex flavor, filled with acidity, astringency, bitterness, and sweetness, depending on the type of chocolate. Some chocolate has salt added to it for “bite” to bring out flavor and create clarity.</p>\r\n<br>\r\n<p>Chocolate sauce can be made from chocolate that is high in cocoa solids with a strong chocolate flavor—ideally a dark chocolate with at least 50 percent cocoa solids. Melt the chocolate with water and sugar, and then add cream or butter and flavorings such as extracts or liqueurs. A simpler sauce can be made from cocoa powder and dairy milk or cream. Both can provide the basis for hot or cold chocolate beverages.</p>', 'chocolate.jpg'),
(10, 'Ice cream', 15, '<p>Ice cream is a frozen dessert typically made from milk or cream that has been flavoured with a sweetener, either sugar or an alternative, and a spice, such as cocoa or vanilla, or with fruit, such as strawberries or peaches. Food colouring is sometimes added in addition to stabilizers. The mixture is cooled below the freezing point of water and stirred to incorporate air spaces and prevent detectable ice crystals from forming. It can also be made by whisking a flavoured cream base and liquid nitrogen together. The result is a smooth, semi-solid foam that is solid at very low temperatures (below 2 °C or 35 °F). It becomes more malleable as its temperature increases.</p>\r\n<br>\r\n<p>Ice cream may be served in dishes, eaten with a spoon, or licked from edible wafer ice cream cones held by the hands as finger food. Ice cream may be served with other desserts—such as cake or pie—or used as an ingredient in cold dishes—like ice cream floats, sundaes, milkshakes, and ice cream cakes—or in baked items such as Baked Alaska.</p>\r\n<br>\r\n<p>Italian ice cream is gelato. Frozen custard is a type of rich ice cream. Soft serve is softer and is often served at amusement parks and fast-food restaurants in America. Ice creams made from cow\'s milk alternatives, such as goat\'s or sheep\'s milk, or milk substitutes (e.g., soy, cashew, coconut, almond milk, or tofu), are available for those who are lactose intolerant, allergic to dairy protein, or vegan. Banana \"nice cream\"[a] is a 100% fruit-based vegan alternative. Frozen yoghurt, or \"froyo\", is similar to ice cream but uses yoghurt and can be lower in fat. Fruity sorbets or sherbets are not ice creams but are often available in ice cream shops.</p>', 'ice_cream.jpg'),
(11, 'Cupcake', 15, '<p>Cupcakes are small, tasty snack cakes that are favored for their portability and portion-control. They are batter cakes baked in a cup-shaped foil or temperature resistant paper.</p>\r\n<br>\r\n<p>A cupcake can be prepared from a variety of formulations and can be decorated with cream and icings. Its composition is not that different from traditional high-ratio layer cakes. The only difference is the cupcakes higher batter viscosity, an important aspect for better processing and baking tolerances.</p>', 'Spanchi.jpg'),
(12, 'Sandwich', 20, '<p>A sandwich is a food typically consisting of vegetables, sliced cheese or meat, placed on or between slices of bread, or more generally any dish wherein bread serves as a container or wrapper for another food type.The sandwich began as a portable, convenient finger food in the Western world, though over time it has become prevalent worldwide.</p>\r\n<br>\r\n<p>In the 21st century there has been considerable debate over the precise definition of sandwich, and specifically whether a hot dog or open sandwich can be categorized as such. In the United States, the Department of Agriculture and the Food and Drug Administration are the responsible agencies. The USDA uses the definition, \"at least 35% cooked meat and no more than 50% bread\" for closed sandwiches, and \"at least 50% cooked meat\" for open sandwiches.In Britain, the British Sandwich Association defines a sandwich as \"any form of bread with a filling, generally assembled cold\", a definition which includes wraps and bagels, but excludes dishes assembled and served hot, such as burgers.</p>\r\n<br>\r\n<p>Sandwiches are a popular type of lunch food, taken to work, school, or picnics to be eaten as part of a packed lunch. The bread may be plain or be coated with condiments, such as mayonnaise or mustard, to enhance its flavour and texture. As well as being homemade, sandwiches are also widely sold in various retail outlets and can be served hot or cold.There are both savoury sandwiches, such as deli meat sandwiches, and sweet sandwiches, such as a peanut butter and jelly sandwich.</p>\r\n<br>\r\n<p>The sandwich is named after its supposed inventor, John Montagu, 4th Earl of Sandwich.The Wall Street Journal has described it as Britain\'s \"biggest contribution to gastronomy\".</p>', 'sandwich.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permission` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `permission`) VALUES
('nv1', 'aaa', 'Admin'),
('kh1', 'bbb', 'Customer');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

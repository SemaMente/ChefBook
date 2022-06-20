-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 15, 2022 at 02:34 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `group3`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `blog_id` int(11) NOT NULL,
  `blog_title` text NOT NULL,
  `blog_link` text NOT NULL,
  `blog_text` text NOT NULL,
  `blog_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `blog_photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`blog_id`, `blog_title`, `blog_link`, `blog_text`, `blog_date`, `blog_photo`) VALUES
(12, 'Benefits of the Strawberry', '', 'The heart-shaped silhouette of the strawberry is the first clue that this fruit is good for you. These potent little packages protect your heart, increase HDL (good) cholesterol, lower your blood pressure, and guard against cancer.\r\n\r\nPacked with vitamins, fiber, and particularly high levels of antioxidants known as polyphenols, strawberries are a sodium-free, fat-free, cholesterol-free, low-calorie food. They are among the top 20 fruits in antioxidant capacity and are a good source of manganese and potassium. Just one serving -- about eight strawberries -- provides more vitamin C than an orange.\r\n\r\nThis member of the rose family isn’t really a fruit or a berry but the enlarged receptacle of the flower. Choose medium-sized berries that are firm, plump, and deep red; once picked, they don’t ripen further. First cultivated in ancient Rome, strawberries are now the most popular berry fruit in the world. In provincial France, they were regarded as an aphrodisiac. These red gems may be good for your heart in more ways than one.\r\n\r\nWant other ways to get your vitamin C? Try brussels sprouts, cabbage, cauliflower, mango, papaya, red peppers, watermelon, and winter squash.', '2022-06-15 11:10:03', 'https://befreshcorp.net/wp-content/uploads/2017/07/product-packshot-strawberrie.jpg'),
(13, 'Drink Water for Your Health', '', '“Drink more water” is an age-old piece of advice. But do you know why you should drink more water or how it helps your body be healthy?\r\nHow Your Body Uses Water\r\nSo, you just finished drinking a glass of water. But what does your body do with that water now?\r\n\r\nWater is necessary to help your blood transport oxygen and nutrients throughout your body and to your organs. [1]\r\nYour liver and kidneys require water to help your body get rid of harmful substances. [1] [2]\r\nWater helps our bodies to get rid of the extra sodium we eat. [1] [2]\r\nEven our brain is about 70% water, which means staying hydrated helps us think clearly! \r\nHow much water do we need?\r\nWater needs are different for individuals based on body size, gender, physical activity level and body water losses. We get water from foods we eat and fluids we drink. In general, women need around 9 cups of fluid daily and men need around 12.5 cups fluid daily.', '2022-06-15 11:10:03', 'https://blog.foodtalk.org/wp-content/uploads/2021/02/bigstock-glass-of-drinking-water_featured-image.jpg'),
(14, 'All About Peanuts', '', 'You know how you like them…whole vs ground into peanut butter, crunchy vs smooth, boiled vs raw, salted vs honey roasted. Read on to learn some of our favorite facts about peanuts!  \r\nDid you know…?  \r\nThe average American eats 3 pounds of peanut butter a year. [1] And as Americans are snacking more than ever, you may be glad to hear that peanuts can be a healthful snack! [2] One serving of peanuts is a good source of protein, vitamin E, niacin, folate, phosphorus, and magnesium.  \r\n\r\nWhile peanuts are naturally cholesterol-free and low in saturated fat, some companies add fat to their peanut butter products to increase the shelf-life of the product. It is also common for peanut butter to contain added sugars. A good rule of thumb when shopping for peanut butter is to find one made of just peanuts (and maybe salt if you prefer it).  \r\n\r\nStopping at the recommended healthy portion of an ounce of peanuts –about a ¼ cup three to five times a week – can be a challenge. One strategy is to buy peanuts in the shell. The action of shelling slows down how fast you eat them and how much you consume. Fall is an easy time to find boiled peanuts in their shell as peanut farmers are busy harvesting their crops.  \r\n\r\nNote: If you are purchasing boiled peanuts, keep in mind that they are usually cooked in highly salted water. This means that they will have a higher sodium content and will need to be eaten in moderation.  \r\n\r\nLooking for a fun activity to do with your kids? If you are interested in growing your own peanuts, you can do so from home! Grab a pot and some soil and check out this how-to video from the National Peanut Board.', '2022-06-15 11:10:39', 'https://blog.foodtalk.org/wp-content/uploads/2021/09/peanuts_in_their_shell.jpg'),
(39, 'All About Sugar', '', ' Sugars are carbohydrates. Like all carbohydrates, they provide a source of energy in our diet. Sugar is a term that includes all sweet carbohydrates, although the term most often is used to describe sucrose or table sugar, a ‘double sugar’. The body breaks down carbohydrates into simple sugars such as glucose, that can be readily used in the body.\r\n\r\nThere are several different sugars. Sugars occur naturally in some foods, such as fruit and dairy products, and are also added to a wide variety of foods.Sugar can take many different forms, including white, raw or brown sugar, honey or corn syrup.\r\n\r\nToo much sugar in the diet can contribute to health problems like obesity and tooth decay. Refined (or processed) sugar provides a quick, simple source of energy, but it doesn’t contain other nutrients such as vitamins and minerals.\r\n\r\nSugars are popular in the processed food industry because they add taste, colour, bulk and thickness to food products. They also prevent mould forming and act as a preservative.', '2022-06-10 17:30:04', 'https://www.eatthis.com/wp-content/uploads/sites/4/2022/02/sugar.jpg?quality=82&strip=all');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `description` text COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `description`) VALUES
(1, 'Meat Dishes ', 'meatdishes.jpeg', 'The most delicious and abundant red meat dishes are on ChefBook in all their forms such as boiled, roasted, steak, stewed and baked'),
(2, 'Chicken Dishes', 'chickenDishes.jpeg', 'The most enjoyable and delicious recipes of chicken dishes are in ChefBook.'),
(3, 'Fish Dishes', 'fishdishes.jpeg', 'All fish recipes with rich protein and high nutritional values ​​are in ChefBook.'),
(4, 'Vegetable Dishes', 'vegetabledishes.jpeg', 'The most practical vegetable recipes with delicious and healthy options are in ChecBook.'),
(5, 'Diet Dishes', 'd.jpg', 'The whole secret of losing calories in a healthy way and maintaining a healthy diet is in ChefBook.'),
(6, 'Vegetarian Dishes', 'vegetarian.jpg', 'Every website should be built with two primary goals: Firstly, it needs to work across all devices. Secondly, it needs to be fast as'),
(7, 'Vegan Dishes', 'vegan.jpg', 'The healthiest herbal recipes, free from all animal foods, are only in ChefBook.'),
(8, 'Salads', 'salads.jpg', 'All healthy vegetarian foods that increase your quality of life are in ChefBook.\r\n\r\n'),
(9, 'Soups', 'soup.jpg', 'Healthy soup recipes that warm us up before we start our meals.'),
(10, 'Desserts', 'desserts.jpg', 'Thousands of flavor-guaranteed dessert recipes are in ChefBook.'),
(11, 'World Cuisine', 'WorldCuisine.jpg', 'The most delicious recipes from all over the world are in ChefBook with important tips and detailed explanations.'),
(12, 'Beverages', 'b.jpg', 'All refreshing and warming drink recipes and tips are in ChefBook.');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `comment` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `recipe_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comment`, `user_id`, `recipe_id`, `created_at`) VALUES
(8, 'Nice recipes!', 1502701, 35, '2022-06-12 23:59:21'),
(14, 'Nice recipes!', 1502701, 35, '2022-06-13 00:02:13'),
(21, 'asd', 1502701, 31, '2022-06-13 00:05:05'),
(22, 'test ', 1502701, 31, '2022-06-13 00:05:51'),
(24, 'First comment', 1502701, 30, '2022-06-13 00:34:47'),
(25, 'Comment from soup page', 1502701, 41, '2022-06-13 00:37:16'),
(27, 'asdsadasd', 1502701, 42, '2022-06-13 00:42:24'),
(28, 'woow ', 345, 41, '2022-06-13 23:31:06'),
(29, 'woow ', 345, 41, '2022-06-13 23:45:57'),
(30, 'woow ', 345, 41, '2022-06-14 00:00:49'),
(31, 'woow ', 345, 41, '2022-06-14 00:07:08'),
(32, 'woow ', 345, 41, '2022-06-14 00:07:35'),
(33, 'woow ', 345, 41, '2022-06-14 00:08:01'),
(34, 'woow ', 345, 41, '2022-06-14 00:09:03'),
(35, 'woow ', 345, 41, '2022-06-14 00:09:34'),
(36, 'woow ', 345, 41, '2022-06-14 00:11:20'),
(37, 'woow ', 345, 41, '2022-06-14 00:12:15'),
(38, 'woow ', 345, 41, '2022-06-14 00:13:31'),
(39, 'woow ', 345, 41, '2022-06-14 00:14:42'),
(40, 'looks soo goood', 345, 31, '2022-06-14 00:29:54'),
(41, 'kk', 345, 31, '2022-06-14 00:30:34'),
(42, 'sooo goood ', 345, 46, '2022-06-14 00:42:48'),
(43, 'sooo goood ', 345, 46, '2022-06-14 00:43:36'),
(44, 'wow', 345, 30, '2022-06-14 00:45:29'),
(45, 'kjjj', 345, 47, '2022-06-14 00:46:30'),
(46, 'kkk', 345, 30, '2022-06-14 10:02:08'),
(47, 'hahaha', 345, 38, '2022-06-14 21:27:38'),
(48, 'soo good ', 345, 38, '2022-06-14 21:28:35'),
(49, 'soo good ', 345, 38, '2022-06-14 21:28:39'),
(50, 'hh', 345, 38, '2022-06-14 21:29:11'),
(51, 'gdd', 345, 38, '2022-06-14 21:29:27'),
(52, 'So delicious', 345, 48, '2022-06-15 00:02:56'),
(53, 'Very tasty but i dont like the cream in this recipe.', 345, 49, '2022-06-15 00:03:47'),
(54, 'Sooo Good', 15036948, 62, '2022-06-15 00:12:02'),
(55, 'I dont really like it.', 15036948, 48, '2022-06-15 00:12:18'),
(56, 'good recipe', 15036948, 53, '2022-06-15 00:12:34'),
(57, 'best asian food ever', 15036948, 55, '2022-06-15 00:12:47'),
(58, 'I like it', 4213121, 62, '2022-06-15 00:18:55'),
(59, 'I dont really like it', 4213121, 49, '2022-06-15 00:19:10'),
(60, 'best vegan dishes ever!!!', 4213121, 50, '2022-06-15 00:19:30'),
(61, 'Best chicken dishes ever!!! Love it', 4213121, 48, '2022-06-15 00:19:52'),
(62, 'Not soo good ', 325423, 48, '2022-06-15 00:24:25');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `number` int(11) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `number`, `message`) VALUES
(3, 'Aylin Öktem', 'aylin@hotmail.com', 2147483647, 'ı cant find pasta recipes');

-- --------------------------------------------------------

--
-- Table structure for table `recieps`
--

CREATE TABLE `recieps` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `description` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `recieps`
--

INSERT INTO `recieps` (`id`, `name`, `description`, `image`, `category_id`, `user_id`, `created_at`) VALUES
(47, 'Lemonade', 'Well, the problem is that if you just stir all of these together the sugar will sink to the bottom. So the best way to make lemonade is to make a simple syrup first, by heating water and sugar together until the sugar is completely dissolved, and then mix that with the lemon juice.\r\n\r\nFEATURED VIDEO\r\nHealthy Lentil Soup Recipe\r\nThe proportions will vary depending on how sweet and strong you like your lemonade, and how sour your lemons are to begin with. Late season lemons are less sour than early season lemons. Meyer lemons are sweeter than standard lemons.', 'Lemonade.png', 12, 345, '2022-06-13 21:46:14'),
(48, 'Creamy Pesto Chicken', 'Fillet the chicken breasts into two thinner pieces (or pound the chicken to an even thickness then cut each breast in half to create four portions). Season the chicken with a pinch of salt and pepper on both sides.\r\nHeat a large skillet over medium heat. Once hot, add 1 Tbsp oil and swirl to coat the surface. Add the chicken to the skillet and cook on each side until golden brown and cooked through (about 7-10 minutes total). Remove the chicken to a clean plate.\r\nTurn the heat down to medium-low. Add the remaining olive oil to the skillet along with the minced garlic and halved grape tomatoes. Sauté for about five minutes, or until the tomatoes start to soften and lose their shape.\r\nAdd the heavy cream and pesto to the skillet with the tomatoes and stir to combine. Allow the sauce to come up to a simmer. Taste the sauce and adjust the salt or pepper to your liking.\r\nAdd the chicken back to the skillet with the tomatoes and sauce, turning to coat the chicken. Allow the chicken to simmer in the sauce for just a few minutes more to heat through. Serve hot.', '1.png', 2, 60669, '2022-06-14 20:34:14'),
(49, 'Creamy salmon', 'eat the oven to 200C/180C fan/gas 6. Bring a medium pan of water to the boil. Add the potatoes and cook for 8 mins. Drain and leave to steam-dry in a colander for a few minutes. Toss the potatoes with ½ of the oil and plenty of seasoning in a baking tray. Put in the oven for 20 mins, tossing halfway through the cooking time. \r\nMeanwhile, heat the remaining oil in a frying pan over a medium heat. Add the leek and fry for 5 mins, or until beginning to soften. Stir through the garlic for 1 min, then add the cream, capers and 75ml hot water, then bring to the boil. Stir through the chives.', '2.png', 3, 60669, '2022-06-14 20:37:39'),
(50, 'Baked vegan korma', 'STEP 1\r\nBefore you get started take a look at our chopping and knife skills guide.\r\n\r\nHeat the oven to 200C/180C fan/gas 6. If your chopping board doesn’t have anti-slip grips, lay a dampened tea towel or sheet of kitchen paper on the work surface, then place the board on top to stop it from slipping. Pull the leaves off the cauliflower, discarding any damaged or wilted ones and reserving the rest. Cut the cauliflower florets and leaves into bite-sized pieces, then cut the stalk into smaller pieces. Tip everything into the roasting tin.\r\n\r\nSTEP 2\r\nTrim away the root end of the spring onions and peel off the papery skins. Snip the spring onions into small pieces directly into the tin using kitchen scissors. Drizzle the oil over the veg, then season with a pinch of salt and toss everything together with your hands. Put the tin on the middle shelf of the oven. Roast for 15 mins.\r\n\r\nSTEP 3\r\nPeel the skins off the garlic cloves. After 15 mins, carefully remove the tin from the oven using oven gloves. Squeeze the garlic cloves directly into the tin using the garlic crusher.\r\n\r\nSTEP 4\r\nMeasure out the curry paste – you can do this using scales or estimate based on the quantity of paste in the jar – if it’s 200g, add roughly half (see tips below). Stir the curry paste and garlic into the veg.\r\n\r\nSTEP 5\r\nUse a can opener to open the can of chickpeas, then tip into a sieve over a bowl to catch the liquid (see below for ideas on how to use this liquid and save on waste). Tip the drained chickpeas into the roasting tin.\r\n\r\nSTEP 6\r\nPour the coconut cream into the tin, then measure out 450ml water using a measuring jug and add this, too. Crumble over the stock cube.\r\n\r\nSTEP 7\r\nWeigh out the green beans using scales. If they have stalks, snap or carefully cut them off. Add the beans to the roasting tin.\r\n\r\nSTEP 8\r\nWeigh out the ground almonds using scales, then tip them into the tin. Hold the tin steady with one hand while wearing an oven glove and gently stir everything together using a wooden spoon. Return the tin to the oven for 25 mins, then carefully remove from the oven (there will be hot liquid in the tin). Serve the curry with cooked rice or naans and some mango chutney.', '3.png', 7, 60669, '2022-06-14 20:39:33'),
(51, 'Chicken Pasta Bake', 'STEP 1\r\nHeat 2 tbsp of the oil in a pan over a medium heat and fry the onion gently for 10-12 mins. Add the garlic and chilli flakes and cook for 1 min. Tip in the tomatoes and sugar and season to taste. Simmer uncovered for 20 mins or until thickened, then stir through the mascarpone. \r\n\r\nSTEP 2\r\nHeat 1 tbsp of oil in a non-stick frying pan. Season the chicken and fry for 5-7 mins or until the chicken is cooked through. \r\n\r\nSTEP 3\r\nHeat the oven to 220C/200C fan/gas 7. Cook the penne following pack instructions. Drain and toss with the remaining oil. Tip the pasta into a medium sized ovenproof dish. Stir in the chicken and pour over the sauce. Top with the cheddar, mozzarella and parsley. Bake for 20 mins or until golden brown and bubbling. ', '4.png', 2, 60669, '2022-06-14 20:41:00'),
(52, 'Chocolate puddings', 'STEP 1\r\nButter four 9 x 5cm ramekins and set aside. Tip the butter, chocolate and a generous pinch of salt into a heatproof bowl. Set over a small pan of just-simmering water and stir until melted, then remove from the heat and leave to cool a little.\r\n\r\nSTEP 2\r\nPut the sugar and eggs in a large mixing bowl and beat with an electric whisk until pale, almost doubled in volume and thick enough to leave a trail when the beaters are lifted up. Gently fold in the melted chocolate and the Guinness. Spoon the mixture into the ramekins, then chill in the fridge for 1 hr. Heat oven to 200C/180C fan/gas 6 and put a baking tray on the top shelf to heat up.\r\n\r\nSTEP 3\r\nPlace the ramekins on the hot baking tray and bake for 18 mins. Remove from the oven and leave to stand for a minute, then serve with a dollop of cream, if you like.', '5.png', 10, 60669, '2022-06-14 20:43:06'),
(53, 'Vegetarian Hambuger', '\r\nHeat a barbecue until the coals are glowing white hot. Brush each side of all the halloumi slices with olive oil and cook them on each side for 2-3 mins or until golden.\r\n\r\nSplit the brioche buns (toast them very briefly on both sides if you like, but be careful not to burn them) and spread the bottom halves with the hummus. Add some tomato and then the halloumi, then finish with the lettuce and salsa and top with the other half of the bun.', '6.png', 6, 60669, '2022-06-14 20:44:57'),
(54, 'Mocktail', 'Chop the cucumber and mint sprig into small pieces. Bring 200ml water to the boil in a small pan and then add the mint and cucumber. Turn off the heat and leave for 2 mins. Add a small handful of frozen berries, let them defrost for a minute, then crush them lightly with the back of a spoon. Strain the mixture. This will keep in the fridge for up to 24 hours and will be enough to make four drinks.\r\n\r\nPour 40ml of your strained mixture into a tall glass. Add a handful of ice and top up with 120ml lemonade. Garnish with whatever chopped fruit you like or some more frozen berries and mint leaves if you have them. Stir gently to combine.', '7.png', 12, 60669, '2022-06-14 20:46:27'),
(55, 'Asian greens', '\r\nWhisk the oil and oyster sauce with 1 tbsp water in a saucepan. Cook for 2-3 mins until glossy, then set aside.\r\n\r\nBring a large pan of salted water to the boil. Add the greens, turn down the heat and cook for 2 mins, or until just wilted, then drain.\r\n\r\nTo serve: cut any large bulbs in half and put on a plate. Drizzle the sauce over and serve immediately.', '8.png', 11, 60669, '2022-06-14 20:48:11'),
(56, 'Thai pesto noodles', '\r\nPut the noodles in a large bowl, then pour over enough boiling water to cover. Set aside and wait for the noodles to reach an al dente texture. Meanwhile, put the basil, coriander, peanuts, chilli, lime zest and juice, sesame oil, 1 tbsp of olive oil, 2 tbsp of water and a pinch of salt in a food processor and whizz into a pesto.\r\n\r\nHeat the remaining oil in a large non-stick pan and quickly stir-fry the prawns for 3-4 mins, then stir in the pesto. Drain and add the noodles, season with black pepper and mix well, so that the noodles are completely coated in the pesto – if it looks a little dry, add a splash of hot water. Spoon into bowls, squeeze over extra lime juice and sprinkle over more coriander, if you like.', '9.png', 11, 60669, '2022-06-14 20:49:25'),
(57, 'Vegan sausage rolls', '\r\nTip the mushrooms into a food processor and pulse until they are very finely chopped. Put half the olive oil in a large frying pan, add the leeks along with a pinch of salt and fry gently for 15 mins or until softened and golden brown. Scrape the leeks out of the pan, into a bowl and set aside to cool a little.\r\n\r\nHeat the remaining oil in the pan and fry the mushrooms for 10 mins over a medium heat. Add the garlic, sage, miso and mustard, and fry for a further minute. Leave to cool slightly.\r\n\r\nHeat the oven to 200C/180C fan/gas 6. Tip the mushroom mixture into the bowl with the leeks, then add the chestnuts and breadcrumbs. Season, then mix everything together until you have a slightly stiff mixture.\r\n\r\nUnravel the pastry on a floured surface, then roll the pastry out so that one side measures 43 cm. Mould the mushroom and leek mixture into a sausage shape down the centre of the pastry, then bring the pastry up around the filling and seal along the seam with a fork. Cut into ten pieces. Lay on a parchment-lined baking sheet and brush each piece with milk. Bake for 25 mins or until deep, golden brown. Leave to cool a little and sprinkle with sesame seeds before serving.', '10.png', 7, 345, '2022-06-14 20:51:45'),
(58, 'Green spirulina smoothie', 'Tip all the ingredients into a blender or food processor with 75ml cold water, and blitz until smooth. Or, put everything in a bowl and blitz with a hand blender.\r\n\r\nPour into a tall glass and garnish with a mint sprig, if you like. Drink straightaway.', '11.png', 12, 345, '2022-06-14 20:54:20'),
(59, 'Healthy tuna lettuce wraps', '\r\nBrush the tuna with a little oil. Heat a non-stick pan, add the tuna and cook for 1 min each side, or a min or so longer for a thicker fillet. Transfer to a plate to rest.\r\n\r\nHalve and stone the avocado and scoop the flesh into a small bowl. Add the mustard powder and vinegar, then mash well so that the mixture is smooth like mayonnaise. Stir in the capers. Spoon into two small dishes and put on serving plates with the lettuce leaves, and tomatoes.\r\n\r\nSlice the tuna (it should be slightly pink inside) and arrange on the plates. Spoon some ‘mayo’ on the lettuce leaves and top with tuna and cherry tomatoes and a few extra capers. To eat, roll up into little wraps.', '12.png', 5, 345, '2022-06-14 20:55:42'),
(60, 'Egg salads', '\r\nBring a pan of water to the boil, lower in the eggs and boil for 8 mins. Drain and run under the cold tap to cool them a little, then peel and halve. Meanwhile, mix 1 tbsp lemon juice and 3 tbsp water with the tahini to make a dressing.\r\n\r\nHeat the oil and fry the onion and garlic for 5 mins to soften them. Add the ground cumin and seeds, stir briefly then add the beans and lightly crush some of them as you heat them, adding some of the juice from the can to get a nice creamy consistency but keeping whole beans, too. Taste and add lemon juice and just a little seasoning if you need to.\r\n\r\nSpoon the beans on to plates with the lettuce, then add the eggs and tomatoes, with the tahini dressing, chilli and parsley, if using.', '13.png', 5, 345, '2022-06-14 20:56:44'),
(61, 'Cheesecake', 'Oil a 20cm deep springform cake tin and line with baking parchment. Tip the digestive biscuits into a food bag or the bowl of a food processor and crush or blitz to a fine crumb. Mix with the melted butter, then press into the base of the prepared cake tin and chill for 30 mins.\r\n\r\nRoughly chop half the chocolate mini eggs. Beat the soft cheese with the icing sugar and vanilla until just combined using an electric whisk. Clean the beaters, then beat the double cream to stiff peaks in a separate bowl. Gently fold the whipped cream into the soft cheese mixture along with the chopped chocolate mini eggs. Spoon the cheesecake mixture over the biscuit base, then smooth the surface with a palette knife or spatula. Chill overnight.\r\n\r\nThe next day, carefully release the cheesecake from the tin (you may need to run a cutlery knife around the edge to loosen it) and top with the remaining whole chocolate mini eggs to decorate.', '14.png', 10, 345, '2022-06-14 20:58:04'),
(62, 'miso Steak', '\r\nTip the miso paste, Sherry or sake, sugar and garlic into a sealable food bag. Season with a generous grinding of black pepper, then squash it all together until completely mixed. Add the steak, gently massage the marinade into the steak until completely coated, then seal the bag. Pop the bag into the fridge and leave for at least 1 hr, but up to 2 days is fine.\r\n\r\nTo cook, heat a heavy-based frying pan, griddle pan or barbecue until very hot. Wipe the excess marinade off the steak, then sear for 3 mins on each side for medium-rare or a few mins longer if you prefer the meat more cooked. Set aside for 1 min to rest. Carve the beef into thick slices and serve with a crunchy salad made with the spinach, cucumber, celery, radish and sesame seeds.', '15.png', 1, 345, '2022-06-14 20:59:55'),
(63, 'mashed potatoes', 'Heat 1 tbsp olive oil in a frying pan, then fry 1 halved and sliced large onion until golden.\r\n\r\nAdd 2 large carrots, cut into sugar-cube size pieces and most of the 2 tbsp chopped thyme, reserving a sprinkling for later.\r\n\r\n\r\nPour in 200ml red wine, 150ml water and a 400g chopped tomatoes, then crumble in 2 vegetable stock cubes and simmer for 10 mins.\r\n\r\n\r\nTip in a 410g can green lentils, including the juice, then cover and simmer for another 10 mins until the carrots still have a bit of bite and the lentils are pulpy.\r\n\r\nMeanwhile, boil 950g sweet potatoes, cut into chunks, for 15 mins until tender, drain well, then mash with 25g butter and season to taste.\r\n\r\n\r\nPile the lentil mixture into a pie dish, spoon the mash on top, then sprinkle over 85g grated vegetarian mature cheddar and the remaining thyme. The pie can now be covered and chilled for 2 days, or frozen for up to a month.\r\n\r\n\r\nHeat oven to 190C/170C fan/gas 5. Cook for 20 mins if cooking straightaway, or for 40 mins from chilled, until golden and hot all the way through. Serve with broccoli.', '16.png', 4, 345, '2022-06-14 21:02:21'),
(64, 'Fried Potato Chips', 'Stir together warm water and sugar in a medium bowl. Soak potatoes in water mixture for 15 minutes. Remove potatoes from water and dry thoroughly on paper towels.\r\n\r\nStep 2\r\nHeat oil in a deep-fryer to 375 degrees F (190 degrees C).\r\n\r\nStep 3\r\nCook potatoes in hot oil until golden, 5 to 6 minutes. Drain on paper towels and season with salt.', '17.png', 4, 15036948, '2022-06-14 21:06:18'),
(65, 'Red wine', 'Add the Beaujolais nouveau (or other red wine), Laird’s apple brandy, sloe gin, maple syrup and Angostura bitters into a mixing glass with ice and stir until well-chilled.\r\n\r\nStrain into a chilled cocktail glass.\r\n\r\nGarnish with thin apple slices and grated cinnamon.', '18.png', 12, 15036948, '2022-06-14 21:08:07'),
(66, 'Greek roast fish', 'Heat oven to 200C/180C fan/gas 6. Tip the potatoes, onion, garlic, oregano and olive oil into a roasting tin, season, then mix together with your hands to coat everything in the oil. Roast for 15 mins, turn everything over and bake for 15 mins more.\r\n\r\nAdd the lemon and tomatoes, and roast for 10 mins, then top with the fish fillets and cook for 10 mins more. Serve with parsley scattered over.', '19.png', 11, 15036948, '2022-06-14 21:10:06'),
(67, 'Lemon cake', 'Heat oven to 160C/140C fan/gas 3. Grease and line the base and sides of 3 x 20cm cake tins with baking parchment. In a jug, whisk the eggs, yogurt and milk. Beat the butter and sugar together in a large bowl, using an electric hand whisk. When you have a light and fluffy mixture, add the flour, the liquid in the jug and the lemon zest. Mix again until smooth. Divide the cake mixture between the tins, level the surfaces and bake for 40 mins.\r\n\r\nMix the lemon juice and elderflower cordial. When the cakes are cooked, poke all over the surface with a cocktail stick then spoon the lemon and elderflower syrup over the cakes. Leave to cool in the tins. Once cool, you can wrap in cling film and keep for 3 days before icing.\r\n\r\nTo make the icing, beat the butter until smooth with an electric hand whisk. Add half the icing sugar, use a spatula to mash the mixture together (this will help to prevent an icing sugar cloud) then whisk again. Add the remaining icing sugar, cream cheese and lemon zest, mash again, then whisk again until smooth.\r\n\r\nStack the cakes on a cake stand with plenty of icing between each layer. Pile most of the remaining icing on top, then use a palette knife to spread it across the top and down the sides, covering the cake in swirls (don’t worry about it looking too perfect). Add the final bit of icing to the top and use it to cover any patches where the cake is poking through. Decorate with fresh flowers.', '20.png', 10, 15036948, '2022-06-14 21:11:35'),
(68, 'Tiramisu', 'Put the double cream, mascarpone, marsala and golden caster sugar in a large bowl.\r\n\r\nWhisk until the cream and mascarpone have completely combined and have the consistency of thickly whipped cream.\r\n\r\nPour the coffee into a shallow dish. Dip in a few of the sponge fingers at a time, turning for a few seconds until they are nicely soaked, but not soggy. Layer these in a dish until you’ve used half the sponge fingers, then spread over half of the creamy mixture.\r\n\r\nUsing the coarse side of the grater, grate over most of the dark chocolate. Then repeat the layers (you should use up all the coffee), finishing with the creamy layer.\r\n\r\nCover and chill for a few hours or overnight. Will keep in the fridge for up to two days. \r\n\r\nTo serve, dust with the cocoa powder and grate over the remainder of the chocolate.', '21.png', 10, 4213121, '2022-06-14 21:14:42'),
(69, 'lentil Soup', 'Heat a large saucepan and dry-fry 2 tsp cumin seeds and a pinch of chilli flakes for 1 min, or until they start to jump around the pan and release their aromas.\r\n\r\n \r\nScoop out about half with a spoon and set aside. Add 2 tbsp olive oil, 600g coarsely grated carrots, 140g split red lentils, 1l hot vegetable stock and 125ml milk to the pan and bring to the boil.\r\n\r\n \r\nSimmer for 15 mins until the lentils have swollen and softened.\r\n\r\n \r\nWhizz the soup with a stick blender or in a food processor until smooth (or leave it chunky if you prefer).\r\n\r\nSeason to taste and finish with a dollop of plain yogurt and a sprinkling of the reserved toasted spices. Serve with warmed naan breads.', '22.png', 9, 4213121, '2022-06-14 21:15:49'),
(70, 'Tuna Salad', 'Drain the canned tuna well. Finely dice the celery, chop the walnuts, and slice the green onions.\r\nCombine the tuna, celery, walnuts, green onions, mayonnaise, lemon juice, pepper, and salt in a bowl. Stir to combine.\r\nServe as a sandwich, salad over a bed of greens, or with crackers and vegetables for dipping. Refrigerate up to four days.', '23.png', 8, 4213121, '2022-06-14 21:17:13'),
(71, 'Italian Salad', 'Make the vinaigrette first so the flavors have time to blend. Add the olive oil, red wine vinegar, lemon juice, Italian seasoning blend, garlic powder, salt, Dijon, and sugar in a bowl or jar. Whisk the ingredients together or close the jar and shake until combined. Set the dressing aside.\r\nCook the orzo according to the package directions (boil until tender). Drain the orzo in a colander and rinse briefly with cool water. Allow the orzo to cool and drain as you prepare the rest of the ingredients. You want the pasta to be as cool and dry as possible.\r\nRinse and drain the can of chickpeas, again allowing them to drain very well as you prepare the rest of the ingredients.\r\nRoughly chop the spinach and place it in a large bowl. Remove the roasted red peppers, olives, and artichoke hearts from their brines. Slice the olives and roasted red peppers, and roughly chop the artichoke hearts. Slice the grape tomatoes in half. Place the chopped vegetables in the bowl with the spinach.\r\n', '24.png', 8, 4213121, '2022-06-14 21:18:32'),
(72, 'Margarita', 'Add tequila, orange liqueur, lime juice and agave syrup to a cocktail shaker filled with ice, and shake until well-chilled.\r\n\r\nStrain into a rocks glass over fresh ice.\r\n\r\nGarnish with a lime wheel and kosher salt rim (optional).', '25.png', 12, 325423, '2022-06-14 21:21:42');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `userid` int(11) DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `url_address` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `date` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `userid`, `first_name`, `last_name`, `gender`, `username`, `email`, `password`, `url_address`, `date`) VALUES
(2, 345, 'sema', 'mente', 'Female', 'smnt', 'sema@g.com', '1234567', 's.com', '2022-06-11 15:10:04'),
(3, 15036948, 'Tugrul', 'Ates', 'Male', 'tyates', 'tyates@a.com', 'test', 'tugrul.ates', '2022-06-14 20:21:57'),
(4, 60669, 'Simge', 'coban', 'Female', 'simge', 'simge@s.com', 'elma', 'simge.coban', '2022-06-14 20:23:11'),
(5, 4213121, 'anas', 'hamadeh', 'male', 'anas', 'anas@c.com', 'armut', 'anas.com', '2022-06-14 20:23:11'),
(6, 325423, 'oyku', 'turkmen', 'female', 'oyku', 'oyku@c.com', 'cilek', 'oyku.com', '2022-06-14 20:23:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recieps`
--
ALTER TABLE `recieps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `recieps`
--
ALTER TABLE `recieps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

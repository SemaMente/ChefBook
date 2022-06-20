const menus = [
    {
        id:1,
        category:"dinner",
        menuname:"TomaHawk Steak",
        individualMeals:["Mashed Potatoes", "Tomahawk Cut", "Red Wine"],
        img:"../images/tomahawk.png",
        location:"dinermenus",
        
    },
    {
        id:2,
        category:"dinner",
        menuname:"Fish n Chips",
        individualMeals:["Beer", "Cod fillets", "Fried Potato Chips"],
        img:"../images/tomahawk.png",
        location:"dinermenus"
    },
    {
        id:9,
        category:"dinner",
        menuname:"Baked Wings",
        individualMeals:["1 kilo of chicken wings", "Fried Rice", "Shepherd's Salad"],
        img:"../images/tomahawk.png",
        location:"dinermenus"
    },
    {
        id:3,
        category:"lunch",
        menuname:"Meatball Sandwich",
        individualMeals:["12 Classic Meatballs", "Curly Fries", "Creamy Coleslaw"],
        img:"../images/tomahawk.png",
        location:"lunchmenus"
    },
    {
        id:4,
        category:"lunch",
        menuname:"'Shrooms",
        individualMeals:["300 g of Oyster Mushrooms", "Broccoli Soup", "Classic Italian Pasta"],
        img:"../images/tomahawk.png",
        location:"lunchmenus"
    },
    {
        id:5,
        category:"lunch",
        menuname:"Taco Tuesday",
        individualMeals:["Tomato Soup", "Cheesy Ground Beef Tacos", "Corn Pudding"],
        img:"../images/tomahawk.png",
        location:"lunchmenus"
    },
    {
        id:6,
        category:"breakfast",
        menuname:"English Breakfast",
        individualMeals:["Haricot Beans", "Pork Sausage", "Fried Eggs",],
        img:"../images/tomahawk.png",
        location:"breakfastmenus"
    },
    {
        id:7,
        category:"breakfast",
        menuname:"Nutella Pancakes",
        individualMeals:["6 Pancakes", "6 Tablespoons Nutella", "English Tea"],
        img:"../images/tomahawk.png",
        location:"breakfastmenus"
    },
    {
        id:8,
        category:"breakfast",
        menuname:"Green Shakshuka",
        individualMeals:["Fried Spinach and Eggs", "Cappato", "English Tea"],
        img:"../images/tomahawk.png",
        location:"breakfastmenus"
    },
    {
        id:10,
        category:"diet",
        menuname:"Pepperoni Omlet with vegetables",
        individualMeals:["Omelette", "Classic Cheese", "English Tea"],
        img:"../images/tomahawk.png",
        location:"dietmenus"
    },
    {
        id:11,
        category: "diet",
        menuname:"Leaf Wrapping",
        individualMeals:["5 Leaf Wrapping", "250 g of yoghurt", "Shepherd's Salad"],
        img:"../images/tomahawk.png",
        location:"dietmenus"
    },
    
        
    
]


const profileFavsContainer = document.querySelector(".profile_favs")
const localStorageItems = JSON.parse(localStorage.getItem("favs"))

const favedItems = menus.filter(item =>  localStorageItems?.includes(item.menuname) )

const displayFavedITems = favedItems.map(item => ` <div class="single_fav_container">
<a href="/${item.menuname.replace(/\s/g, '').toLowerCase()}.html">
    <img class="fav_img" src="${item.img}" alt="">
    <div class="fav_name">${item.menuname}</div>
</a>

</div>`)

const favedString = displayFavedITems.join("");
profileFavsContainer.innerHTML = favedString




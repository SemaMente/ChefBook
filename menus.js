// import menus from "./js/menusnamesdata";
const menus = [
    {
        id:1,
        category:"dinner",
        menuname:"TomaHawk Steak",
        individualMeals:["Mashed Potatoes", "Tomahawk Cut", "Red Wine"],
        img:"images/tomahawk.png",
        location:"dinermenus",
        
    },
    {
        id:2,
        category:"dinner",
        menuname:"Fish n Chips",
        individualMeals:["Beer", "Cod fillets", "Fried Potato Chips"],
        img:"images/fishnchips.png",
        location:"dinermenus"
    },
    {
        id:9,
        category:"dinner",
        menuname:"Baked Wings",
        individualMeals:["Chicken Wings", "Fried Rice", "Shepherd's Salad"],
        img:"images/bakedwings.png",
        location:"dinermenus"
    },
    {
        id:3,
        category:"lunch",
        menuname:"Meatball Sandwich",
        individualMeals:["12 Classic Meatballs", "Curly Fries", "Creamy Coleslaw"],
        img:"images/kofte.png",
        location:"lunchmenus"
    },
    {
        id:4,
        category:"lunch",
        menuname:"'Shrooms",
        individualMeals:["Oyster Mushrooms", "Broccoli Soup", "Classic Italian Pasta"],
        img:"images/mushrooms.png",
        location:"lunchmenus"
    },
    {
        id:5,
        category:"lunch",
        menuname:"Taco Tuesday",
        individualMeals:["Tomato Soup", "Cheesy Ground Beef Tacos", "Corn Pudding"],
        img:"images/tacos.png",
        location:"lunchmenus"
    },
    {
        id:6,
        category:"breakfast",
        menuname:"English Breakfast",
        individualMeals:["Haricot Beans", "Pork Sausage", "Fried Eggs",],
        img:"images/englishbreakfast.png",
        location:"breakfastmenus"
    },
    {
        id:7,
        category:"breakfast",
        menuname:"Nutella Pancakes",
        individualMeals:["Classic Pancakes", "Nutella", "English Tea"],
        img:"images/nutellapancakes.png",
        location:"breakfastmenus"
    },
    {
        id:8,
        category:"breakfast",
        menuname:"Green Shakshuka",
        individualMeals:["Fried Spinach and Eggs", "Cappato", "English Tea"],
        img:"images/greenshakshuka.png",
        location:"breakfastmenus"
    },
    {
        id:10,
        category:"diet",
        menuname:"Pepperoni Omlette with vegetables",
        individualMeals:["Pepperoni Omelette", "Classic Cheese", "English Tea"],
        img:"images/pepperoniomelette.png",
        location:"dietmenus"
    },
    {
        id:11,
        category: "diet",
        menuname:"Leaf Wraps",
        individualMeals:["Leaf Wraps", "Garlic Yoghurt", "Shepherd's Salad"],
        img:"images/leafwrap.png",
        location:"dietmenus"
    },
    
        
    
]

const dinnerınner = document.querySelector(".dinner__inner");
const locationVal = window.location;
console.log(locationVal)
const locname =  locationVal.pathname.slice(11  
    , locationVal.pathname.length -5)
console.log(locname)



window.addEventListener("DOMContentLoaded", () => {
   const newMenus = menus.filter(item => item.location === locname)
    let displaymenu = newMenus.map(item => `<div class="single__dinner">
    <p class="dinner__name">${item.menuname}</p>
    <a href="${item.menuname.replace(/ /g, "").toLowerCase()}.html">
        <div class="img__container">
            <img src="${item.img}" alt="">
        </div>
    </a>
    <div class="single_dinner-footer"><span>By Chef Tugrul</span></div>
</div>`)


    displaymenu = displaymenu.join("");
    console.log(displaymenu)
    dinnerınner.innerHTML = displaymenu
})
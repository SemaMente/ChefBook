// const SearchForm= document.querySelector(".search-form");

// const searchBtn = document.querySelector("#search-btn");

// searchBtn.addEventListener("click" , function(){
// 	SearchForm.classList.toggle("active");
// 	document.addEventListener("click", function(e){
// 		if (!e.composedPath().includes(searchBtn) && !e.composedPath().includes(SearchForm) ) {
// 			SearchForm.classList.remove("active");
// 		}
// 	});
// });

const favedFoods = []

//const classı icon1 olan elemanı çağırdık
const faved = document.querySelector(".icon1")
//const classı icon2 olan elemanı çağırdık
const faved_fill = document.querySelector(".icon2")




//
faved?.addEventListener("click",(event)=>{
	const menuName = document.querySelector(".menu__header")
	const menuRealName = menuName.innerHTML
	if(!favedFoods.includes(menuRealName)){
		favedFoods.push(menuRealName);
	}	

	if(!localStorage.getItem("favs")){
		localStorage.setItem("favs", JSON.stringify(favedFoods))
		
	}
	

	
	console.log(favedFoods)

	event.target.classList.toggle("active")
	faved_fill.classList.toggle("active")
	
})

faved_fill?.addEventListener("click",()=> {
	faved.classList.toggle("active")
	faved_fill.classList.toggle("active")
})

export default favedFoods
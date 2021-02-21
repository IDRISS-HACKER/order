import Save from "./import/Save"
import Reload from "./import/Reload"

window.onload = function(){

 (function(global){
 	
 	const settingsSave:object = {
 		input: "#price",
 		button: "#add",
 	}

 	 const settingsReload:object = {
 		file: "Ajax9ecd8123786622b0b15695b13eaddc9c/cont.php",
 		button: "#add",
 		cont: "#tab" 
 	}

 	let add = document.querySelector("#add")

 	let price = new Save(settingsSave)
 	let reloadPrice = new Reload(settingsReload)

 	reloadPrice.reloading()
 	add.addEventListener("click", function(){
 		reloadPrice.reloading()
 		price.saving()
		reloadPrice.reloading()	
 	})

 	reloadPrice.reloading()

	
	
 })(window)
}

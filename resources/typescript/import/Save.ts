/**
 * --------------------------------------------------------------------------
 * IDRISS HACKER (v1.0.0): Save.ts
 * Licensed under MIT (https://github.com/twbs/idriss-hacker/blob/main/LICENSE)
 * --------------------------------------------------------------------------
 */


/**
 * ------------------------------------------------------------------------
 * Constants
 * ------------------------------------------------------------------------
 */
const version:number = 1.1
const author:string = "IDRISS HACKER"
const name:string = "Save"
const time:string = "3.11.2020"
const timeUpdated:string = "3.11.2020"

let input:any
let button:any

/**
 * ------------------------------------------------------------------------
 * Class Defined
 * ------------------------------------------------------------------------
 */
export default class Save
{

	constructor(data){
		input = data.input
		button = data.button
	}

	public function saving(){

		console.log("saving");

		//button = document.querySelector(button)

			let xhr = new XMLHttpRequest()
			input = document.querySelector("#price")
			let price = input.value;

			/*if(typeof price != "number"){

				console.log("entrez un nombre")
				return false
			}*/

			xhr.onload = function(){
				
				if(xhr.readyState == 4 && xhr.status == 200){

					let content = JSON.parse(xhr.responseText)

					content = content[0]

					console.log(content)

					if(content == "error"){
						input.classList.remove("is-valid")
						input.classList.add("is-invalid")

					}else{
						input.classList.remove("is-invalid")
						input.classList.add("is-valid")
						input.value = ""
					}
				}
			}
			xhr.open(
				"POST", 
				"./Ajax9ecd8123786622b0b15695b13eaddc9c/saving.php"
			)
			
			let data = new FormData()

			data.append("price", price)

			xhr.send(data)

	}


}//end save
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
const name:string = "Reload"
const time:string = "3.11.2020"
const timeUpdated:string = "3.11.2020"

let file:any
let button:any
let cont:any

/**
 * ------------------------------------------------------------------------
 * Class Definition
 * ------------------------------------------------------------------------
 */
export default class Reload
{

	constructor(data){
		file = data.file
		button = data.button
		cont = data.cont
	}

	public function reloading(){

		console.log('reload');

		//button = document.querySelector(button)

			let xhr = new XMLHttpRequest()

			xhr.onload = function(){
				
				if(xhr.readyState == 4 && xhr.status == 200){

					let content = xhr.responseText

					cont = document.querySelector("#tab") 
					//content = document
					cont.innerHTML  = content

					//console.log(content)
				}
			}
			xhr.open(
				"GET", 
				file
			)
			
			xhr.send()
	}


}//end Reload
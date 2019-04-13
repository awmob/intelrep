
class Navme{


	constructor(start_val){
		this.start_val = start_val;

		this.hammy = document.getElementById("hamburgers");

		this.hammy.addEventListener("click", ()=>{

			this.setme();
		});
	}

	set_start(setter){
		this.start_val = setter;
	}

	get_start(){
		return this.start_val;
	}

	//display and hide menu on hamburger click
	setme(){
		//the main navigation
		let box = document.getElementById("navelements");
		let boxes = document.querySelectorAll(".menusep");

		//only do when menu not being shown already
		if(this.get_start()){
			this.hide_nav(box, boxes);
			this.set_start(false);
		}
		else{
			this.set_start(true);
			this.add_styles(box, boxes);

			//hide when the screen resizes
			window.addEventListener("resize", ()=>{
				if (window.matchMedia("(min-width: 993px)").matches) {
					this.hide_nav(box, boxes);
					this.set_start(false);
				}
			});
		}

	}//end function

	//add new styles for nav show on hamburger click
	add_styles(box, boxes){
		//set styles
		box.style.display = 'inline-block';
		box.style.backgroundColor = '#cc0000';
		box.style.margin = '55px 0px 0px 0px';
		box.style.padding = '10px 10px 10px 10px';
    box.style.zIndex = "2001";


		//the individual nav elements
		for (let x = 0; x < boxes.length; x++) {
			boxes[x].style.display = "block";
      boxes[x].style.color = "white";
      boxes[x].style.fontSize = "18px";
			boxes[x].style.zIndex = "2000";
		}
	}

	hide_nav(box, boxes){
		box.style.cssText  = '';
		for (let i = 0; i < boxes.length; i++) {
			boxes[i].style.cssText = "padding: 0px 15px 0px 15px;";
		}
	}

}

let navs = new Navme(false);

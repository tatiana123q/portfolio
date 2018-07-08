window.onload = function(){
	const items = document.querySelectorAll(".main-inf_buttons_item");
	const next = document.querySelector(".main-inf_content_next");
	const percent1 = document.querySelector(".main-foto_percent1");
	const percent2 = document.querySelector(".main-foto_percent2");

	for(let i = 0; i<items.length; i++){
		items[i].onclick = function(){
			active(next);
			if(i === 0){
				active(percent1);
				nonactive(percent2);
			}else if(i === 1){
				active(percent2);
				nonactive(percent1);
			}
		}

	}

	function active(param){
		param.style.opacity="1";
	}
	function nonactive(param){
		param.style.opacity="0";
	}

}
/*****

Image Cross Fade Redux
Version 1.0
Last revision: 02.15.2006
steve@slayeroffice.com

Please leave this notice intact. 

Rewrite of old code found here: http://slayeroffice.com/code/imageCrossFade/index.html


*****/


window.addEventListener?window.addEventListener("load",so_init,false):window.attachEvent("onload",so_init);

var d=document, imgs = new Array(), zInterval = null, current=0, pause=false;

function so_init() {
	if(!d.getElementById || !d.createElement)return;

	// DON'T FORGET TO GRAB THIS FILE AND PLACE IT ON YOUR SERVER IN THE SAME DIRECTORY AS THE JAVASCRIPT!
	// http://slayeroffice.com/code/imageCrossFade/xfade2.css
	css = d.createElement("link");
	css.setAttribute("href","xfade2.css");
	css.setAttribute("rel","stylesheet");
	css.setAttribute("type","text/css");
	d.getElementsByTagName("head")[0].appendChild(css);

	imgs = d.getElementById("imageContainer").getElementsByTagName("img");
	for(i=1;i<imgs.length;i++) imgs[i].xOpacity = 0;
	imgs[0].style.display = "block";
	imgs[0].xOpacity = .99;
	
	setTimeout(so_xfade,150);
}

function so_xfade() {
	cOpacity = imgs[current].xOpacity;
	nIndex = imgs[current+1]?current+1:0;

	nOpacity = imgs[nIndex].xOpacity;
	
	cOpacity-=.05; 
	nOpacity+=.05;
	
	imgs[nIndex].style.display = "block";
	imgs[current].xOpacity = cOpacity;
	imgs[nIndex].xOpacity = nOpacity;
	
	setOpacity(imgs[current]); 
	setOpacity(imgs[nIndex]);
	
	if(cOpacity<=0) {
		imgs[current].style.display = "none";
		current = nIndex;
		setTimeout(so_xfade,1500);
	} else {
		setTimeout(so_xfade,100);
	}
	
	function setOpacity(obj) {
		if(obj.xOpacity>.99) {
			obj.xOpacity = .99;
			return;
		}
		obj.style.opacity = obj.xOpacity;
		obj.style.MozOpacity = obj.xOpacity;
		obj.style.filter = "alpha(opacity=" + (obj.xOpacity*100) + ")";
	}
	
}
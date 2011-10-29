$.fn.preLoadImages = function(parameters){
	preLoadImages = {
		obj : null,
		preload : new Array(),
		init : function(FatherTag, funk){
			var not_loaded = 0, i = 0, n = 0; //Не загруженные картинки, счетчики
			this.obj = FatherTag;
			
			if (typeof arguments[arguments.length - 1] == 'function') {
				callback = arguments[arguments.length - 1];
			} else {
				callback = false;
			}
			//Получаем путь к картинке
			img = $('img', this.obj);
			
			for (i=0;i < img.length; i++) {           
				this.preload[i] = img.eq(i).attr("src");
			}			
	 		not_loaded = img.length; 	
			n = img.length;
			
			for (i = 0; i < n; i++) {				
				$(new Image()).attr('src', this.preload[i]).load(function() {
					if (--not_loaded < 1 && typeof callback == 'function') {
						callback();
					}
				});				
			} 							
		}
	};
	preLoadImages.init($(this), parameters);
};

function sRand() {
	return Math.random() > 0.5 ? 1 : -1;
}
function Lbox(){$(function() { $("#gallery a").fancybox(); }); }

function RandomImage(){
	$('#chooseGallery img').hide();	
	var len = $('#chooseGallery img').length;	
	mas = new Array();		
	for(var j = 0; j < len; j++){
		mas[j] = j;
	}
	mas.sort(sRand); i = 0;	
	$('#chooseGallery img').each(function(n, element){		
		$('#chooseGallery li img').delay(150).eq(mas[n]).fadeIn(400);		
	});	
}

function Next(){	
	var last =	$('#chooseGallery img:last').attr('src');	
	last = last.substring(last.lastIndexOf('/')+1,last.lastIndexOf('s.'));
	$.ajax({
		type: 'POST',
		data:'id='+last+'&way=1',
		url:'/ajax/list',
		datatype:'json',
		success: function(data){						
			var p = data;			
			var set = '';
			if(p.length != 0){
				$('#blnext').css('z-index','-1');
				$('#next').fadeIn(1000);
			} else {
				$('#next').fadeOut(1000);
			}
			$('#next_container').empty();			
			for(var i = 0;i < p.length; i++){
				set += '<li class="loaded"><a href="../img/upload/'+p[i].id+p[i].ext+'" title="'+p[i].alt+'"><img src="../img/upload/'+p[i].id+'s'+p[i].ext+'" /></a></li>';					
			}
			$('#next_container').append(set);
		}				
	});
}
function Prev(){
	var first =	$('#chooseGallery img:first').attr('src');
	first = first.substring(first.lastIndexOf('/')+1,first.lastIndexOf('s.'));
	$.ajax({
		type: 'POST',
		data:'id='+first+'&way=2',
		url:'/ajax/list',
		datatype:'json',
		success: function(data){
			var p = data;
			var set = '';			
			if(p.length != 0){
				$('#blprev').css('z-index','-1');
				$('#prev').fadeIn(1000);
			} else {
				$('#prev').fadeOut(1000);
			}
			$('#prev_container').empty();			
			for(var i = 0;i < p.length; i++){
				set += '<li  class="loaded"><a href="../img/upload/'+p[i].id+p[i].ext+'" title="'+p[i].alt+'"><img src="../img/upload/'+p[i].id+'s'+p[i].ext+'" /></a></li>';					
			}
			$('#prev_container').append(set);
		}				
	});
}
$(document).ready(function() {
	
	Lbox();
	$('#gallery').preLoadImages(function () {
		$('.loading').fadeOut(2500, function(){ Next();});			
			$("#chooseGallery .first").each(function(n,elem){				
				switch (n) {
					case 0: y='-=220px'; x='-=400px';break;
					case 1: y='-=220px'; x='-=190px';break;
					case 2: y='-=220px'; x='+=20px';break;
					case 3: y='-=220px'; x='+=230px';break;
					case 4: y='-=60px'; x='-=400px';break;
					case 5: y='-=60px'; x='-=190px';break;
					case 6: y='-=60px'; x='+=20px';break;
					case 7: y='-=60px'; x='+=230px';break;
					case 8: y='+=100px'; x='-=400px';break;
					case 9: y='+=100px'; x='-=190px';break;
					case 10: y='+=100px'; x='+=20px';break;
					case 11: y='+=100px'; x='+=230px';break;
				}	
				$(elem).delay(1000).animate({ 
					height: '150px',
					width: '200px',					
					left: x,
					top: y,
					opacity: 1,                
				}, 2500, function(){ if(n == 11){RandomImage();} });			
			});			
	});
	$('#prev').click(function(){
		$('#prev_container').preLoadImages(function () {
			$('#blprev').css('z-index','1');
			$('#next_container').empty();
			$('#chooseGallery').fadeOut(500, function() {			
				$("> li", this).appendTo('#next_container');
				$('#prev_container li').appendTo(this);
				$('#chooseGallery').fadeIn(0, function() {								
					RandomImage();
					$('#next').fadeIn(1000);
					$('#blnext').css('z-index','-1');
					Prev();
					Lbox();
					});		
				});	
		});
	});	
	$('#next').click(function(){
		$('#next_container').preLoadImages(function () {
			$('#blnext').css('z-index','1');
			$('#prev_container').empty();
			$('#chooseGallery').fadeOut(500, function() {			
				$("li", this).appendTo('#prev_container');			
				$('#chooseGallery').fadeIn(0, function() {	
					$('#next_container li').appendTo(this);			
					RandomImage();
					$('#prev').fadeIn(1000);
					$('#blprev').css('z-index','-1');
					Next();
					Lbox();
				});		
			});
		});
	});		
});	    
		
	
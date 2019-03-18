	var url = "https://mrcf.gstx168.com/api/";
	var image_url = "https://mrcf.gstx168.com";
	$(function(){
		company_info();
		get_company();
	});
	function company_info(){
		var id = get_id('id');
	$.ajax({
		url: url+'app/goodsinfo',
		type: 'POST',
		dataType: 'json',
		data: {id: id},
		success:function(res){
			var newsinfo = res.data;
			$(".title").html(newsinfo.title);
			$(".body").html(newsinfo.body);
			console.log(res.banner);
			$(res.banner).each(function() {
				$(".banner").append("<li class='col-md-3'>"+
                        "<img class='img-responsive' src='"+image_url+this+"' >"+
                    "</li>");
			});
		}
	});
	}
/**
 * 获取路由id
 */
function get_id(variable){
 var query = window.location.search.substring(1);
       var vars = query.split("&");
       for (var i=0;i<vars.length;i++) {
               var pair = vars[i].split("=");
               if(pair[0] == variable){return pair[1];}
       }
       return(false);
}	
function get_company(){
		$.ajax({
			url: url+'app/goods_class',
			success:function(res){
				$(res.data).each(function() {
					$(".company").append("<div class='row' style='margin-top: 20px;'>"+
                            "<a href='pro-info.html?id="+this.id+"'>"+
                                "<div class='col-md-4'><img class='img-rounded img-responsive' src='"+image_url+this.image+"'></div>"+
                                "<div class='col-md-8'>"+this.title+"</div>"+
                            "</a>"+
                        "</div>");
				});
			}
		})

	}
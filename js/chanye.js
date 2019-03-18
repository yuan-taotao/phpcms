	var url = "https://mrcf.gstx168.com/api/";
	var image_url = "https://mrcf.gstx168.com";
	$(function(){
		get_company();
	});
		function get_company(){
		$.ajax({
			url: url+'app/goods_class',
			success:function(res){
				$(res.data).each(function() {
					$(".company").append("<div class='col-md-4 col-sm-4'>"+
                "<div class='single-news'>"+
                    "<div class='image'>"+
                        "<img src='"+image_url+this.image+"' class='img-responsive' alt='image' />"+
                        "<i class='fa fa-picture-o'></i>"+
                    "</div>"+
                    "<div class='content'>"+
                        "<h4>"+this.title+"</h4>"+
                        "<p>"+this.news_class+"</p>"+
                        "<a href='pro-info.html?id="+this.id+"'>查看详情</a>"+
                    "</div>"+
                "</div>"+
            "</div>");
				});
			}
		})

	}

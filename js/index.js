	var url = "https://mrcf.gstx168.com/api/";
	var image_url = "https://mrcf.gstx168.com";
	$(function(){
		get_company();
		get_news();
	});

	function get_company(){
		$.ajax({
			url: url+'app/goods_classs',
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

	function get_news(){
		$.ajax({
			url: url+'app/zx_news',
			type: 'POST',
			dataType: 'json',
			success:function(res){
				$(res).each(function() {
					$(".news").append("<div class='col-md-6 col-sm-6'>"+
                "<div class='home-single-service second'>"+
                    "<div class='row'>"+
                        "<div class='col-sm-6 pdr0'>"+
                            "<div class='image'>"+
                                "<img src='"+image_url+this.image+"' class='img-responsive' alt='service image' />"+
                            "</div>"+
                        "</div>"+
                        "<div class='col-sm-6 pdl0'>"+
                            "<div class='content'>"+
                                "<h4>"+this.title+"</h4>"+
                                "<p class='hidden-sm'>"+this.jj+"</p>"+
                                "<a href='new-info.html?id="+this.id+"'>查看详情</a>"+
                            "</div>"+
                        "</div>"+
                    "</div>"+
                "</div>"+
            "</div>");
				});
			}
		})
	}
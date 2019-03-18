	var url = "https://mrcf.gstx168.com/api/";
	$(function(){
		get_about();
	});
	function get_about(){
		$.ajax({
			url: url+'app/get_company',
			success:function(res){
				$(".title").html(res.data[0].company);
				$(".body").html(res.data[0].introduction);
				$(".ebody").html(res.data[0].body);
			}
		})
	}
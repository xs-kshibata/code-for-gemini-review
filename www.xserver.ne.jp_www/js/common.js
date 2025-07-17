$(function(){
    setTimeout(init, 0);
});

function init(){
	appendClickEvent();
}

function appendClickEvent(){
	$('.ico_eye_field').find('i').off('click');

	$('.ico_eye_field').find('i').on('click',function(){
	    var pass = $(this).attr('show_from_id');
	    var pass_view = $(this).attr('hide_from_id');
	    var add_name = $(this).attr('add_name');
	    var pass_value;

	    if($(pass) === null || $(pass_view) === null) return false;

	    if($(pass).hasClass("form_hide")){
	        $(pass).removeClass("form_hide");
            $(pass).addClass("form_show");
	        $(pass_view).addClass("form_hide");
            $(pass_view).removeClass("form_show");
	        if(add_name !== null){
		        $(pass).attr("name",add_name)
		        $(pass_view).attr("name","");
	        }
	        pass_value = $(pass_view).val();
	        $(pass).val(pass_value);
	        $(this).removeClass('ico_eye_open');
	        $(this).addClass('ico_eye_close');
	    }else{
	        $(pass).addClass("form_hide");
            $(pass).removeClass("form_show");
	        $(pass_view).removeClass("form_hide");
            $(pass_view).addClass("form_show");
	        if(add_name !== null){
		        $(pass).attr("name","");
		        $(pass_view).attr("name",add_name)
	        }
	        pass_value = $(pass).val();
	        $(pass_view).val(pass_value);
	        $(this).removeClass('ico_eye_close');
	        $(this).addClass('ico_eye_open');
	    }
	});
}

function changedomain(action) {
    var domain = $('.common_domain_select').val();
    location.href='?'+action+'=true&did='+domain;
}
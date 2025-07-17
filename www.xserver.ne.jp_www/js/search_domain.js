// JavaScript Document
$(function() {
    // [X] サービスサイトの「ドメイン新規取得」
    var $formContainer = $('#common_domain_search_loading_img');
    var $form = $formContainer.find('form');

    var onSubmit = function(){
        if ($form.off) {
            $form.off('submit.common_search_domain_submitEvent', onSubmit);
        } else {
            $form.unbind('submit.common_search_domain_submitEvent', onSubmit);
        }
        $form.find('button[type=submit]').remove();
        $('#common_domain_search_spinner').show();
    };

    if ($form.on) {
        $form.on('submit.common_search_domain_submitEvent', onSubmit);
    } else {
        $form.bind('submit.common_search_domain_submitEvent', onSubmit);
    }
});

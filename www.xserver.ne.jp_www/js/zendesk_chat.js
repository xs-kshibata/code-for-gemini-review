!function(){
    'use strict';
    var n = function(){
        if (!window.zE) throw new Error("zE not found");
        window.zE('webWidget','updateSettings',{
            webWidget: {
                chat: {
                    //���󥷥��른��Υ��Х���
                    concierge: {
                        avatarPath: '../img/support/avatar_chat.png'
                    },
                    //�����������ɽ��
                    departments: {
                        enabled: [],
                        select: '���å��������С�'
                    }
                },
                navigation: {
                    //�ݥåץ��åץܥ������ɽ��
                    popoutButton: {
                        enabled: false
                    }
                },
                //�ơ��ޥ��顼
                color: {
                    theme: '#1b63a7'
                }
            }
        });
        //���������åȤ������֤Ǳ���
        window.zE('webWidget:on','chat:connected',(function(){
            return window.zE('webWidget','hide');
        }));
        //���������åȤ��Ĥ����Ȥ��˱���
        window.zE('webWidget:on','close',(function(){
            return window.zE('webWidget','hide');
        }));
    },
    //���������åȵ�ư����
    t = function(){
        window.$zopim((function(){
            return window.$zopim.livechat.window.show();
        }));
    };
    document.addEventListener('DOMContentLoaded',(function(){
        //���������åȤ˥��������Ŭ��
        n();
        //���������åȵ�ư�Υȥꥬ��
        document.querySelectorAll('.support-chat-trigger').forEach((function(n){
            n.addEventListener('click',t);
        }));
    }));
}();
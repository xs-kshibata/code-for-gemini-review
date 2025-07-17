!function(){
    'use strict';
    var n = function(){
        if (!window.zE) throw new Error("zE not found");
        window.zE('webWidget','updateSettings',{
            webWidget: {
                chat: {
                    //コンシェルジュのアバター
                    concierge: {
                        avatarPath: '../img/support/avatar_chat.png'
                    },
                    //部門選択を非表示
                    departments: {
                        enabled: [],
                        select: 'エックスサーバー'
                    }
                },
                navigation: {
                    //ポップアップボタンを非表示
                    popoutButton: {
                        enabled: false
                    }
                },
                //テーマカラー
                color: {
                    theme: '#1b63a7'
                }
            }
        });
        //ウィジェットを初期状態で隠す
        window.zE('webWidget:on','chat:connected',(function(){
            return window.zE('webWidget','hide');
        }));
        //ウィジェットを閉じたときに隠す
        window.zE('webWidget:on','close',(function(){
            return window.zE('webWidget','hide');
        }));
    },
    //ウィジェット起動処理
    t = function(){
        window.$zopim((function(){
            return window.$zopim.livechat.window.show();
        }));
    };
    document.addEventListener('DOMContentLoaded',(function(){
        //ウィジェットにカスタムを適用
        n();
        //ウィジェット起動のトリガー
        document.querySelectorAll('.support-chat-trigger').forEach((function(n){
            n.addEventListener('click',t);
        }));
    }));
}();
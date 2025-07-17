var logger = (function() {
    var loggingApi = "https://secure.xserver.ne.jp/xinfo/";
    var timestamp = "";
    var message = "";
    var fileName = "";
    var lineNo = "";
    var colNo = "";
    var error = "";
    var occurredUrl = "";
    var userAgent = "";

    function _init() {
        if(window.addEventListener) {
            window.addEventListener('error', _send, false);
        } else {
            window.attachEvent('onerror', function(msg, file, line, col, error) {
                var errorObj = {
                    message: msg,
                    filename: file,
                    lineno: line,
                    colno: col,
                    error: error
                };

                _send(errorObj);
            });
        }
    }

    function setLog(eventObj) {
        timestamp = _getLoggedTimestamp();
        message = eventObj.message;
        fileName = eventObj.filename;
        lineNo = eventObj.lineno;
        colNo = eventObj.colno;
        error = eventObj.error;
        occurredUrl = location.href;
        userAgent = window.navigator.userAgent;
    }

    function _send(eventObj) {
        if(_isSamePreviousLog(eventObj) || _isScriptError(eventObj.message)) {
            return;
        }

        setLog(eventObj);

        if(window.XDomainRequest) {
            var xdr = new XDomainRequest();
            var param = '?action_api2_loggingjserror=on&timestamp='+timestamp+'&message='+message+'&fileName='+fileName+'&lineNo='+lineNo+'&colNo='+colNo+'&error='+error+'&occurredUrl='+occurredUrl+'&userAgent='+userAgent;
            xdr.onprogress = function(){};
            xdr.ontimeout = function(){};
            xdr.onload = function() {
                //console.info('error logged');
            };
            xdr.onerror = function() {
                //console.info('error logged');
            };
            xdr.open('GET', loggingApi + param);
            xdr.send();
        } else {
            $.ajax({
                url: loggingApi,
                type: "POST",
                dataType: "json",
                data: {
                    action_api2_loggingjserror: "on",
                    timestamp: timestamp,
                    message: message,
                    fileName: fileName,
                    lineNo: lineNo,
                    colNo: colNo,
                    error: error,
                    occurredUrl: occurredUrl,
                    userAgent: userAgent,
                }
            }).always(function(error) {
                //console.info('error logged');
            });
        }
    }
    
    function _isScriptError(message) {
        var messageLowerCase = message.toLowerCase();
        return (messageLowerCase.indexOf('script error') > -1) ? true : false;
    }

    function _isSamePreviousLog(eventObj) {
        if(occurredUrl === location.href && message === eventObj.message && fileName === eventObj.filename && lineNo === eventObj.lineno) {
            return true;
        }
        return false;
    }

    function _getLoggedTimestamp() {
        var now = new Date();
        var date = now.getFullYear() + '-' + ((now.getMonth() + 1) < 10 ? '0' : '') + (now.getMonth() + 1) + '-' + (now.getDate() < 10 ? '0' : '') + now.getDate();
        var time = (now.getHours() < 10 ? '0' : '') + now.getHours() + ':' + (now.getMinutes() < 10 ? '0' : '') + now.getMinutes() + ':' + (now.getSeconds() < 10 ? '0' : '') + now.getSeconds();
        return date + ' ' + time;
    }

    //_init();

    return {
        setLog: setLog
    };

})();

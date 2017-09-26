/** API for App Market feature
 *
 * 1. Will run in a separate domain iframe
 * 2. Will pass A/B test apps in the url ==> param - test=testId*
 * 3. Communication with the editor will be done using post messages
 * 4. AppMarket API:
 *    init - initialize the AppMarket instance
 *    call - send command to the editor
 *
 * */

var AppMarket = (function() {
    var _w = {
        Commands: {
            ADD_APP_TO_SITE: "ADD_APP_TO_SITE",
            ADD_COMPONENT_TO_SITE: "ADD_COMPONENT_TO_SITE",
            REMOVE_APP_FROM_SITE: "REMOVE_APP_FROM_SITE",
            UPGRADE_APP: "UPGRADE_APP",
            OPEN_MARKET_POPUP: "OPEN_MARKET_POPUP",
            OPEN_MODAL: "OPEN_MODAL",
            CLOSE_MARKET_POPUP: "CLOSE_MARKET_POPUP",
            CLOSE_MODAL: "CLOSE_MODAL",
            GET_INSTALLED_APPS: "GET_INSTALLED_APPS",
            GET_TEST_APPS: "GET_TEST_APPS",
            GET_USER_DETAILS: "GET_USER_DETAILS",
            IS_ALIVE: "IS_ALIVE",
            EXECUTE_COMMAND: "EXECUTE_COMMAND",
            GET_PENDING_APPS_LIST: "GET_PENDING_APPS_LIST",
            REMOVE_PENDING_APP: "REMOVE_PENDING_APP",
            APP_IS_INSTALLED: "APP_IS_INSTALLED"
        },

        Events: {
            ON_MARKET_OPEN: "ON_MARKET_OPEN",
            ON_POPUP_CLOSE: "ON_POPUP_CLOSE",
            ON_COMMAND_RESPONSE: "ON_COMMAND_RESPONSE"
        },

        callId: 1,

        callbacks: {},

        editorOrigin: '*',

        onOpenCallback: null,
        onPopupCloseCallback: null,

        getQueryParameters: function(paramName) {
            var query = location.search.substring(1);

            var params = query.split('&').filter(function(item){
                var i = item.split('=');
                return i[0] === paramName;
            });

            params.forEach(function(element, index, array) {
                array[index] = element.substring(paramName.length+1);
            });

            return params;
        },

        receiver: function(event) {
            var data = null;
            if (event.origin === this.editorOrigin) {
                data = JSON.parse(event.data);
                switch(data.eventType) {
                    case this.Events.ON_COMMAND_RESPONSE:
                        if (data.callerId && this.callbacks[data.callerId]) {
                            this.callbacks[data.callerId](data.params);
                            delete this.callbacks[data.callerId];
                        }
                        break;
// TODO: This event will not be implemented in first stage. We might bring it back later.
//                    case this.Events.ON_MARKET_OPEN:
//                        if (this.onOpenCallback && this.onOpenCallback.func){
//                            this.onOpenCallback.func.apply(window, this.onOpenCallback.params);
//                        }
//                        break;
                    case this.Events.ON_POPUP_CLOSE:
                        if (this.onPopupCloseCallback && this.onPopupCloseCallback.func){
                            this.onPopupCloseCallback.func.apply(window, this.onPopupCloseCallback.params);
                        }
                        break;
                }
            } else {
                data = JSON.parse(event.data);
                if (data && data.eventType && data.eventType === "INIT") {
                    if (data.origin) {
                        this.editorOrigin = data.origin;
                    }
                }
            }
        },

        getBlob: function(cmd, params, onResponseCallback) {
            var compId = _w.getQueryParameters('compId')[0] || 'MarketPanel';
            var blob = {intent: "APP_MARKET", compId:compId, id: this.getCallId(), cmd: cmd, params: params};
            if (onResponseCallback) {
                this.callbacks[blob.id] = onResponseCallback;
            }

            return blob;
        },

        myOrigin: function() {
            return location.protocol + "//" + location.host;
        },

        getCallId: function() {
            return _w.callId++;
        }
    };

    return {
        /**
         * Initialize the message listener
         * and the market open callback
         * @param {Function} onOpenCallback - Function (will run in the iframe window context)
         * @param {Array} callbackParams - Array of params to pass the callback function
         */
        init: function(onOpenCallback, callbackParams) {
            _w.onOpenCallback = {};
            _w.onOpenCallback.func = onOpenCallback;
            _w.onOpenCallback.params = callbackParams;

            // get the editor origin
            var originQueryParam = _w.getQueryParameters('eo')[0];
            var decodedQueryParam = decodeURIComponent(originQueryParam);
            _w.editorOrigin = (originQueryParam && atob(decodedQueryParam)) || _w.editorOrigin;

            window.addEventListener('message', _w.receiver.bind(_w), false);

            // report liveness
            this.call(_w.Commands.IS_ALIVE);
        },

        /** Function call
         * Pass a command to the editor
         *
         * @param cmd - from Commands
         * @param params - command specific
         * @param onResponseCallback - a callback function when the response is ready
         */
        call: function(cmd, params, onResponseCallback) {
            if (!cmd || !_w.Commands[cmd]) {
                return;
            }

            /* prepare call parameters */
            var blob = _w.getBlob(cmd, params, onResponseCallback);
            if (_w.editorOrigin) {
                window.parent.postMessage(JSON.stringify(blob),_w.editorOrigin);
            }
        },

        /** Function executeCommand
         * Execute a command in the wix editor
         *
         * @param cmdName - command name
         * @param cmdParams - command parameters (JSON)
         */
        executeCommand: function(cmdName, cmdParams) {
            this.call(_w.Commands.EXECUTE_COMMAND,{name:cmdName, params:cmdParams});
        },

        /** Function addAppToSite
         * Add application to the editor stage
         *
         * @param appDefData
         * @param type
         * @param widgetId
         */
        addAppToSite: function(appDefData, type, widgetId) {
            this.call(_w.Commands.ADD_APP_TO_SITE,{appDefinitionDataObj: appDefData, type:type, widgetId: widgetId});
        },

        /** Function addComponentToSite
         * Add application to the editor stage
         *
         * @param compType
         */
        addComponentToSite: function(compType) {
            var compArgs;
            if (compType.indexOf('add') === 0) {//e.g. "addFacebookLike"
                compArgs = {compType: compType, styleId: ''};
            } else {
                compArgs = JSON.parse(compType);
            }
            this.call(_w.Commands.ADD_COMPONENT_TO_SITE, compArgs);
        },

        /** Function removeAppFromSite
         *
         * @param appDefData
         */
        removeAppFromSite: function(appDefData) {
            this.call(_w.Commands.REMOVE_APP_FROM_SITE,{appDefinitionDataObj: appDefData});
        },

        /** Function upgradeApp
         * Upgrade application
         *
         * @param appDefData
         */
        upgradeApp: function(appDefData) {
            this.call(_w.Commands.UPGRADE_APP,{appDefinitionDataObj: appDefData});
        },

        /**
         * Function openAppPopup
         * Open market popup in editor (For Settings popup)
         *
         * @param url
         * @param width
         * @param height
         * @param closeCallback
         * @param closeCallbackParams
         */
        openAppPopup: function(url, width, height, closeCallback, closeCallbackParams) {
            this.call(_w.Commands.OPEN_MARKET_POPUP,{url: url, width: width, height: height});
            _w.onPopupCloseCallback = {};
            _w.onPopupCloseCallback.func = closeCallback;
            _w.onPopupCloseCallback.params = closeCallbackParams;
        },

        /**
         * Function openModal
         * Open market popup in editor
         *
         * @param url
         * @param width
         * @param height
         */
        openModal: function(url, width, height, appDefinitionId) {
            this.call(_w.Commands.OPEN_MODAL,{url: url, width: width, height: height, appDefinitionId: appDefinitionId});
        },

        /**
         * Function closeAppPopup
         *
         * Close market popup in editor
         */
        closeAppPopup: function() {
            this.call(_w.Commands.CLOSE_MARKET_POPUP);
        },

        /**
         * Function closeModal
         *
         * Close market modal in editor.
         * @param action - could be add or cancel.
         */
        closeModal: function (action) {
            this.call(_w.Commands.CLOSE_MODAL, { action: action });
        },

        /**
         * Function getUserDetails
         *
         * @param callback
         */
        getUserDetails: function(callback) {
            this.call(_w.Commands.GET_USER_DETAILS, null, callback);
        },

        /**
         * Function getInstalledApps
         *
         * @param callback function
         */
        getInstalledApps: function(callback) {
            this.call(_w.Commands.GET_INSTALLED_APPS, null, callback);
        },

        /**
         * Function getTestApps
         *
         * @param callback function
         */
        getTestApps: function(callback) {
            this.call(_w.Commands.GET_TEST_APPS, null, callback);
        },

        /**
         * Function getPendingAppsList
         *
         * @param callback function
         */
        getPendingAppsList: function (callback) {
            this.call(_w.Commands.GET_PENDING_APPS_LIST, null, callback);
        },

        /**
         * Function removePendingApp
         *
         * @param appId String
         */
        removePendingApp: function (appId) {
            this.call(_w.Commands.REMOVE_PENDING_APP, { id: appId });
        },

        /**
         * Function appIsInstalled - return if an app is installed
         *
         * @param callback function
         */
        getIfAppIsInstalled: function (appDefinitionId, callback) {
            this.call(_w.Commands.APP_IS_INSTALLED, {appDefinitionId: appDefinitionId}, callback);
        }
    };
})();

/**
 * base 64 decode/encode polyfill
 */
(function () {

    var
        object = typeof window != 'undefined' ? window : exports,
        chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=',
        INVALID_CHARACTER_ERR = (function () {
            // fabricate a suitable error object
            try { document.createElement('$'); }
            catch (error) { return error; }}());

    // encoder
    // [https://gist.github.com/999166] by [https://github.com/nignag]
    object.btoa || (
        object.btoa = function (input) {
            for (
                // initialize result and counter
                var block, charCode, idx = 0, map = chars, output = '';
                // if the next input index does not exist:
                //   change the mapping table to "="
                //   check if d has no fractional digits
                input.charAt(idx | 0) || (map = '=', idx % 1);
                // "8 - idx % 1 * 8" generates the sequence 2, 4, 6, 8
                output += map.charAt(63 & block >> 8 - idx % 1 * 8)
                ) {
                charCode = input.charCodeAt(idx += 3/4);
                if (charCode > 0xFF) throw INVALID_CHARACTER_ERR;
                block = block << 8 | charCode;
            }
            return output;
        });

    // decoder
    // [https://gist.github.com/1020396] by [https://github.com/atk]
    object.atob || (
        object.atob = function (input) {
            input = input.replace(/=+$/, '')
            if (input.length % 4 == 1) throw INVALID_CHARACTER_ERR;
            for (
                // initialize result and counters
                var bc = 0, bs, buffer, idx = 0, output = '';
                // get next character
                buffer = input.charAt(idx++);
                // character found in table? initialize bit storage and add its ascii value;
                ~buffer && (bs = bc % 4 ? bs * 64 + buffer : buffer,
                    // and if not first of each 4 characters,
                    // convert the first 8 bits to one ascii character
                    bc++ % 4) ? output += String.fromCharCode(255 & bs >> (-2 * bc & 6)) : 0
                ) {
                // try to find character in table (0-63, not found => -1)
                buffer = chars.indexOf(buffer);
            }
            return output;
        });

}());

AppMarket.init();

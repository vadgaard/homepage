(function() {
    var header
    var mode

    function onHeaderClickHandler() {
        mode = invertMode(mode);
        updateView();
    }

    function getMode(mode) {
        if (mode === 0) return 'light';
        else return 'dark';
    }

    function invertMode(mode) {
        return mode ^ 1;
    }

    function optionalLocalStorageGetItem(key) {
        try {
            return localStorage.getItem(key);
        } catch(e) {
            return null;
        }
    }

    function optionalLocalStorageSetItem(key, value) {
        try {
            window.localStorage.setItem(key, value);
        } catch(e) {
            // ignore
        }
    }

    function updateView() {
        var old_mode = getMode(invertMode(mode));
        var new_mode = getMode(mode);
        optionalLocalStorageSetItem('mode', mode);
        $('link[href="frontend_' + old_mode + '.css"]').attr('href','frontend_' + new_mode + '.css');
        $('img[src="img/drawing_' + old_mode + '.png"]').attr('src','img/drawing_' + new_mode + '.png');
        $('img[src="img/signature_' + old_mode + '.png"]').attr('src','img/signature_' + new_mode + '.png');
    }

    $().ready(function() {
        header = $("#header");
        header.click(onHeaderClickHandler);

        mode = optionalLocalStorageGetItem("mode");
        if (mode == 0)
            mode = 0;
        else {
            mode = 1;
        }
        updateView();
    });
})();

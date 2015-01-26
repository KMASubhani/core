
var site = function() {
    var _this = this;

    function loadHome() {
        // Function calls for loading Home Page
    };

    function loadAbout() {
        // Function calls for loading About Page
    };

    function loadContact() {
        // Function calls for loading Contact Page
    };
    _this.run = function(page) {
        switch (page) {
            case 'home':
                loadHome();
                break;
            case 'about':
                loadAbout();
                break;
            case 'contact':
                loadContact();
                break;
            case 'blog':
            	loadBlog();
            	break;
            default:
                loadHome();
        }
    }
    return _this;
}
var site = new site();

// URL Generator
function urlGen() {
    var str = document.getElementById("title").value;
    var trims = str.trim();
    var url = trims.replace(/[^a-z0-9]/gi, '-').replace(/-+/g, '-').replace(/^-|-$/g, '');
    document.getElementById("url").value = url.toLowerCase();

    // document.getElementById("meta_title").value = str;

    // document.getElementById("meta_slug").value = url.toLowerCase();
}
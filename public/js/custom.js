function custom_file() {
    var id = document.getElementById('customFile').value;
    var value = id.split('\\').splice(-1)[0];
    document.getElementById('customLabel').innerHTML = value;
}
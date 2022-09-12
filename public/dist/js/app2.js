document.getElementById('doctor-submit').onsubmit = function() {
    var selected = [];
    for (var option of document.getElementById('pets').options)
    {
        if (option.selected) {
            selected.push(option.value);
        }
    }
    document.getElementById('specialities').values(selected);
}
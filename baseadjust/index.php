


<button onclick="sendAjaxRequest()">PROVIS_VCCTYPE</button>

<script>


function sendAjaxRequest() {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'provis_vcctype.php', true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Handle the response from the server
            const txt = '{"name":"provis_vcctype Success!"}'
            var obj = JSON.parse(txt);
            //console.log(response.message); // Output: "Hello, world!
            alert(obj.name );
        }
    };
    xhr.send();
}

</script>
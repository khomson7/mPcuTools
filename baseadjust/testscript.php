<script>

var url = 'http://127.0.0.1:3011';
            

fetch(url)
    .then(response => {
      if (!response.ok) {
        throw new Error('Network response was not ok');
      }
    //  return response.json();
    })

    .then(data => {
      // API is working
      console.log('API is working');
    })
    .catch(error => {
     // console.error('There was a problem with the API:', error);
      // API is not working
      console.log('API is not working');
    });

</script>
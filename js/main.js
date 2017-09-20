var blogContainer = document.getElementById("blog-posts-container");

function getD() {

	var getData = new XMLHttpRequest();

    getData.onreadystatechange = function() {

        if (this.readyState == 4 && this.status == 200) {

        	var a = JSON.stringify(this.responseText);

            document.getElementById("cnt").innerHTML = a;

            console.log(JSON.parse(this.responseText));

        }

    };

    getData.open("GET", "http://devel2.ordermate.online/wp-json/wp/v2/posts/", true);

    console.log(getData.responseText);

    getData.send();

}
window.addEventListener("DOMContentLoaded", function() {
    let students = "https://marierichir.sites.3wa.io/res04-php/res04-php-j1/ex-fetch-js-php/index.php";
    
    fetch(students)
    .then(function(response) {
        return response.json();
    })
    .then(function(result) {
        console.log(result);
        let body = document.querySelector("body");
        
        for(let i=0; i<result.length; i++)
        {
            let article = document.createElement("article");
            let header = document.createElement("header");
            let h2 = document.createElement("h2");
            h2.innerHTML = `${result[i].firstName} ${result[i].lastName}`;
            header.appendChild(h2);
            article.appendChild(header);
            
            let section = document.createElement("section");
            let h3 = document.createElement("h3");
            h3.innerHTML = "Notes";
            let ul = document.createElement("ul");
            
            for(let grade of result[i].grades)
            {
                let li = document.createElement("li");
                li.innerHTML = grade;
                ul.appendChild(li);
            }
            
            section.appendChild(h3);
            section.appendChild(ul);
            article.appendChild(section);
            
            body.appendChild(article);
        }
    })
})